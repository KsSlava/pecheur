<?php

$url = "https://www.pecheur.com/vente-peche-carpe-moulinets-5,0,0,0.html";

$r = file_get_contents($url, false, stream_context_create(["ssl"=>["verify_peer"=>false,"verify_peer_name"=>false]]));


print_r($r);




?>