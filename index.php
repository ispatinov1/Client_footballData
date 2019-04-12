<?php

require './MatchesInformation.php';
 
$matchesInformation = new MatchesInformation('86');
$matchesInformation->getTeamInformation();
$matchesInformation->getMatchesInformation();

