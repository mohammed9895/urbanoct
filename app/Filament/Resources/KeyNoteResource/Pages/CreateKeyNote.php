<?php

namespace App\Filament\Resources\KeyNoteResource\Pages;

use App\Filament\Resources\KeyNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKeyNote extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = KeyNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
