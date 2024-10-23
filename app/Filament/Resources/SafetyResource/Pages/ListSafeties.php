<?php

namespace App\Filament\Resources\SafetyResource\Pages;

use App\Filament\Resources\SafetyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSafeties extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = SafetyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
