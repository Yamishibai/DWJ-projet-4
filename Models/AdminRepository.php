<?php

namespace Blog\Models;

use Blog\Entities\Admin;

class AdminRepository
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function checkAdmin($pseudoAdmin, $loginAdmin)
    {
        $request = $this->connection->prepare("SELECT * FROM user WHERE pseudo_admin=? AND login_admin=? ");
        $request->execute(array($pseudoAdmin, $loginAdmin));
        $data = $request->fetch();
        if ($data != null)
            return new Admin($data);
        else
            return null;
    }
}