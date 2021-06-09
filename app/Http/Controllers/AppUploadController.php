<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Respose;
use Illuminate\Support\Facades\File;
//use File;

class AppUploadController extends Controller
{
	//return app upload page
    function index()
    {
    	return view('app_upload');
    }

    function upload(Request $request)
    {
        if($request->hasFile('file'))
        {
            $app_code = '';
        //input name
        $apps = $request->file('file');
        
        
        foreach($apps as $app)
        {
            //random name
            $new_name=rand().'-'.time().'.'.$app->getClientOriginalExtension();

            $app_size=$app->getSize();
            //add apps folder
            $app->move(public_path('apps'), $new_name);

            $app_code.='<div class="col-md-3" style="margin-bottom:24px;"><img src="http://localhost/UploadTest/public/apps/'.$new_name.'"class="img-thumbnail" /></div>';

        }
            
        

        $output=array(
                'success'=>'App is uploaded successfully ( '.$app_size.' Bytes )' ,

                'app'=> $app_code

            );
        return response()->json($output);

        }else{
            return 'No file selected';
        }
    	

    }

    function show()
    {
        $path=public_path('apps');
        $files=\File::files($path);
        foreach($files as $file)
        {
            $app=pathinfo($file);
            $ListofApp[]=$app['basename'];
        }
        return view('/view_apps')->with('Apps',$ListofApp);
    }
    function show1()
    {
        $path=public_path('apps/h');
        $files=\File::files($path);
        foreach($files as $file)
        {
            $app=pathinfo($file);
            $ListofApp[]=$app['basename'];
        }
        return view('/view_appss')->with('Apps/h',$ListofApp);
    }
    function download($appName)
    {
        $filePath=public_path('apps/'.$appName);
        
        return response()->download($filePath);
        //echo $filePath;
    }
    public function destroy($appName)
    {
        //TODO : Implementasikan Proses Delete Mahasiswa By Id
        // return "proses destroy database";
        
        File::delete(public_path('apps/'.$appName));
        $path=public_path('apps');
        $files=\File::files($path);
        foreach($files as $file)
        {
            $app=pathinfo($file);
            $ListofApp[]=$app['basename'];
        }
      //  $filePath=public_path('apps/'.$appName)->delete();
        return view('/view_apps')->with('Apps',$ListofApp);

    }
}
