<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'name', 
        'company', 
        'email',
        'phone',
        'created_at',
        'updated_at'
    ];

    public $incrementing = true;
}
