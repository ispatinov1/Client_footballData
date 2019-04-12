<?php

/**
 * Description of Team
 *
 * @author Nelson
 */
//require './ApiClient.php';
 
class Team {
    private $teamId;
    private $teamName;
    private $apiClient;
    
    function __construct($teamId) {
        $this->apiClient = new ApiClient();
        $this->teamId = $this->apiClient->getTeamById($teamId)->id;
        $this->teamName = $this->apiClient->getTeamById($teamId)->name;
    }

    function getTeamId() {
        return $this->teamId;
    }


}
