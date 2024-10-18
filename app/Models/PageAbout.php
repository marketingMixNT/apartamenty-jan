<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

use Spatie\Translatable\HasTranslations;


class PageAbout extends Model
{
    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'header_heading',
        'heading',
        'banner'
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
    ];

    public function pageAboutBlocks(): HasMany
    {
        return $this->hasMany(PageAboutBlock::class);
    }


    public static function getForm(): array
    {
        return [
            FileUpload::make('image')
                ->label('Obraz')
                ->directory('pageAbout')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'pageAbout-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                )
                ->maxSize(8192)
                ->columnSpanFull()
                ->required(),

            RichEditor::make('text')
                ->label('Tekst')
                ->disableToolbarButtons([
                    'blockquote',
                    'strike',
                    'codeBlock',
                    'h2',
                    'h3',
                    
                ])
                ->required()
                ->columnSpanFull(),
        ];
    }

    public $translatable = [
        'meta_title',
        'meta_desc',
        'header_heading',
        'heading',
    ];
}