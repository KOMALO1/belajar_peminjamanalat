<?php

namespace App\Filament\Resources\Peminjams;

use App\Filament\Resources\Peminjams\Pages\CreatePeminjam;
use App\Filament\Resources\Peminjams\Pages\EditPeminjam;
use App\Filament\Resources\Peminjams\Pages\ListPeminjams;
use App\Filament\Resources\Peminjams\Pages\ViewPeminjam;
use App\Filament\Resources\Peminjams\Schemas\PeminjamForm;
use App\Filament\Resources\Peminjams\Schemas\PeminjamInfolist;
use App\Filament\Resources\Peminjams\Tables\PeminjamsTable;
use App\Models\Peminjam;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Htmlable;

class PeminjamResource extends Resource
{
    protected static ?string $model = Peminjam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // protected static ?string $recordTitleAttribute = 'id';

    //mulai tambah sendiri

    public static function getRecordTitle(?Model $record): ?string
    {
        return $record->user->name;
    }

    // akhir tambah sendiri

    public static function form(Schema $schema): Schema
    {
        return PeminjamForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PeminjamInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PeminjamsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPeminjams::route('/'),
            'create' => CreatePeminjam::route('/create'),
            'view' => ViewPeminjam::route('/{record}'),
            'edit' => EditPeminjam::route('/{record}/edit'),
        ];
    }
}
