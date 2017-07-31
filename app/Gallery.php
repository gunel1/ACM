<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    public function deleteImageFromFolder(){

        if (isset($this->image_id)) {
            $imageName = $this->image->path;
            $file_path = public_path('/images/galery/image/') . $imageName;
            if (file_exists("$file_path")) {
                @unlink("$file_path");
            }
        }
            else {

                $image=new Image();
                $image->save();
                $this->image_id=$image->id;

            }

    }

    public function delete()
    {
        if (isset($this->image)) {
            $image=Image::find($this->image->id);
            $imageName = $this->image->path;
            $file_path = public_path('/images/galery/image/') . $imageName;
            if (file_exists("$file_path")) {
                @unlink("$file_path");
            }
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
        return config('settings.base_url') . config('settings.galery_base_path') . $this->image->path;
    }
}
