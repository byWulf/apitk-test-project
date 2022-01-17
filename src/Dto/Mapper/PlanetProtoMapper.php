<?php
declare(strict_types=1);

namespace App\Dto\Mapper;

use App\Dto\PlanetV1;
use App\Entity\Planet;
use Myapi\Proto\V1\Planet\Type;
use Myapi\Proto\V1\PlanetCollection;
use Shopping\ApiTKDtoMapperBundle\DtoMapper\MapperCollectionInterface;
use Shopping\ApiTKDtoMapperBundle\DtoMapper\MapperInterface;

class PlanetProtoMapper implements MapperInterface, MapperCollectionInterface
{
    /**
     * @param Planet $data
     * @return \Myapi\Proto\V1\Planet
     */
    public function map($data): \Myapi\Proto\V1\Planet
    {
        $dto = new \Myapi\Proto\V1\Planet();
        $dto->setId($data->getId());
        $dto->setName($data->getName());
        $dto->setDiameter((int)$data->getDiameter());

        $mappedType = Type::GAS;
        if($data->getType() === 'ice') {
            $mappedType = Type::ICE;
        }
        if($data->getType() === 'stone') {
            $mappedType = Type::STONE;
        }
        $dto->setType($mappedType);

        return $dto;
    }

    /**
     * @param \Myapi\Proto\V1\Planet[] $items
     * @return PlanetCollection
     */
    public function mapCollection(array $items): PlanetCollection
    {
        return new PlanetCollection(['planets' => $items]);
    }
}
