<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massmedia extends Model
{
    public function deleteImageFromFolder(){

        $imageName = $this->image->path;
        $file_path = public_path('/storage/images/massmedia/') . $imageName;
        if (file_exists("$file_path")) {
            @unlink("$file_path");
        }
    }

    public function delete()
    {
        $image = Image::find($this->image->id);
        $imageName = $this->image->path;

        $file_path = public_path('/storage/images/massmedia/') . $imageName;
        if (file_exists("$file_path")) {
            @unlink("$file_path");
            parent::delete();
            $image->delete();

        }
        parent::delete();

    }

    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }

    public function getImageUrlAttribute()
    {
        return config('settings.base_url') . config('settings.massmedia_base_path') . $this->image->path;
    }
}
