<?php
function getAddress($cep) {
    $url = "https://viacep.com.br/ws/$cep/json/";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result);
}
?>
