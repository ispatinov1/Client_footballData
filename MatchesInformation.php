<?php

/**
 * La clase MatchesInformation obtiene la información de los encuentros 
 *
 * @author Nelson
 */
require './ApiClient.php';
require './Team.php';
require './Match.php';

class MatchesInformation {
    
    private $team;
    private $matches;
    private $apiClient;
    
    function __construct($teamId) {
        $this->apiClient = new ApiClient();
        $this->team = new Team($teamId);
        $this->matches[] = new Match();
    }
    
    public function getTeamInformation(){
        return $this->team;
    }
    
    public function getMatchesInformation(){        
        $matchesByTeamId = $this->apiClient->getMatchesByTeamId($this->team->getTeamId());                
        $i=0;
        foreach ($matchesByTeamId->matches as $match) {            
            $this->matches[$i]->setMatchId($match->id);
            $this->matches[$i]->setMatchDate($match->utcDate);
            $this->matches[$i]->setMatchResult($match->status);            
            $this->matches[$i]->setMatchAdversaryTeam($match, $this->team->getTeamId());
            $this->matches[$i]->setMatchLocation($match);
            $i++;
        }
        return $this->matches;         
    }
}

