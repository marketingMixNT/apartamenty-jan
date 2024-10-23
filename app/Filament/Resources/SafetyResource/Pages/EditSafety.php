<?php

namespace App\Filament\Resources\SafetyResource\Pages;

use App\Filament\Resources\SafetyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSafety extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = SafetyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
