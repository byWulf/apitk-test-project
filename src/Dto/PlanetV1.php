<?php
declare(strict_types=1);

namespace App\Dto;

final class PlanetV1
{
    public function __construct(
        private int $id,
        private string $name,
        private string $type,
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
     * @return string
     */
    public function getType(): string
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
