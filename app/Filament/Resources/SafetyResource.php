<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Safety;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SafetyResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SafetyResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SafetyResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Safety::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Bezpieczeństwo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                ->label('Ikona')
                ->directory('safety-icon')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'bezpieczenstwo-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()

                )

                ->maxSize(8192)
                ->columnSpanFull()
                ->required(),

                Forms\Components\Textarea::make('text')
                ->label('Opis')
                ->columnSpanFull()
                ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Piktogram'),

                Tables\Columns\TextColumn::make('text')
                    ->label('Tekst')
                    ->limit(40),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSafeties::route('/'),
            'create' => Pages\CreateSafety::route('/create'),
            'edit' => Pages\EditSafety::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Piktogramy');
    }
    public static function getPluralLabel(): string
    {
        return __('Piktogramy');
    }

    public static function getLabel(): string
    {
        return __('Piktogram');
    }
}
