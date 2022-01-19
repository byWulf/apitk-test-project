<?php

namespace App\Controller;
use App\Entity\Planet;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Dto\Mapper\PlanetV1Mapper;
use Shopping\ApiTKDtoMapperBundle\Annotation as DtoMapper;
use Shopping\ApiTKUrlBundle\Annotation as ApiTK;
use OpenApi\Attributes as OA;

#[OA\Tag('apitk-url-bundle')]
class PlanetFilterSortPaginateController extends AbstractController
{
    /**
     * @ApiTK\Sort("diameter")
     * @ApiTK\Sort("type")
     * @ApiTK\Pagination()
     *
     * @ApiTK\Filter(name="type", enum={"gas", "ice", "stone"})
     * @ApiTK\Filter("diameter", allowedComparisons={"gt","lt"})
     *
     * @ApiTK\Result("planets", entity="App\Entity\Planet")
     * @return Planet[]
     */
    #[Get('/api/v123/planet/search', name: 'planet_search')]
    #[DtoMapper\View(dtoMapper: PlanetV1Mapper::class)]
    public function getPlanetsDto(array $planets): array
    {
        return $planets;
    }

    /**
     * @return Planet[]
     */
    #[Get('/api/v123/planet/search_via_attribute', name: 'planet_search_attribute')]
    #[DtoMapper\View(dtoMapper: PlanetV1Mapper::class)]
    #[ApiTK\Sort('diameter')]
    #[ApiTK\Sort('type')]
    #[ApiTK\Pagination(maxEntries: 10)]
    #[ApiTK\Result('planets', entity: Planet::class)]
    #[ApiTK\Filter(name: "type", enum: ["gas", "ice", "stone"])]
    #[ApiTK\Filter("diameter", allowedComparisons: ["gt","lt"])]
    public function getPlanetsDtoViaAttributes(array $planets): array
    {
        return $planets;
    }
}
