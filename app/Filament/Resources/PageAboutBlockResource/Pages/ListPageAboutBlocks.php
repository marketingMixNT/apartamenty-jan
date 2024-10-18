<?php

namespace App\Filament\Resources\PageAboutBlockResource\Pages;

use App\Filament\Resources\PageAboutBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageAboutBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = PageAboutBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
           
            Actions\LocaleSwitcher::make(),
        ];
    }
}
