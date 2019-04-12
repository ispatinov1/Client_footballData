<?php

/**
 * Description of Matches
 *
 * @author nelson
 */

require './Location.php';
//require './Team.php';
//require './ApiClient.php';

class Match {
    private $matchId;
    private $matchDate;
    private $matchResult;
    private $matchAdversaryTeam;
    private $matchLocation;
    private $apiClient;
 
    function __construct() {
        $this->apiClient = new ApiClient();        
        //$this->matchAdversaryTeam = new Team();
        //$this->matchLocation = new MatchLocation();
    }
    
    function setMatchId($matchId) {
        $this->matchId = $matchId;
    }

    function setMatchDate($matchDate) {
        $this->matchDate = $matchDate;
    }

    function setMatchResult($matchResult) {
        $this->matchResult = $matchResult;
    }       
    
    public function setMatchAdversaryTeam($match, $teamId) {
        if($match->homeTeam->id != $teamId && $match->awayTeam->id == $teamId){
            $this->matchAdversaryTeam = new Team($match->homeTeam->id);
        }
        else{
            $this->matchAdversaryTeam = new Team($match->awayTeam->id);
        }
    }
    
    public function setMatchLocation($match) {
        $this->matchLocation = new Location($match->homeTeam->id);
    }
}
