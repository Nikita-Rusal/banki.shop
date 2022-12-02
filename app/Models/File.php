<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class File extends Model
{
    protected $fillable = [
      "name",
      "created_at"
    ];

    public function saveImages($fileName)
    {
        return DB::insert("INSERT INTO files (`name_file`, `created_at`) VALUES ('".$fileName."', NOW())");
    }
}
