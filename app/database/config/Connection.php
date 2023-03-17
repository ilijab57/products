<?php 

namespace App\Database\Config;

class Connection extends \PDO
{  
    protected $dsn = "mysql:host=127.0.0.1;dbname=online_store";
    protected $username = "root";
    protected $password = "";

    public function __construct()
    {
        // $default_options = [
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //     PDO::ATTR_EMULATE_PREPARES => false,
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // ];
        // $options = array_replace($default_options, $options);
        parent::__construct($this->dsn, $this->username, $this->password);
    }

}



?>