<?php

namespace App\Filament\Resources\StageResource\Pages;

use App\Filament\Resources\StageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStage extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = StageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
