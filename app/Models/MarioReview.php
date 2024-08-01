<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarioReview extends Model
{
    protected $table = 'marioreview';
    use HasFactory;
    
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'rating' => 'required',
        'title' => 'required',
        'body' => 'required',
    );
}
