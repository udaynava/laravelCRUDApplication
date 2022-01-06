<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_company extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_comp_id';

    protected $fillable = [
        'user_id',
        'comp_id'
    ];
}
