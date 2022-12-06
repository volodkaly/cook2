<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reciept()
    {
        return $this->belongsTo(Reciepts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
