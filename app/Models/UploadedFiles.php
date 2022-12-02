<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class UploadedFiles extends Model
{

    public function getUploadedImages()
    {
        return DB::table('files')->get();
    }

    public function getSorted($field){
        return DB::table('files')->orderBy($field, 'ASC')->get();
    }


}
