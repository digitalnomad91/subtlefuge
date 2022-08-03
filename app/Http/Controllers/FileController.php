<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use App\File;
use App\FileRepository;


class FileController extends Controller
{
    public function viewList(Request $request) {
    	$files = File::where("id", ">=", 1)->paginate(15);
		return view("admin.files.index", ["files"=>$files]);
	}

	public function postUpload(Request $request) {

        $file = $request->file('file');
        $size = $file->getClientSize();
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $nameWithoutExtension = pathinfo($originalName, PATHINFO_FILENAME);
        $saveName = $this->sanitizeName($nameWithoutExtension).time().".".$extension;
        $mimeType = $file->getMimeType();

        /* Move file to save location */
        $location = public_path('files/uploads')."/".$saveName;
        $file->move($location);
        
        //$lastmodified = Storage::lastModified($location);

        /* Save File to database */
        $file = new File;
        $file->user_id = \Auth::user()->id;
        $file->original_name = $originalName;
        $file->saved_name = $saveName;
        $file->full_path = $location;
        $file->size_bytes = $size;
        $file->file_last_modified = "2017-09-01 11:11:11";
        $file->mime_type = $mimeType;
        $file->foreign_table = "test";
        $file->foreign_id = '1';
        $file->save();

        return response()->json(['success'=>$originalName, "size"=>$size, "file_id"=>$file->id, "location"=>$location]);
	}



    function sanitizeName($string, $force_lowercase = true, $anal = false)
    {
        $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
            "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
            "â€”", "â€“", ",", "<", ".", ">", "/", "?");
        $clean = trim(str_replace($strip, "", strip_tags($string)));
        $clean = preg_replace('/\s+/', "-", $clean);
        $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;

        return ($force_lowercase) ?
            (function_exists('mb_strtolower')) ?
                mb_strtolower($clean, 'UTF-8') :
                strtolower($clean) :
            $clean;
    }

} 
