<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqModel extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faqs';
    
    protected $fillable = [
    	'category',
    	'title',
    	'content',
    	'status',
    	'created_at',
    	'updated_at',
    ];
}
