<?php

namespace App\Controller;
use App\Entity\Planet;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use OpenApi\Annotations as OA;
use Shopping\ApiTKManipulationBundle\Annotation as Manipulation;
use App\Form\Type\PlanetV1Type;
use Symfony\Component\HttpFoundation\Response;

/**
 * @OA\Tag(name="apitk-manipulation-bundle")
 */
class PlanetManipulationController extends AbstractController
{
    #[Rest\Post("/api/v1/planets")]
    #[Manipulation\Update("planet", type: PlanetV1Type::class)]
    public function postPlanetV1(Planet $planet): Response
    {
        return new Response('', 200);
    }


    #[Rest\Put("/api/v1/planets/{id}")]
    #[Manipulation\Update("planet", type: PlanetV1Type::class)]
    public function putPlanetV1(Planet $planet): Response
    {
        return new Response('', 200);
    }

    #[Rest\Patch("/api/v1/planets/{id}")]
    #[Manipulation\Update("planet", type: PlanetV1Type::class)]
    public function patchPlanetV1(Planet $planet): Response
    {
        return new Response('', 200);
    }

    #[Rest\Delete("/api/v1/planets/{id}")]
    #[Manipulation\Delete("id", entity: Planet::class)]
    public function deletePlanetV1(Response $response): Response
    {
        return $response;
    }
}
