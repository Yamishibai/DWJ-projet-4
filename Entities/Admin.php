<?php


class Admin extends AbstractEntity
{
    private $idAdmin;

    private $pseudoAdmin;

    private $loginAdmin;


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
