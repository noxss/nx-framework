<?php
class SPDO extends PDO
{
    private static $instance = null;

    public function __construct()
    {
        $config = Config::singleton();
        if($config->get('dbname') != '' or $config->get('dbuser') != '')
        {
            //PDO connection

            //example odbc SQL Server
			//parent::__construct('odbc:Driver={sql server};Server=' . $config->get('dbhost') . ';Database=' . $config->get('dbname') . ';Uid=' . $config->get('dbuser') . ';Pwd=' . $config->get('dbpass') .';');

            //mysql
            parent::__construct('mysql:host=' . $config->get('dbhost') . ';dbname=' . $config->get('dbname'), $config->get('dbuser'), $config->get('dbpass'));
        }
    }

    public static function singleton()
    {
        if( self::$instance == null )
        {
            $config = Config::singleton();
            if($config->get('dbname') != '' or $config->get('dbuser') != '')
            {
	           self::$instance = new self();
            } else {
	           return false;
            }
        }
        return self::$instance;
    }
}
?>