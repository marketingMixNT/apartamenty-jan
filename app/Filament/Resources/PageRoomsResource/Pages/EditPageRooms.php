<?php

namespace App\Filament\Resources\PageRoomsResource\Pages;

use App\Filament\Resources\PageRoomsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageRooms extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageRoomsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
