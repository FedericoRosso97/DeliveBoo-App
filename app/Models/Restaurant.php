<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
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

    public function typologies(){
        return $this->belongsToMany(Typology::class);
    }

    public function plates(){
        return $this->hasMany(Plate::class);
    }
}