<?php

namespace App\Filament\Resources\OtherObjectResource\Pages;

use App\Filament\Resources\OtherObjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOtherObjects extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = OtherObjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
