<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pertamax;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PertamaxResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\PertamaxResource\RelationManagers;

class PertamaxResource extends Resource
{
    protected static ?string $model = Pertamax::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('id')
                            ->label("ID (otomatis)")
                            ->disabled()
                            ->maxLength(50),
                        Select::make('shift')
                            ->label('Shift')
                            ->options([
                                'shift_1' => 'Shift 1',
                                'shift_2' => 'Shift 2',
                            ])
                            ->required(), // Menandai field ini sebagai wajib diisi
                        DatePicker::make('tanggal_masuk')
                            ->label('Tanggal Masuk')
                            ->required(), // Menandai field ini sebagai wajib diisi
                        TextInput::make('nilai_akhir')
                            ->label('Nilai Akhir')
                            ->required(), // Menandai field ini sebagai wajib diisi
                        TextInput::make('nilai_awal')
                            ->label('Nilai Awal')
                            ->required(), // Menandai field ini sebagai wajib diisi
                        // // Menandai field ini sebagai wajib diisi
                        TextInput::make('harga')
                            ->label('Harga')
                            ->required(), // Menandai field ini sebagai wajib diisi
                        // // Menandai field ini sebagai wajib diisi
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('shift')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_masuk')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_akhir')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_awal')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('hasil_penjualan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('formatted_total_harga')
                    ->label('Total Harga')
                    ->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make('export')
                ->label('Export to Excel')
                //->icon('heroicon-o-download')
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
            'index' => Pages\ListPertamaxes::route('/'),
            'create' => Pages\CreatePertamax::route('/create'),
            'edit' => Pages\EditPertamax::route('/{record}/edit'),
        ];
    }
}
