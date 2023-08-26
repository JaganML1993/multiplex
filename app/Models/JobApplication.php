<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'job_application';

    protected $fillable = ['opening_id', 'first_name', 'last_name', 'email', 'phone', 'resume'];
}
