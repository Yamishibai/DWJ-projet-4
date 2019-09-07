<?php

namespace Blog\Models;

use Blog\Entities\Billet;

class BilletRepository
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }


    public function getBillets(): array
    {
        $request = $this->connection->request("SELECT  * FROM billet ORDER BY date_billet DESC");
        $billets = [];
        foreach ($request as $billet) {
            $billets[] = new Billet($billet);
        }

        return $billets;
    }

    public function getBillet($idBillet): Billet
    {

        $request = $this->connection->request('SELECT  * FROM billet WHERE id_billet=?', [$idBillet]);
        $tmpBillet = $request->fetch();

        if ($tmpBillet != null) {
            $billet = new Billet($tmpBillet);

            return $billet;
        } else {
            return null;
        }
    }
    public function addBillet($titre, $contenu)
    {


        $request = $this->connection->prepare('INSERT INTO billet(titre, contenu, date_billet) VALUES(?, ?,NOW())');
        $affectedLines = $request->execute(array($titre, $contenu));

        return $affectedLines;
    }
    public function updateBillet($titre, $contenu,$idBillet)
    {
        

        $request = $this->connection->prepare('UPDATE billet SET titre= ? , contenu= ?  WHERE id_billet= ?', [$idBillet]);
        $affectedLines = $request->execute(array($titre, $contenu, $idBillet));

        return $affectedLines;
    }

    public function deleteBillet($idBillet)
    {


        $request = $this->connection->prepare("DELETE FROM billet WHERE id_billet =?");
        $affectedLines = $request->execute(array($idBillet));
        

        return $affectedLines;
    }
}
