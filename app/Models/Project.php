<?php

namespace App\Models;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @method static create(array|Application|Request|string|null $request)
 */

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];
}
