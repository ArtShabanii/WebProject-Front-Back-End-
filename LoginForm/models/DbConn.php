<?php
class DBConnection
{
    private $servername = 'DESKTOP-9TOO3UU\SQLEXPRESS';
    private $user = 'Arti';
    private $password = '1234';
    private $databaseName = 'eLibraryWEB';

    public function getConnection()
    {
        try {
            $connection = new PDO("sqlsrv:Server=$this->servername;Database=$this->databaseName", $this->user, $this->password);
            // $connection = new PDO('sqlsrv:Server=DESKTOP-9TOO3UU\SQLEXPRESS; Database=eLibraryWEB', 'Arti', '1234');
             $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return null;
        }
        return $connection;
    }
}
?>