<?php

namespace App\Filament\Resources\DayResource\Pages;

use App\Filament\Resources\DayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDay extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = DayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
