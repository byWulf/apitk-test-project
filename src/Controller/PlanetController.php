<?php

namespace App\Controller;
use OpenApi\Annotations as OA;
use App\Entity\Planet;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Shopping\ApiTKDeprecationBundle\Annotation\Deprecated;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Dto\Mapper\PlanetV1Mapper;
use App\Dto\Mapper\PlanetProtoMapper;
use Shopping\ApiTKDtoMapperBundle\Annotation as DtoMapper;

class PlanetController extends AbstractController
{
    #[Get('/api/planet', name: 'planet')]
    #[Get('/api/planet.{_format}', name: 'planet_format')]
    #[View]
    #[Deprecated(since: '1.0.0', description: 'This is a test')]
    public function index(): array
    {
        return [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PlanetController.php',
        ];
    }


    /**
     * @return Planet[]
     */
    #[Get('/api/v123/planet_array_dto', name: 'planet_array_dto_v1')]
    #[DtoMapper\View(dtoMapper: PlanetV1Mapper::class)]
    public function getPlanetsDto(EntityManagerInterface $manager): array
    {
        $repository = $manager->getRepository(Planet::class);

        $planets = $repository->findAll();

        return $planets;
    }

    #[Get('/api/v123/planet_dto', name: 'planet_dto_v1')]
    #[DtoMapper\View(dtoMapper: PlanetV1Mapper::class)]
    public function getSinglePlanetDto(EntityManagerInterface $manager): Planet
    {
        $repository = $manager->getRepository(Planet::class);

        $planets = $repository->findAll();

        return reset($planets);
    }


    /**
     * @\Shopping\ApiTKDtoMapperBundle\Annotation\View(dtoMapper=PlanetProtoMapper::class)
     *
     * @param EntityManagerInterface $manager
     * @return Planet
     */
    #[Get('/api/v123/planet_proto', name: 'planet_proto_v1')]
    public function getSinglePlanetProto(EntityManagerInterface $manager): Planet
    {
        $repository = $manager->getRepository(Planet::class);

        $planets = $repository->findAll();

        return reset($planets);
    }

    /**
     * @\Shopping\ApiTKDtoMapperBundle\Annotation\View(dtoMapper=PlanetProtoMapper::class)
     *
     * @param EntityManagerInterface $manager
     * @return Planet[]
     */
    #[Get('/api/v123/planet_collection_proto', name: 'planet_collection_proto_v1')]
    public function getPlanetCollectionProto(EntityManagerInterface $manager): array
    {
        $repository = $manager->getRepository(Planet::class);

        $planets = $repository->findAll();

        return $planets;
    }
}
