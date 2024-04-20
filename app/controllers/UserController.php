<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Team;
use app\models\Player;

class UserController extends Controller
{
    public function searchTeams($searchQuery)
    {
        // Instantiate Team model to fetch teams based on search query
        $teamModel = new Team();
        
        // Fetch teams based on the search query
        $teams = $teamModel->searchTeams($searchQuery);

        // Set response headers and send JSON response
        header("Content-Type: application/json");
        echo json_encode($teams);
        exit();
    }

    public function getPlayersByTeam($teamId)
    {
        // Instantiate Player model to fetch players for a specific team
        $playerModel = new Player();

        // Fetch players for the specified team
        $players = $playerModel->getPlayersByTeam($teamId);

        // Set response headers and send JSON response
        header("Content-Type: application/json");
        echo json_encode($players);
        exit();
    }
}
