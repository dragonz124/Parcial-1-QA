<?php declare(strict_types=1);

namespace App\Entities;

use App\Entities\Abstracts\PersonEntity;
use App\Interfaces\RoleInterface;

class StudentEntity extends PersonEntity implements RoleInterface
{
    private string $grade;

    public function __construct(string $firstName, string $lastName, int $age, string $phone, string $grade)
    {
        parent::__construct($firstName, $lastName, $age, $phone);
        $this->grade = $grade;
    }

    public function getRoleDescription(): string
    {
        return "Estudiante, Grado: {$this->grade}";
    }

    public function getGrade(): string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }
}