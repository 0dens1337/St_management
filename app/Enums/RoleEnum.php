<?php
namespace App\Enums;

use Illuminate\Support\Collection;

enum RoleEnum: int
{
    case Admin = 0;
    case Teacher = 1;
    case Student = 2;

    public function name(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::Teacher => 'Teacher',
            self::Student => 'Student',
        };
    }

    public static function list(): Collection
    {
        return collect(self::cases())->mapWithKeys(function ($role) {
            return [$role->value => $role->name()];
        });
    }
}
