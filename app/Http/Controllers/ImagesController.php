<?php

namespace App\Http\Controllers;

use App\Http\Requests\Images;
use App\Models\File;
use Illuminate\Support\Str;

class ImagesController extends Controller
{
    public function uploadImage(Images $request)
    {
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $fileName = str_shuffle(uniqid() . Str::slug((preg_replace('/\.\w+$/', '', $file->getClientOriginalName()))));
                $uploadFile = $file->move('uploaded_images/', $fileName . '.' . $file->extension());
                (new File())->saveImages($uploadFile->getFilename());
            }
            return redirect()->route('actionHome')->with('success', 'Изображения успешно загружены');
        }

    }
}
