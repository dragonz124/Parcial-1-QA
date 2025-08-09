<?php declare(strict_types=1);

namespace App\Interfaces;

use App\Entities\Abstracts\PersonEntity;

interface UserRepositoryInterface
{
    public function findById(int $id): ?PersonEntity;

    public function save(PersonEntity $entity): bool;
}