<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailPembelianResource\Pages;
use App\Filament\Resources\DetailPembelianResource\RelationManagers;
use App\Models\DetailPembelian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailPembelianResource extends Resource
{
    protected static ?string $model = DetailPembelian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $pembelianId = request()->get('pembelian_id');
        $pembelian = \App\Models\Pembelian::find($pembelianId);
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal_pembelian')
                    ->label('Tanggal Pembelian')
                    ->required()
                    ->default($pembelian->tanggal_pembelian)
                    ->disabled()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListDetailPembelians::route('/'),
            'create' => Pages\CreateDetailPembelian::route('/create'),
            'edit' => Pages\EditDetailPembelian::route('/{record}/edit'),
        ];
    }
}
