<?php

namespace App\Filament\Resources\Peminjams\Pages;

use App\Filament\Resources\Peminjams\PeminjamResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPeminjam extends ViewRecord
{
    protected static string $resource = PeminjamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
