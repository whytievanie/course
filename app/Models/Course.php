<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'SBU',
        'user_id',
        'description',
    ];
    
    public $table = "courses";

    public function leaseRule() {
        return $this->belongsTo('\App\Models\course', 'user_id');
    }
}
