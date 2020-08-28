<?php

function converteNome($nome) {
    $nome = ucwords(strtolower($nome));
    return ($nome);
}



function converteNomeParaEmail($nome) {
    global $emailsGerados;
    $ultimoNome = substr(strrchr($nome, ' '), 1);   $emailSufixo = '@empresax.com.br';
    $separator = '_';

    $email = strtolower($nome[0] . $separator . $ultimoNome . $emailSufixo);

    if (in_array($email, $emailsGerados)) {
        $primeiroNome = explode(' ', $nome)[0];
        $email = strtolower($primeiroNome . $separator . $ultimoNome . $emailSufixo);
    }
    array_push($emailsGerados, $email);
    return $email;
}

function converteFilial($filial) {
    $filial = ucfirst($filial);
    return ($filial);
}



$filiais = [
    'adamantina' => [
        "ANA RITA DE CASSIA SILVA OLIVEIRA", 
        "CARLINDO SANTOS ARAUJO",
        "VANGELI SANDRA FEITOZA RAMOS",
        "JOSE EDIMILSON PEREIRA",
        "GILMARA ARAUJO SANTANA",
        "IBERTO GALDINO NUNES",
        "HELENICE FELICIANO MANFRE",
    ],
    'borborema' => [
        "LUCAS CASTILHO LOPES",
        "SILVANA BROETTO BERTOLDO",
        "RONALDO liIAGO MACHADO GUIMARAES",
        "GISELIA MARIA DA CONCEICAO",
        "HUGO SILVESTRE DE ANDRADE",
        "RAFAEL DA SILVA MARQUES PEREIRA",
        "LUZIA DE MATTOS",
        "LEIDIANE GONCALVES DA SILVA",
        "ADRIANO CARDOSO LYRA",
        "CELINO FERREIRA DA SILVA"	,
        "LISA HELENA MINITTI ESTEVAM PAOLUCCI",
        "HELENA MARIA ALVES MANFRE",
        "JOSE GERALDO CAMARGO PEREIRA",
        "ADRIANO ROQUE DE OLIVEIRA",
        "PEDRO CEZAR MARTENDAL",
        "ELISANGELA BARBOSA TILLER",
        "LEILANE DOS SANTOS OLIVEIRA",
        "ALESSANDRA DANIELE MESQUITA",
        "SELMA APARECIDA DE OLIVEIRA",
        "IONICA DA SILVA VIEIRA",
        "GUSTAVO CARPES POSSAMAI",
    ],
    'cajamar' => [
        "OSVALDO FONSECA",
        "LUCIENI COSTA OLIVEIRA",
        "JOSE NATALINO DO ROSARIO PEREIRA",
        "NELSON DA CRUZ SANTOS",
        "JOSINA PEREIRA PELEGRINO",
        "FRANCISCO ANTONIO DE MORAIS DA SILVA",
        "CLARICE BUENO DA SILVA",
        "RACHEL GALOTE FIGUEIREDO",
        "JORDANA PEREIRA DE SOUZA",
        "VALERIA ROCHA MENDES LIMA",
        "NILTON GOMES DE SOUSA",
        "Elida Paedra Alves De Sousa",
        "ELIENE SILVA VIANA",
        "STEFANIA APARECIDA DE FARIA",
        "IRAILMA SILVA CEZAR",
    ],
];


$filialAdamantina = $filiais['adamantina'];
$filialBorborema = $filiais['borborema'];
$filialCajamar = $filiais['cajamar'];
$emailsGerados = [];

?>


    <link rel="stylesheet" href="recursos/css/estilo.css">
           
<table cellspacing="0">
<!--Adamantina -->
        <tr id ="trAdamantina">  
            <th></th>
            <th></th>
            <th><h3>Adamantina</h3></th>
        </tr>

            <tr id ="trAdamantina" >
                <th>Nome</th>  
                <th>E-mail</th>
                <th>Filial</th>
            </tr>

    <?php foreach($filialAdamantina as $filial): ?> 

            <tr>       
                <td><?php echo converteNome($filial);  ?></td>
                <td> <a  href="mailto:<?=  $email = converteNomeParaEmail($filial); ?>  "> <?php echo $email ?> </a></td>
                <td><?php echo 'Adamantina';  ?> </td>
            </tr>
    <?php endforeach; ?>
<!--Borborema -->
        <tr id ="trBorborema">    
            <th></th>
            <th></th>
            <th><h3>Borborema</h3></th>
        </tr>

            <tr id ="trBorborema">
                <th>Nome</th>  
                <th>E-mail</th>
                <th>Filial</th>
            </tr>

    <?php foreach($filialBorborema as $filial): ?> 

            <tr>       
                <td><?php echo converteNome($filial);  ?></td>
                <td><a  href="mailto:<?=  $email = converteNomeParaEmail($filial); ?>  "> <?php echo $email ?> </a></td>
                <td><?php echo 'Borborema';  ?> </td>
            </tr>
    <?php endforeach; ?>  
        
        <tr id ="trCajamar">    
            <th></th>
            <th></th>
            <th><h3>Cajamar</h3></th>
        </tr>

            <tr id ="trCajamar">
                <th>Nome</th>  
                <th>E-mail</th>
                <th>Filial</th>
            </tr>
<!--Cajamar -->
    <?php foreach($filialCajamar as $filial):  ?> 
        
        
            <tr>       
                <td><?php echo converteNome($filial);  ?></td>
                 <td><a  href="mailto:<?=  $email = converteNomeParaEmail($filial); ?>  "> <?php echo $email ?> </a></td>
                <td><?php echo 'Cajamar'; ?> </td>
    </tr>
    <?php endforeach; ?>   
                 
                    
</table>