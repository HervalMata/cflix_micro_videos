<?php

namespace App\Models;

use App\Models\Traits\uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use uuid;

    protected $dates = ['deleted_at'];
    protected $casts = ['id' => 'string', 'is_Active' => 'boolean'];
    protected $fillable = ['name', 'description', 'is_active'];
}
