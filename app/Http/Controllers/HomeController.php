<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function webhookJellyfin(Request $request) {

        $page = $request->input("page");

        $cmd = "ASLkjda*s@ !iXKeluvGYeMHbFqiQq:subtlefu.ge ".\Request::ip()." visiting from bla bla";
        $fp = fsockopen("tcp://localhost", 1337, $errno, $errstr, 30);
        if(!$cmd) return "no command given...";
        if(!$fp)  return "conn. refused";
                
        $response = "";
        fwrite($fp, $cmd);
        //while (!feof($fp)) {
        //        $response .= fgets($fp, 128);
        //}
        fclose($fp);

    }

}
