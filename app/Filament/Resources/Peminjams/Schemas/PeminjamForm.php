<?php

namespace App\Filament\Resources\Peminjams\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PeminjamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('nama user')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }
}
