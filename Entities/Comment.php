<?php

namespace Blog\Entities;

class Comment
{
    private $idComment;

    private $idBillet;

    private $pseudo;

    private $commentaire;

    private $date_comment;

    private $signalement;

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


    public function getIdComment(): int
    {
        return $this->idComment;
    }
    public function getIdBillet(): int
    {
        return $this->idBillet;
    }
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    public function getCommentaire(): string
    {
        return $this->commentaire;
    }

    public function getDateComment(): string
    {
        return $this->date_comment;
    }

    public function getSignalement(): int
    {
        return $this->signalement;
    }

    public function setIdComment(int $value): void
    {
        $this->idComment = $value;
    }

    public function setIdBillet(int $value): void
    {
        $this->idBillet = $value;
    }

    public function setSignalement(int $value): void
    {
        $this->signalement = $value;
    }

    public function setPseudo(string $value): void
    {
        $this->pseudo = $value;
    }

    public function setCommentaire(string $value): void
    {
        $this->commentaire = $value;
    }

    public function setDateComment(string $value): void
    {
        $this->date_comment = date('d/m/Y', strtotime($value));
    }
}