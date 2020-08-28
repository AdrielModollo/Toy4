<?php 
//A variável $emailsGerados está sendo passada por referência.
//Quando eu altero a variável $emailsGerados dentro do escopo da função converteNomeParaEmail
//Eu estou alterando a referência e não o valor da variável.
function converteNomeParaEmail(&$emailsGerados, $nome) {
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
