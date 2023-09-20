<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Agenda extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'description'];

    protected $guarded = [];

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }
}
