<?php declare(strict_types = 1);
namespace Webinity;

/**
 * Slouží ke komunikaci s DB
 */
class Actions
{
    
    protected $db;

    public function __construct(\Dibi\Connection $database)
    {
        $this->db = $database;
    }

    /**
     * Vloží hlas do DB, validaci řešíme při volání metody
     * 
     * @param int $project_id Id projektu pro ktery hlasujeme
     * @param string $email Email, kterym hlasujeme. Je UNIQUE, Exception resime pri volani metody
     * 
     * @return int
     */
    public function vote(int $project_id, string $email)
    {
        $s = $this->db->query('INSERT INTO votes', 
        [
            'project_id' => $project_id,
            'email' => $email
        ]);
        $id = $this->db->getInsertId();
        return $id;
    }

    /**
     * Vrátí celkový počet hlasů
     * 
     * @return int
     */
    public function votesCount()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM votes");

        $result = $query->fetchAll();
        return $result[0]->count;
    }

    /**
     * Vrátí celkový počet hlasů pro jednotlivé projekty
     */
    public function votesProjects()
    {
        $query = $this->db->query("SELECT COUNT(*) as count, projects.project_name 
        FROM votes JOIN projects ON votes.project_id = projects.id 
        GROUP BY projects.project_name ORDER BY count DESC");
        
        $result = $query->fetchPairs('project_name', 'count');

        return $result;
    }
}