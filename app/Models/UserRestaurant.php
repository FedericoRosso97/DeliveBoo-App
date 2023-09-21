<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRestaurant extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'user_id',
    //     'name',
    //     'address',
    //     'VAT_number',
    //     'email',
    //     'opening_time',
    //     'image',
    //     'telephone_number',
    //     'vote',
    // ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}