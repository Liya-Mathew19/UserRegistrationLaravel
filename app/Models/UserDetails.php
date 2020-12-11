<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $collection="user_details";
    protected $fillable = [
        'fk_user_id',
        'email',
        'dob',
        'city',
        'status',
    ];
}
