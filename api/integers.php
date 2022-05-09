<?php include __DIR__ . '/../utility/database.php'; ?>

<?php

//Ricreare la struttura api di riferimento creando un nuovo array
$risposta = [
    'success' => true,
    'response' => $database,
];


header( 'Content-Type: application/json');

echo json_encode( $risposta);


?>