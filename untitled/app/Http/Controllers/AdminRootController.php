<?php

namespace App\Http\Controllers;

use App\Index;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use Storage;

class AdminRootController extends Controller {

    public function index() {
         //Loginしていないユーザーは入れない
        $session = Request::session();

        if ($session->has('name')) {
          
        } else {
            return redirect('/');
        }
        
        return view('admin.index');
    }

    public function update() {
   
//ファイルの入れ替え
        $contentsFile = \Illuminate\Support\Facades\Input::file('filename');
       //dd($image);
        
        $filename = $contentsFile->getClientOriginalName();
        $ext = substr($filename, strrpos($filename, '.') + 1);
        
        
        $data = file_get_contents($contentsFile);
  
        if($ext==='jpg'){
             $upload = $contentsFile->move('image', $filename);
             
        }else if($ext==='png'){
             $upload = $contentsFile->move('image', $filename);
        }
        else{
              Storage::disk('local')->put($filename,$data);
//        Storage::move($contentsFile, $filename);;
        }
      

       return view('admin.index');
    }

}
