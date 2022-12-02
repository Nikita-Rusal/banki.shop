<?php

namespace App\Http\Controllers;

use App\Models\UploadedFiles;
use Illuminate\Http\Request;

class UploadedContoller extends Controller
{
    public function actionUploaded(Request $request)
    {
        if($request->query('selected')) {
            switch ($request->query('selected')){
                case 'name':   $images = (new UploadedFiles())->getSorted('name_file'); break;
                case 'date-time':   $images = (new UploadedFiles())->getSorted('created_at'); break;
            }
        } else {
            $images = (new UploadedFiles())->getUploadedImages();
        }
        return view('pages.uploaded', [
            'images' => $images
        ]);
    }

}
