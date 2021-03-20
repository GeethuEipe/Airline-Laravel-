<?php
/********************
 * Author:Asha chandran
 * Date:13/3/2021
 * Module:admin 
 * function:file uploading and downloading
 **********************/

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;
use DB;

class FileController extends Controller
{
    


  public function createForm(){
    return view('file-upload');
  }

  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $fileModel = new File;
        $fileModel->fl_name= $req->fl_name;
        $fileModel->fl_number= $req->fl_number;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
    }
   
   function file_downlod()
   {
        $download=DB::table('files')->get();
        return view('file-view',['user'=>$download]);
   }
}
