<?php declare(strict_types = 1);
namespace Webinity;

class Actions
{
    
    protected $db;

    public function __construct(\Dibi\Connection $database)
    {
        $this->db = $database;
    }

    public function test()
    {
        return json_encode($this->db->query('SELECT * FROM test')->fetchAll());
    }
}