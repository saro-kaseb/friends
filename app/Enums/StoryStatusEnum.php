<?php

namespace App\Enums;

use App\Enums\trait\InteractsWithEnums;

enum StoryStatusEnum: string
{
    use InteractsWithEnums;

    case publish = "منتشر شده";
    case endTime = "اتمام زمان";
    case delete  = "حذف شده";
}
