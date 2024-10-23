<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\OtherObject;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OtherObjectResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\OtherObjectResource\RelationManagers;


class OtherObjectResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = OtherObject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pozostałe obiekty';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('title')
                    ->label('Nazwa obiektu')
                    ->required(),

                RichEditor::make('description')
                    ->label('Opis')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                    ])
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Miniaturka')
                    ->directory('other-objects-thumbnails')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'pozostale-obiekty-miniaturka' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->image()
                    ->maxSize(8192)
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required()
                    ->columnSpanFull(),



                Forms\Components\TextInput::make('address')
                    ->label('Ulica')
                    ->placeholder("Testowa 123, 34-400 Nowy Targ")
                    ->required(),
               

                Forms\Components\TextInput::make('phone')
                    ->label('Telefon')
                    ->prefix("+48")
                    ->placeholder("123456789")
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),
              


                Forms\Components\TextInput::make('mail')
                    ->label('Email')
                    ->placeholder("test@gmail.com")
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),

                Forms\Components\TextInput::make('link')
                    ->label('Link ')
                    ->required()
                    ->url()
                    ->columns(1),
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

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Nazwa')
                    ->description(function (OtherObject $record) {
                        return Str::limit(strip_tags($record->desc), 40);
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
            'index' => Pages\ListOtherObjects::route('/'),
            'create' => Pages\CreateOtherObject::route('/create'),
            'edit' => Pages\EditOtherObject::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Obiekty');
    }
    public static function getPluralLabel(): string
    {
        return ('Obiekty');
    }

    public static function getLabel(): string
    {
        return ('Obiekt');
    }
}
