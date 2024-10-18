<?php

namespace App\Filament\Resources\PageRoomsResource\Pages;

use App\Filament\Resources\PageRoomsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageRooms extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageRoomsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
