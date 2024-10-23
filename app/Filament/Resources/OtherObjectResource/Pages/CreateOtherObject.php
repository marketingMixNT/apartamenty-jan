<?php

namespace App\Filament\Resources\OtherObjectResource\Pages;

use App\Filament\Resources\OtherObjectResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOtherObject extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = OtherObjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
