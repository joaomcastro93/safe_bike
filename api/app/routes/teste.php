<?php
 $app=instance();
$app->get('/DB/:descricao',function($args){
    $db=new \App\Controllers\Teste();
    $db->tt($args);
}); 

$app->post('/InsertPoint/:nome/:latitude/:longitude',function($nome,$latitude,$longitude){
    $db=new \App\Controllers\CInsertPoint();
    $db->InsertPoint($nome,$latitude,$longitude);
});
$app->get('/Marker',function(){
    $db=new \App\Controllers\CInsertPoint();
    $db->GetMarker();
});