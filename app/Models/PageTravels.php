<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class PageTravels extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'header_heading',
        'banner',
        'heading',
        'text',
        'travel_image',
        'transfer_image',
        'content_image',
        'content_text',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'header_heading' => 'array',
        'heading' => 'array',
        'text' => 'array',
        'content_text' => 'array',
    ];

    public $translatable = [
        'meta_title',
        'meta_desc',
        'header_heading',
        'heading',
        'text',
        'content_text',
    ];
}