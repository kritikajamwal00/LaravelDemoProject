<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Facades\Purifier;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content'];

    public function setContentAttribute($value)
{
    $this->attributes['content'] = Purifier::clean($value);
}
}


