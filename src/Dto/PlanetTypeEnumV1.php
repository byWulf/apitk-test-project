<?php
declare(strict_types=1);

namespace App\Dto;
use MyCLabs\Enum\Enum;

final class PlanetTypeEnumV1 extends Enum
{
    private const STONE = 'e_stone';
    private const GAS = 'e_gas';
    private const ICE = 'e_ice';
}
