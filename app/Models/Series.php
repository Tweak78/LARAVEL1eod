<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class Series extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre', 'seasons', 'episodes', 'description'];

    public static function create(array $all)
    {
    }
}

