<?php

namespace App\Filament\Resources\KeyNoteResource\Pages;

use App\Filament\Resources\KeyNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeyNotes extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = KeyNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
