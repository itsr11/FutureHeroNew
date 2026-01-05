<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssessmentResource\Pages;
use App\Models\Assessment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AssessmentResource extends Resource
{
    protected static ?string $model = Assessment::class;

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';
    protected static ?string $navigationGroup = 'Hero AI';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Assessment Config')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Select::make('type')
                            ->options([
                                'vak' => 'VAK (Learning Style)',
                                'swot' => 'SWOT Analysis',
                                'riasec' => 'RIASEC (Career)',
                                'general' => 'General Quiz',
                            ])
                            ->required(),

                        Forms\Components\Textarea::make('description')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Questions')
                    ->schema([
                        Forms\Components\Repeater::make('questions')
                            ->schema([
                                Forms\Components\TextInput::make('question_text')
                                    ->required()
                                    ->label('Question'),

                                Forms\Components\Repeater::make('options')
                                    ->schema([
                                        Forms\Components\TextInput::make('text')->required(),
                                        Forms\Components\TextInput::make('score_value')->numeric(),
                                        Forms\Components\TextInput::make('category_mapping')
                                            ->placeholder('e.g., Visual, Realistic')
                                            ->label('Category/Type'),
                                    ])
                                    ->columns(3)
                            ])
                            ->collapsible()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('type')
                    ->colors([
                        'primary' => 'vak',
                        'success' => 'swot',
                        'warning' => 'riasec',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssessments::route('/'),
            'create' => Pages\CreateAssessment::route('/create'),
            'edit' => Pages\EditAssessment::route('/{record}/edit'),
        ];
    }
}
