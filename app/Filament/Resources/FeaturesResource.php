<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Features;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\FeaturesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FeaturesResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


class FeaturesResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Features::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Sekcje globalne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('icon')
                    ->label('Ikona')
                    ->directory('features-icon')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'feature-slide-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()

                    )

                    ->maxSize(8192)
                    ->columnSpanFull()
                    ->required(),
                Fieldset::make('Treść')
                    ->schema([

                        Forms\Components\TextInput::make('title')
                            ->label('Tytuł')
                            ->columnSpanFull()
                            ->required(),

                        Forms\Components\Textarea::make('description')
                            ->label('Opis')
                            ->columnSpanFull()
                            ->required(),
                    ]),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
        ->defaultSort('sort', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                ->label('#')
                ->sortable(),

            Tables\Columns\ImageColumn::make('icon')
                ->label('Logo'),

            Tables\Columns\TextColumn::make('title')
                ->label('Nazwa')
                ->description(function (Features $record) {
                    return Str::limit(strip_tags($record->description), 40);
                })
                ->searchable()
                ->sortable(),

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
            'index' => Pages\ListFeatures::route('/'),
            'create' => Pages\CreateFeatures::route('/create'),
            'edit' => Pages\EditFeatures::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Piktogramy');
    }
    public static function getPluralLabel(): string
    {
        return ('Piktogramy');
    }

    public static function getLabel(): string
    {
        return ('Piktogramy');
    }
}
