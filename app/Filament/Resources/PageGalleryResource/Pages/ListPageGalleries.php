<?php

namespace App\Filament\Resources\PageGalleryResource\Pages;

use App\Filament\Resources\PageGalleryResource;
use App\Models\PageGallery;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageGalleries extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = PageGalleryResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageGallery::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
