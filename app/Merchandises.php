<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandises extends Model
{
    protected $fillable = [
         'name', 'description', 'quantity', 'price'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
