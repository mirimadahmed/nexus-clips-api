<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class share extends Model
{
    use HasFactory;

    protected $table = 'mobile_sharing';
    public $timestamps = false;
}
