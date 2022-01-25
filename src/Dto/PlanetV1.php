<?php
declare(strict_types=1);

namespace App\Dto;
use Symfony\Component\Validator\Constraints as Assert;

final class PlanetV1
{
    public function __construct(
        private int $id,
        /**
         * @Assert\NotBlank
         */
        private string $name,
        private PlanetTypeEnumV1 $type,
        private ?int $diameter,
    ) {}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return PlanetTypeEnumV1
     */
    public function getType(): PlanetTypeEnumV1
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getDiameter(): ?int
    {
        return $this->diameter;
    }


}
