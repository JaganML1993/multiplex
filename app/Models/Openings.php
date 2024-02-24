<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Openings extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'openings';

    public function locations(){
        return $this->hasOne(Location::class, 'id', 'location');
    }

}
