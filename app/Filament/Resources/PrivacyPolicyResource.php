<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PrivacyPolicy;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PrivacyPolicyResource\Pages;

use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\PrivacyPolicyResource\RelationManagers;


class PrivacyPolicyResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = PrivacyPolicy::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Strony Informacyjne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('banner')
                ->label('Banner')
                ->directory('banner')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'banner-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                )
                ->maxSize(8192)
                ->columnSpanFull()
                ->required(),
                Forms\Components\RichEditor::make('content')
                ->label('Treść')
                ->toolbarButtons([
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('created_at')
                ->label('')
                ->formatStateUsing(fn (string $state): string => __("Treść"))
               
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
               
            ])
            ->paginated(false);
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
            'index' => Pages\ListPrivacyPolicies::route('/'),
            // 'create' => Pages\CreatePrivacyPolicy::route('/create'),
            'edit' => Pages\EditPrivacyPolicy::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Polityka Prywatności');
    }
    public static function getPluralLabel(): string
    {
        return __('Polityka Prywatności');
    }

    public static function getLabel(): string
    {
        return __('Polityka Prywatności');
    }
}