<?php

namespace app\models;

use app\core\Model;

class User
{
    use Model;

    protected $table = 'users'; // Adjust the table name as needed

    // Assuming this method retrieves all NBA teams
    public function getAllTeams()
    {
        return $this->findAll(); // You might need to adjust this depending on your database structure
    }

    // Assuming this method retrieves players for a specific NBA team
    public function getPlayersByTeam($teamId)
    {
        // You need to implement this method based on your database structure
        // Example query: "SELECT * FROM players WHERE team_id = :team_id"
        $query = "SELECT * FROM players WHERE team_id = :team_id";
        $params = [':team_id' => $teamId];
        return $this->query($query, $params);
    }
}
