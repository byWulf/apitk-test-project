<?php
declare(strict_types=1);

namespace App\Dto\Mapper;

use App\Dto\PlanetTypeEnumV1;
use App\Entity\Planet;
use App\Dto\PlanetV1;
use Shopping\ApiTKDtoMapperBundle\DtoMapper\MapperInterface;

class PlanetV1Mapper implements MapperInterface
{
    /**
     * @param Planet $data
     * @return PlanetV1
     */
    public function map($data): PlanetV1
    {
        $type = PlanetTypeEnumV1::GAS();
        if ($data->getType() === 'stone') {
            $type = PlanetTypeEnumV1::STONE();
        }
        if ($data->getType() === 'ice') {
            $type = PlanetTypeEnumV1::ICE();
        }

        return new PlanetV1(
            $data->getId(),
            $data->getName(),
            $type,
            $data->getDiameter()
        );
    }
}
