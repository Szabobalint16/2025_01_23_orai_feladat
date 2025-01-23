<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seedling extends Model
{
    /** @use HasFactory<\Database\Factories\SeedlingFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "name",
        "type",
        "old",
        "cotyledonNumber",
        "growing",
        "height",
        "wateringRequirement"
    ];

}
