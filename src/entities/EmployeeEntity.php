<?php declare(strict_types=1);

namespace App\Entities;

use App\Entities\Abstracts\PersonEntity;
use App\Interfaces\RoleInterface;

class EmployeeEntity extends PersonEntity implements RoleInterface
{
    private string $position;

    public function __construct(string $firstName, string $lastName, int $age, string $phone, string $position)
    {
        parent::__construct($firstName, $lastName, $age, $phone);
        $this->position = $position;
    }

    public function getRoleDescription(): string
    {
        return "Empleado, Posición: {$this->position}";
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
}