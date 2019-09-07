<?php

namespace Blog\Models;


use PDO;
use PDOStatement;

class Connection extends PDO
{

    public function __construct(string $dsn, string $user, string $pass, array $options = [])
    {
        parent::__construct($dsn, $user, $pass, $options);

        parent::setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, parent::FETCH_ASSOC);
        parent::setAttribute(parent::ATTR_ERRMODE, parent::ERRMODE_EXCEPTION);
        parent::setAttribute(parent::ATTR_EMULATE_PREPARES, false);
    }

    public function request(string $statement, array $params = []): PDOStatement
    {
        $request = $this->prepare($statement);
        $request->execute($params);

        return $request;
    }
}
