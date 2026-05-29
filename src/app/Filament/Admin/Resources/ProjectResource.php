<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Projects';

    public static function form(Form $form): Form
    {
        return $form->schema([

            TextInput::make('title')
                ->required()
                ->label('Judul Project'),

            TextInput::make('progress')
                ->numeric()
                ->minValue(0)
                ->maxValue(100)
                ->default(0)
                ->suffix('%')
                ->required()
                ->label('Progress Project'),

            Textarea::make('short_description')
                ->required()
                ->label('Deskripsi Singkat')
                ->columnSpanFull(),

            RichEditor::make('problem_analysis')
                ->required()
                ->label('Analisis Masalah')
                ->columnSpanFull(),

            RichEditor::make('solution')
                ->required()
                ->label('Solusi & Perancangan')
                ->columnSpanFull(),

            RichEditor::make('features')
                ->label('Fitur Utama')
                ->columnSpanFull(),

            RichEditor::make('implementation_result')
                ->label('Hasil Implementasi')
                ->columnSpanFull(),

            TextInput::make('tech_stack')
                ->required()
                ->label('Tech Stack')
                ->helperText('Pisahkan dengan koma. Contoh: Laravel, Filament, Livewire, MariaDB, Docker'),

            FileUpload::make('diagram')
                ->image()
                ->directory('projects/diagram')
                ->label('Diagram / ERD'),

            FileUpload::make('pdf_report')
                ->directory('projects/pdf')
                ->acceptedFileTypes([
                    'application/pdf',
                ])
                ->label('Laporan PDF'),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->label('Judul Project')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('progress')
                    ->label('Progress')
                    ->suffix('%')
                    ->badge()
                    ->color(fn ($state) => match (true) {
                        $state >= 100 => 'success',
                        $state >= 75 => 'info',
                        $state >= 50 => 'warning',
                        default => 'danger',
                    }),

                TextColumn::make('tech_stack')
                    ->limit(40),

                ImageColumn::make('diagram')
                    ->label('Diagram'),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}