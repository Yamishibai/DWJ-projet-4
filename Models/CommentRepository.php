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
        $request = $this->connection->prepare('INSERT INTO comments(id_billet, pseudo, commentaire, date_comment,signalement) VALUES(?, ?, ?,NOW(),?)');
        $affectedLines = $request->execute(array($idBillet, $pseudo, $commentaire, 0));

        return $affectedLines;
    }

    public function reportComment($idComment)
    {
        $request = $this->connection->prepare('UPDATE comments SET signalement= ?  WHERE id_comment= ?');
        $affectedLines = $request->execute(array(1, $idComment));

        return $affectedLines;
    }

    public function ignoreComment($idComment)
    {
        $request = $this->connection->prepare('UPDATE comments SET signalement= ?  WHERE id_comment= ?');
        $affectedLines = $request->execute(array(0, $idComment));

        return $affectedLines;
    }

    public function getCommentsBySigalement(): array
    {
        $request = $this->connection->request('SELECT  * FROM comments WHERE signalement = ? ORDER BY date_comment DESC', [1]);

        $comments = [];
        foreach ($request as $comment) {
            $commentId = $comment['id_comment'];

            $comments[$commentId] = new Comment($comment);
        }

        return $comments;
    }

    public function deleteComment($idComment)
    {
        $request = $this->connection->prepare("DELETE FROM comments WHERE id_comment =?");
        $affectedLines = $request->execute(array($idComment));

        return $affectedLines;
    }
}
