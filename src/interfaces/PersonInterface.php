<?php declare(strict_types=1);

namespace App\Interfaces;

interface PersonInterface
{
    public function getFullName(): string;

    public function getAge(): int;

    public function setAge(int $age): void;

    public function setPhone(string $phone): void;
}