<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'seq',
        'type',
        'url',
        'slug',
        'webImage',
        'mobImage',
        'status',
        'startDate',
        'endDate',
        'title',
        'description'
    ];
}
