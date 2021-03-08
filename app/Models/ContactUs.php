<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name',
    	'region',
    	'contact_number',
    	'email',
    	'purpose',
    	'comments',
        'reply',
        'is_active'
    ];
}
