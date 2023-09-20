<?php

namespace App\Filament\Resources\AgendaResource\Pages;

use App\Filament\Resources\AgendaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAgendas extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AgendaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
