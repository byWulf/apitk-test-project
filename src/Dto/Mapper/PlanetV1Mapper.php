<?php
declare(strict_types=1);

namespace App\Dto\Mapper;

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
        return new PlanetV1(
            $data->getId(),
            $data->getName(),
            $data->getType(),
            $data->getDiameter()
        );
    }
}
