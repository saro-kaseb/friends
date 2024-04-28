<?php

namespace App\Enums\trait;

trait InteractsWithEnums
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
