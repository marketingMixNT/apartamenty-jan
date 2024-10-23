<?php

namespace App\Filament\Resources\PageAttractionsResource\Pages;

use App\Filament\Resources\PageAttractionsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageAttractions extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageAttractionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
