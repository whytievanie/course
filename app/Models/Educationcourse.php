<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Educationcourse extends Model
{
    protected $fillable = [
        'course_id',
        'education_id',
    ];
    
    public $table = "educationcourses";
}
