<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use DB;
use auth;
use Embed\Embed;
use App\Link;
use Redirect;
use App\User;
use App\Tag;
use App\TagRelation;
use App\Community;
use App\CommunityLink;


class LinkController extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('log', ['only' => ['fooAction', 'barAction']]);
        //$this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
    }

    /**
        * View for showing a link details (and comments)
        *
        * @param  (int) $id
        * @return Response
    */
    public function getViewCommunityLink($id) {
        $user = Auth::user(); $token = false;
        $link = CommunityLink::find($id)->link;
        $user = User::find($link->user_id);

        return view('links.view', ["pageTitle"=>$link->title, "link"=>$link, "user"=>$user]);
    }

    /**
        * View for creating a new link post
        *
        * @param  Request $request
        * @return Response
    */
    public function getNewCommunityLink()
    {

        return view('links.new', ["feedTitle"=>"Home Feed", "items"=>Array()]);
    }

    /**
        * API / Post processing for new community link post.
        *
        * @param  Request $request
        * @return Response
    */
    public function postNewCommunityLink(Request $request) {
        $user_id = Auth::id();

        $community = Community::where("name", "=", $request->input("community"))->first();
        if(!$community) return response()->json(["errors"=>["Invalid commnity."]]);

        $link = Link::where("url", "=", $request->input("url"))->first();
        if(!$link) return response()->json(["errors" =>["Invalid Link."]]);

        $communityLink = new CommunityLink;
        $data = [
            'user_id' => $user_id,
            'link_id' => $link->id,
            'community_id' => $community->id,
            'title'=>$request->input("title")
        ];
        $communityLink->fill($data);
        $communityLink->save();


         return  response()->json(["success"=>["Link posted successfully."], "link"=>["id"=>$communityLink->id]]);
    }


    /**
        * API for searching for URL meta-data and database storage.
        *
        * @param  Request $request
        * @return Response
    */
    public function LookupLink(Request $request) {
        $user_id = Auth::id();

        //Load any url:
        $info = Embed::create($request->input("url"));
        $link = Link::where("url", "=", $request->input("url"))->first();
        if(!$link) {
            $link = new Link;

            $data = [
                'user_id' => $user_id,
                'url' => $request->input('url'),
                'url_canonical' => $info->url,
                'title' =>  $info->title,
                'description' => $info->description,
                'type' =>$info->type,
                'views' => 1,
                'image' => $info->image,
                'images' => json_encode($info->images),
                //'image_cover_id' => $request->input('image_cover_id'),
                'embed' => $info->code,
                'author_name' => $info->authorName,
                'author_url' => $info->authorUrl,
                'provider_name' => $info->providerName,
                'provider_url' => $info->providerUrl,
                'provider_icon' => $info->providerIcon,
                'provider_icons' => json_encode($info->providerIcons),
                'publish_date' => $info->publishedDate,
                'license' =>  $info->license,
                'rss_feeds' => json_encode($info->feeds),
            ];
            $link->fill($data);
            $link->save();

            /* Insert Keywords into database */
            foreach($info->tags as $val) {
                $tag = Tag::where("tag", "=", $val)->first();

                if(!$tag) {
                    $tag = new Tag;
                    $data = [
                        'tag' => $val,
                    ];
                    $validator = $tag->validator($data);
                    if($validator->fails()) {
                        continue;
                    }

                    $tag->fill($data);
                    $tag->save();
                }

                $tagRelation = new TagRelation;
                $data = [
                    'tag_id' => $tag->id,
                    'link_id' => $link->id,
                    'type' => "link"
                ];
                $tagRelation->fill($data);
                $tagRelation->save();
            }
        }

        /* Extra Info
        echo json_encode($info->tags); //The page keywords (tags)
        echo json_encode($info->images); //List of all images found in the page
        echo $info->image; //The image choosen as main image
        echo $info->imageWidth; //The width of the main image
        echo $info->imageHeight; //The height of the main image
        echo $info->width; //The width of the embed code
        echo $info->height; //The height of the embed code
        echo $info->aspectRatio; //The aspect ratio (width/height)
        echo json_encode($info->linkedData); //The linked-data info (http://json-ld.org/)
        echo json_encode($info->feeds); //The RSS/Atom feeds
        */

        return response()->json(["id"=>$link->id, "title" => $info->title, "embed_code"=>$info->code]);

    }
    
}
