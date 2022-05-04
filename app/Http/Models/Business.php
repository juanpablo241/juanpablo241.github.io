<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'business';
    protected $hidden = ['created_at', 'updated_at'];
    
}
