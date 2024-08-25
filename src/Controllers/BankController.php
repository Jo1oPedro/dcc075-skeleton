<?php

namespace Security\Skeleton\Controllers;

class BankController extends Controller
{
    public function __invoke(string $queryString): void
    {
        parse_str($queryString, $queryStringArray);
        $statement = $this->connection->prepare("SELECT * FROM bankAccounts WHERE id = ?");
        $statement->execute([$queryStringArray["id"]]);
        $results = $statement->fetch(\PDO::FETCH_ASSOC);
        view("index.php", [
            "results" => $results
        ]);
    }
}