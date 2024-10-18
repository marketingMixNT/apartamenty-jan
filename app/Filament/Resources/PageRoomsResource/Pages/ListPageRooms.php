<?php

namespace App\Filament\Resources\PageRoomsResource\Pages;

use App\Filament\Resources\PageRoomsResource;
use App\Models\PageRooms;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageRooms extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageRoomsResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageRooms::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
