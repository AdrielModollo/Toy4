<?php

function abrirPrograma() {
    $onclick = false;
    if($onclick == false){
    $onclick = true;
    exec('"C:\Program Files\Microsoft Office\root\Office16\OUTLOOK.EXE"|at now'); 
    } 
}

?>

<button onClick="<?php abrirPrograma() ?>">Clique Aqui</a>