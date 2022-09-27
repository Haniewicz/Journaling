<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission-role extends Model
{
    use HasFactory;

    protected $table = 'permission-role';
    protected $fillable = [
        'permission_id',
        'role_id',
    ];
}
