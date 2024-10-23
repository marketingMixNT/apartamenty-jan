<?php

namespace App\Filament\Resources\PageTravelsResource\Pages;

use App\Filament\Resources\PageTravelsResource;
use App\Models\PageTravels;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageTravels extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageTravelsResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageTravels::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
