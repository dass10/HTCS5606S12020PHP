<?php




class DB
{

    private $server = "m7nj9dclezfq7ax1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "sp8kxui59yxqk3uy";
    private $pwd = "vfb198mevrvl8nl7";
    private $database = "b1m6lvq858bqg11k";
    public $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if($this->connection->connect_error){
            echo $this->connection->connect_error;
        }
    }


}