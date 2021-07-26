<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ApartmentStatus extends Enum
{
    const One =   1;
    const Two =   2;
    const Three = 3;
}
