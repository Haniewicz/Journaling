<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    protected $table = 'entries';
    protected $fillable = [
        'content', 'category_id', 'user_id'
    ];

    public function GetCategory()
    {
        return $this->hasOne('App\Models\Category', 'id');
    }
}
