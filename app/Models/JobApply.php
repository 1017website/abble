<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApply extends Model {

    use HasFactory,
        SoftDeletes;

    protected $table = 'job_apply';
    protected $fillable = [
        'job_id', 'first_name', 'last_name', 'email', 'phone', 'is_replay', 'cv',
        'phone_code'
    ];

    public function job() {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
    
    public function userCreated() {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function userUpdated() {
        return $this->hasOne(User::class, 'id', 'updated_by');
    }

}
