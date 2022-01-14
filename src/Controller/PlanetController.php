<?php

namespace App\Controller;
use OpenApi\Annotations as OA;
use App\Entity\Planet;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Shopping\ApiTKDeprecationBundle\Annotation\Deprecated;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Dto\Mapper\PlanetV1Mapper;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Dto\PlanetV1;

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
     * ...\Shopping\ApiTKDtoMapperBundle\Annotation\View(dtoMapper=PlanetV1Mapper::class)
     *
     * @param EntityManagerInterface $manager
     * @return array
     * @OA\Response(
     *  description="yada yada",
     *     response=200,
     *     @Model(type=Planet::class)
     * )
     */
    #[Get('/api/v1/planet.{_format}', name: 'planet_format_v1')]
    public function getPlanetsV1(EntityManagerInterface $manager): array
    {
        $repository = $manager->getRepository(Planet::class);

        $planets = $repository->findAll();

        return $planets;
    }

    /**
     * @\Shopping\ApiTKDtoMapperBundle\Annotation\View(dtoMapper=PlanetV1Mapper::class)
     *
     * @param EntityManagerInterface $manager
     * @return PlanetV1[]
     */
    #[Get('/api/v123/planet', name: 'planet_format_v1')]
    public function getPlanetsV123(EntityManagerInterface $manager): array
    {
        $repository = $manager->getRepository(Planet::class);

        $planets = $repository->findAll();

        return $planets;
    }
}
