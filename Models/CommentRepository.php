<?php

namespace Blog\Models;

use Blog\Entities\Comment;

class CommentRepository
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }


    public function getComments(): array
    {
        $request = $this->connection->request("SELECT  * FROM comments");
        $comments = [];
        foreach ($request as $comment) {
            $comments[] = new Comment($comment);
        }

        return $comments;
    }

    public function getCommentsbyIdBillet($idBillet)
    {

        $request = $this->connection->request('SELECT  * FROM comments WHERE id_billet=? ORDER BY date_comment DESC LIMIT 0, 5', [$idBillet]);

        $comments = [];
        while ($tmpComment = $request->fetch()) {

            $comments[] = new Comment($tmpComment);
        }

        return $comments;
    }


    public function addCommentsbyIdBillet($idBillet, $pseudo, $commentaire)
    {


        $request = $this->connection->prepare('INSERT INTO comments(id_billet, pseudo, commentaire, date_comment) VALUES(?, ?, ?,NOW())');
        $affectedLines = $request->execute(array($idBillet, $pseudo, $commentaire));

        return $affectedLines;
    }
}
