<?php

namespace App\Filament\Resources\SafetyResource\Pages;

use App\Filament\Resources\SafetyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSafety extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = SafetyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
