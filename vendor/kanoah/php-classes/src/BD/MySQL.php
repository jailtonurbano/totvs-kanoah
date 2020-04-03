<?php

namespace Kanoah\BD;

class MySQL
{
    const HOSTNAME = "127.0.0.1";
    const USERNAME = "root";
    const PASSWORD = "";
    const DBNAME   = "kanoah";
    private $conn;

    public function __construct()
    {
        $this->conn = new \PDO(
            "mysql:dbname=" . MySQL::DBNAME . ";host=" . MySQL::HOSTNAME,
            MySQL::USERNAME,
            MySQL::PASSWORD
        );
    }

    private function setParams($statement, $parameters = array())
    {
        foreach ($parameters as $key => $value)
        {

            $this->bindParam($statement, $key, $value);
        }
    }

    private function bindParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
    }

    public function select($rawQuery, $params = array()): array
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
