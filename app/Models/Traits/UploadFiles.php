<?php
namespace App\Models\Traits;

use Storage;

trait UploadFiles{

    public static function uploadPhoto($model)
    {
        if(request()->hasFile('photo')){
            static::deletephoto($model);
            $model->photo = request()->file('photo')->store('test/'.$model->id);
        }
    }

    public static function deletePhoto($model)
    {
        if(!empty($model->photo) && Storage::exists($model->photo)){
            Storage::delete($model->photo);
        }
    }

}