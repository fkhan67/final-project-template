<?php

class TeamController {
    
    public function searchTeams($searchQuery) {
        // Simulate fetching teams from a database based on search query
        // In a real scenario, you would query your database or another data source
        $teams = $this->getTeamsFromDatabase($searchQuery);
        echo json_encode($teams);
    }

    public function getPlayersByTeam($teamId) {
        // Simulate fetching players for a specific team from a database
        // In a real scenario, you would query your database or another data source
        $players = $this->getPlayersFromDatabase($teamId);
        echo json_encode($players);
    }

    // Method to fetch teams from a database (simulated)
    private function getTeamsFromDatabase($searchQuery) {
        // Simulated database query
        // For demonstration purposes, return dummy data
        $teams = array(
            array('id' => 1, 'name' => 'Team A', 'city' => 'City A', 'coach' => 'Coach A'),
            array('id' => 2, 'name' => 'Team B', 'city' => 'City B', 'coach' => 'Coach B'),
            // Add more teams as needed
        );

        // Filter teams based on search query
        if (!empty($searchQuery)) {
            $filteredTeams = array_filter($teams, function($team) use ($searchQuery) {
                return stripos($team['name'], $searchQuery) !== false;
            });
            return array_values($filteredTeams); // Re-index array after filtering
        }

        return $teams;
    }

    // Method to fetch players for a specific team from a database (simulated)
    private function getPlayersFromDatabase($teamId) {
        // Simulated database query
        // For demonstration purposes, return dummy data
        $players = array(
            array('id' => 1, 'name' => 'Player 1', 'position' => 'Guard'),
            array('id' => 2, 'name' => 'Player 2', 'position' => 'Forward'),
            // Add more players as needed
        );

        return $players;
    }
}

