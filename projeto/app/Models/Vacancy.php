<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $casts = [
        'items' => 'array'
    ];
    protected $guarded = [];
    // Uma vaga percente a um Usuário
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
