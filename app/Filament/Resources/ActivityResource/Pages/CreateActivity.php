<?php

namespace App\Filament\Resources\ActivityResource\Pages;

use App\Filament\Resources\ActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateActivity extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = ActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
