<?php

namespace App\Filament\Resources\PageSafetyResource\Pages;

use App\Filament\Resources\PageSafetyResource;
use App\Models\PageSafety;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageSafeties extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = PageSafetyResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageSafety::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
