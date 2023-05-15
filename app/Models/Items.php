<?php

namespace App\Models;

use App\Models\Traits\UploadFiles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory,UploadFiles;

    protected $fillable = [
        'ItemName',
        'ItemPrice',
        'ItemDateBuy',
        'ItemSold',
        'ItemCost',
        'ItemDateSold',
        'photo'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            static::uploadPhoto($model);
            $model->save();
        });

        static::saving(function ($model) {
            static::uploadPhoto($model);
        });

        static::deleting(function ($model){
            static::deletePhoto($model);
        });

    }

}
