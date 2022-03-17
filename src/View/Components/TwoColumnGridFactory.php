<?php

namespace Firith\Nore\View\Components;

use Filament\Forms;

class TwoColumnGridFactory
{
    public static function make()
    {
        return app(static::class);
    }

    public function schema(array $left, array $right): array
    {
        return [
            Forms\Components\Grid::make()
                ->columns(3)
                ->schema([
                        Forms\Components\Group::make()
                            ->schema($left)
                            ->columnSpan(['lg' => 2]),
                        Forms\Components\Group::make()
                            ->schema($right)
                            ->columnSpan(1),
                    ]
                ),
        ];
    }
}
