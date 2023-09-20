<?php

namespace App\Filament\Resources\StageResource\Pages;

use App\Filament\Resources\StageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = StageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
