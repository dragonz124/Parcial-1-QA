<?php declare(strict_types=1);

namespace App\Entities\Abstracts;

use App\Interfaces\PersonInterface;
use InvalidArgumentException;

abstract class PersonEntity implements PersonInterface
{
    protected string $firstName;
    protected string $lastName;
    protected int $age;
    protected string $phone;

    public function __construct(string $firstName, string $lastName, int $age, string $phone)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
        $this->setPhone($phone);
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        if ($age <= 0) {
            throw new InvalidArgumentException('La edad debe ser un número positivo.');
        }
        $this->age = $age;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        if (empty(trim($phone)) || !preg_match('/^[0-9\s\-()+]{7,20}$/', $phone)) {
            throw new InvalidArgumentException('El número de teléfono tiene un formato inválido.');
        }
        $this->phone = $phone;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        if (empty(trim($firstName))) {
            throw new InvalidArgumentException('El primer nombre no puede estar vacío.');
        }
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        if (empty(trim($lastName))) {
            throw new InvalidArgumentException('El apellido no puede estar vacío.');
        }
        $this->lastName = $lastName;
    }
}