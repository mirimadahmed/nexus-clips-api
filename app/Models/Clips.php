<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clips extends Model
{
    use HasFactory;

    protected $table = 'clips';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        's3_path',
        's3_thumbnail',
        's3_watermark',
        'clip_status'
    ];
}
