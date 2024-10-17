<?php

namespace App\Filament\Resources\FeaturesResource\Pages;

use App\Filament\Resources\FeaturesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeatures extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = FeaturesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
