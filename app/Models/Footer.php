<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';

    protected $fillable = [
        'title_en',
        'title_es',
        'subtitle_en',
        'subtitle_es',
        'image_url',
        'phone',
        'email',
        'address',
    ];


    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        return $this->attributes['title_' . $locale] ?? $this->attributes['title_en'];
    }

    public function getSubtitleAttribute()
    {
        $locale = app()->getLocale();
        return $this->attributes['subtitle_' . $locale] ?? $this->attributes['subtitle_en'];
    }
}
