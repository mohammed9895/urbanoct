<?php

namespace App\Filament\Resources\AgendaResource\Pages;

use App\Filament\Resources\AgendaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAgenda extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AgendaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
