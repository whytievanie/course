<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'name',
        'crebo',
        'numbertofollowcourse',
    ];
    
    public $table = "Educations";
}
