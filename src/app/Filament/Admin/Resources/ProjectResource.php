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

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->label('Judul Project'),

            Textarea::make('short_description')
                ->required()
                ->label('Deskripsi Singkat'),

            RichEditor::make('problem_analysis')
                ->required()
                ->label('Analisis Masalah'),

            RichEditor::make('solution')
                ->required()
                ->label('Solusi & Perancangan'),
            
            RichEditor::make('features')
                ->label('Fitur Utama'),

            RichEditor::make('implementation_result')
                ->label('Hasil Implementasi'),

            TextInput::make('tech_stack')
                ->required()
                ->label('Tech Stack'),

            FileUpload::make('diagram')
                ->image()
                ->directory('projects/diagram')
                ->label('Diagram / ERD'),

            FileUpload::make('pdf_report')
                ->directory('projects/pdf')
                ->acceptedFileTypes(['application/pdf'])
                ->label('Laporan PDF'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->searchable()->sortable(),
            TextColumn::make('tech_stack'),
            ImageColumn::make('diagram'),
            TextColumn::make('created_at')->dateTime(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
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