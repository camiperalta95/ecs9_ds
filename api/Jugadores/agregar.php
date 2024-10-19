<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';
require_once '../../modelo/Jugador.php';
require_once '../../modelo/Club.php';


//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

$resp->IsOk= 'true';
if ($req->Jugador->Edad >= 18){
   $resp->Mensaje= 'Jugador mayor de edad';
}
else {
    $resp->Mensaje= 'Jugador menor de edad';
}






echo json_encode ($resp);