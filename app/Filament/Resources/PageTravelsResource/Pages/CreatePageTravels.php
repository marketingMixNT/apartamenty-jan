<?php

namespace App\Filament\Resources\PageTravelsResource\Pages;

use App\Filament\Resources\PageTravelsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageTravels extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageTravelsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
