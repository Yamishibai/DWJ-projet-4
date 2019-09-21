<?php

namespace Blog\Entities;

class Admin
{
    private $idAdmin;

    private $pseudoAdmin;

    private $loginAdmin;


    public function __construct(array $cols = [])
    {
        $this->hydrate($cols);
    }


    public function hydrate(array $cols = [])
    {
        foreach ($cols as $name => $value) {

            $methodName = 'set' . str_replace('_', '', ucwords($name, '_'));

            if (method_exists($this, $methodName)) {

                $this->$methodName($value);
            }
        }
    }


    public function getIdAdmin(): int
    {
        return $this->idAdmin;
    }

    public function getPseudoAdmin(): string
    {
        return $this->pseudoAdmin;
    }
    public function getLoginAdmin(): string
    {
        return $this->loginAdmin;
    }

    public function setIdAdmin(int $value): void
    {
        $this->idAdmin = $value;
    }

    public function setPseudoAdmin(string $value): void
    {
        $this->pseudoAdmin = $value;
    }

    public function setLoginAdmin(string $value): void
    {
        $this->loginAdmin = $value;
    }
}
