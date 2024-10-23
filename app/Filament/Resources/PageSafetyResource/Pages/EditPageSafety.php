<?php

namespace App\Filament\Resources\PageSafetyResource\Pages;

use App\Filament\Resources\PageSafetyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageSafety extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageSafetyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
