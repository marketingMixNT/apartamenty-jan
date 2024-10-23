<?php

namespace App\Filament\Resources\PageOtherObjectsResource\Pages;

use App\Filament\Resources\PageOtherObjectsResource;
use App\Models\PageOtherObjects;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageOtherObjects extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageOtherObjectsResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageOtherObjects::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
