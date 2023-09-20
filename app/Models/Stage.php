<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Stage extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name', 'description'];

    protected $guarded = [];

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
}
