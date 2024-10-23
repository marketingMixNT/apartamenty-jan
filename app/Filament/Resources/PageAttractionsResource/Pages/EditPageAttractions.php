<?php

namespace App\Filament\Resources\PageAttractionsResource\Pages;

use App\Filament\Resources\PageAttractionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageAttractions extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageAttractionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
