<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Event extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['title', 'sub_title', 'slogan', 'description', 'cto_text'];

    protected $guarded = [];
}
