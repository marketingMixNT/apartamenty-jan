<?php

namespace App\Filament\Resources\FeaturesResource\Pages;

use App\Filament\Resources\FeaturesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeatures extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = FeaturesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
