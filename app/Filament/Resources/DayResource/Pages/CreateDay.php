<?php

namespace App\Filament\Resources\DayResource\Pages;

use App\Filament\Resources\DayResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDay extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = DayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
