<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slide;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SlideResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SlideResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SlideResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Shout::make('info')
                    ->content('Slajdy pojawią się na stronie głównej. Jeżeli masz stronę wielojęzyczną pamiętaj o zlokalizowaniu tekstu alternatywnego.')
                    ->type('info')
                    ->color('success')
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('image')
                    ->label('Zdjęcie')
                    ->directory('slides')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => 'hotel-jan-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->image()
                    ->maxSize(4096)
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required(),

                    Forms\Components\FileUpload::make('image_mobile')
                    ->label('Zdjęcie mobilne')
                    ->hint('Max. szerokość 800px')
                    ->directory('slides')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => 'hotel-jan-mobile' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->image()
                    ->maxSize(4096)
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('alt')
                    ->label('Tekst alternatywny')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255)
                    ->helperText('Opisz w jednym zdaniu co znajduje się na obrazku aby poprawić SEO'),

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
                ->label('Miniaturka'),
                
            Tables\Columns\TextColumn::make('alt')
                ->label('Tekst alternatywny')
                ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                ->label('Data utworzenia')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                ->label('Data modyfikacji')
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Slajdy');
    }
    public static function getPluralLabel(): string
    {
        return __('Slajdy');
    }

    public static function getLabel(): string
    {
        return __('Slajd');
    }
}
