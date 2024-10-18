<?php

namespace App\Filament\Resources\PageAboutBlockResource\Pages;

use App\Filament\Resources\PageAboutBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageAboutBlock extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageAboutBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
