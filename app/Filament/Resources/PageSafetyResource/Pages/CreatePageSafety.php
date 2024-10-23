<?php

namespace App\Filament\Resources\PageSafetyResource\Pages;

use App\Filament\Resources\PageSafetyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageSafety extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = PageSafetyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
