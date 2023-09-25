<?php

namespace App\Filament\Resources\TopicResource\Pages;

use App\Filament\Resources\TopicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopic extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TopicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
