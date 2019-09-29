<?php



class Billet extends AbstractEntity
{
    private $idBillet;

    private $titre;

    private $contenu;

    private $date_billet;

    

    public function getIdBillet(): int
    {
        return $this->idBillet;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function getDateBillet(): string
    {
        return $this->date_billet;
    }

    public function setIdBillet(int $value): void
    {
        $this->idBillet = $value;
    }
    public function setTitre(string $value): void
    {
        $this->titre = $value;
    }
    public function setContenu(string $value): void
    {
        $this->contenu = $value;
    }

    public function setDateBillet(string $value): void
    {
        $this->date_billet = date('d/m/Y', strtotime($value));
    }
}