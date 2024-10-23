<?php

namespace App\Filament\Resources\OtherObjectResource\Pages;

use App\Filament\Resources\OtherObjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherObject extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = OtherObjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
