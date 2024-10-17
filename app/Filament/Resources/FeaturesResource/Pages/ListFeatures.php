<?php

namespace App\Filament\Resources\FeaturesResource\Pages;

use App\Filament\Resources\FeaturesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatures extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = FeaturesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
