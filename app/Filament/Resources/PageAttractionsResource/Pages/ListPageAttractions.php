<?php

namespace App\Filament\Resources\PageAttractionsResource\Pages;

use App\Filament\Resources\PageAttractionsResource;
use App\Models\PageAttractions;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageAttractions extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = PageAttractionsResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageAttractions::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
