<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('title')
                ->maxLength(255),

            Forms\Components\Textarea::make('tagline')
                ->label('Tagline')
                ->columnSpanFull(),

            Forms\Components\Textarea::make('bio')
                ->required()
                ->columnSpanFull(),

            Forms\Components\Textarea::make('mission')
                ->columnSpanFull(),

            Forms\Components\Textarea::make('vision')
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('photo')
                ->image()
                ->directory('profiles'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable(),

            Tables\Columns\TextColumn::make('title')
                ->searchable(),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}