<?php

namespace App\Enums;

use App\Enums\trait\InteractsWithEnums;

enum PostStatusEnum: string
{
    use InteractsWithEnums;

    case waiting = "در انتظار تایید";
    case publish = "منتشر شده";
    case reject = "رد شده";
    case delete  = "حذف شده";
    case block  = "بلاک شده";
}
