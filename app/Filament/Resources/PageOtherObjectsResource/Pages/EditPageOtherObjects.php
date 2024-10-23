<?php

namespace App\Filament\Resources\PageOtherObjectsResource\Pages;

use App\Filament\Resources\PageOtherObjectsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageOtherObjects extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageOtherObjectsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
