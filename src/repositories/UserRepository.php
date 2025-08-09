<?php declare(strict_types=1);

namespace App\Repositories;

use App\Entities\Abstracts\PersonEntity;
use App\Entities\EmployeeEntity;
use App\Entities\StudentEntity;
use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    private array $storage = [];

    public function __construct()
    {
        $this->storage[1] = new EmployeeEntity('Juan', 'Perez', 34, '555-0101', 'Ingeniero de Software');
        $this->storage[2] = new StudentEntity('Ana', 'Gomez', 21, '555-0102', 'Ciencias de la Computación');
    }

    public function findById(int $id): ?PersonEntity
    {
        echo "Buscando persona con ID: {$id}...\n";
        return $this->storage[$id] ?? null;
    }

    public function save(PersonEntity $entity): bool
    {
        $id = count($this->storage) + 1;
        $this->storage[$id] = $entity;
        echo "Guardando persona '{$entity->getFullName()}' con ID {$id}.\n";
        return true;
    }
}