<?php
abstract class ModelBase
{
    protected $db;

    public function __construct()
    {
        $this->db = SPDO::singleton();
        if($this->db != false)
        {
           //$this->db->exec('SET CHARACTER SET UTF8');
        }
    }
}
?>