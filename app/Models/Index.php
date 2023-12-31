<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    protected $table = 'enquiry';

    protected $fillable = ['name', 'phone', 'email', 'location', 'message','department','serial_id','type'];
}
