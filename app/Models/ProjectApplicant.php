<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectApplicant extends Model
{
    //
    use HasFactory, softDeletes;

    protected $fillable = [
        'project_id',
        'freelancer_id',
        'message',
        'status',
    ];

    public function freelancer(){
        return $this->belongsTo(User::class, 'freelancer_id');
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
