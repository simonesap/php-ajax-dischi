<?php include __DIR__ . '/../utility/database.php'; ?>

<?php

//Ricreare la struttura api di riferimento creando un nuovo array
$risposta = [
    'success' => true,
    'response' => $database,
];

//Array vuoto filtrato
$dischiFiltrati = [];

if( !empty( $_GET_['genere'])) {
    foreach( $risposta as $elem) {
        foreach( $elem['response'] as $el ) {
            if( $el['genre'] == $_GET_['genere']) {
                $dischiFiltrati[] = $el;
            }
        }
        
    }
} else {
    $dischiFiltrati = $risposta;
}


header( 'Content-Type: application/json');

// echo json_encode( $risposta);

echo json_encode( $dischiFiltrati);


?>