<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Speaker extends Model
{
    use HasFactory, HasTranslations;

     public $translatable = ['name', 'bio', 'organization'];

    protected $guarded = [];
    protected $casts = [
      'social_media_links' => 'array'
    ];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

}
