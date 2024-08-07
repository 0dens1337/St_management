<?php
namespace App\Enums;

use Illuminate\Support\Collection;

enum LevelEnum: int
{
    case JUNIOR = 0;
    case MIDDLE = 1;
    case HIGH = 2;

    public function name(): string
    {
        return match ($this) {
            self::JUNIOR => 'Junior',
            self::MIDDLE => 'Middle',
            self::HIGH => 'High',
        };
    }

    public static function list(): Collection
    {
        return collect(self::cases())->mapWithKeys(function ($level) {
            return [$level->value => $level->name()];
        });
    }
}
