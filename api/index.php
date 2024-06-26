<?php

// recupero file
$source_url = __DIR__ . '/../data.json';

// lo leggo
$json_data = file_get_contents($source_url);



// scrivo in json
header('content-type: application/json');

// converto
echo $json_data;
