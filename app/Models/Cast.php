<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    protected $table = 'casts';
    protected $fillable=[
                        'gender',
                        'name',
                        'bio',
                        'birthdate',
                        'list'
    ];
}
