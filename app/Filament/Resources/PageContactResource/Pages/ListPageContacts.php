<?php

namespace App\Filament\Resources\PageContactResource\Pages;

use App\Filament\Resources\PageContactResource;
use App\Models\PageContact;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageContacts extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageContactResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageContact::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
