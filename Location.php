<?php
/**
 * Description of Location
 *
 * @author Nelson
 */

//require './ApiClient.php';

class Location {
    private $localTeamAddres;
    private $localTeamVenue;
    private $apiClient;
    
    function __construct($teamId) {
        $this->apiClient = new ApiClient();
        $this->localTeamAddres = $this->apiClient->getTeamById($teamId)->address;
        $this->localTeamVenue = $this->apiClient->getTeamById($teamId)->venue;
    }
}
