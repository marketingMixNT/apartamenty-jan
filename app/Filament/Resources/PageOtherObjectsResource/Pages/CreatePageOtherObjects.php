<?php

namespace App\Filament\Resources\PageOtherObjectsResource\Pages;

use App\Filament\Resources\PageOtherObjectsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageOtherObjects extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageOtherObjectsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
