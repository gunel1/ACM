<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function childs() {
        return $this->hasMany('App\Image','parent_id','id') ;
    }
    public function delete()
    {

            $file_path = public_path('/images/galery/image/') . $this->path;
            if (file_exists("$file_path")) {
                @unlink("$file_path");
            }
            parent::delete();



    }

    public function getImageUrlAttribute()
    {
        return config('settings.base_url') . config('settings.galery_base_path') . $this->path;
    }


}
