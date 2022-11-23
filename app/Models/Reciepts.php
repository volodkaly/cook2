<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\product_reciept;
use App\Models\Products;



class Reciepts extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function product()
    {
        return $this->hasMany(Products::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
