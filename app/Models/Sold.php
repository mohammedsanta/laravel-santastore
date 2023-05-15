<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    use HasFactory;

    protected $fillable = ['item_id','customer_id'];


    public function item()
    {
        return $this->belongsTo(Items::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

}
