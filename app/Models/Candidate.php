<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $casts = [
        'skills' => 'array'
    ];
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
