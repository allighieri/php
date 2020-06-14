<?php

$cep = "72878060";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

echo "<strong>CEP: </strong>".$data["cep"]."<br>";
echo "<strong>RUA: </strong>".$data["logradouro"]."<br>";
echo "<strong>BAIRRO: </strong>".$data["bairro"]."<br>";
echo "<strong>CIDADE: </strong>".$data["localidade"]." <strong>UF: </strong>".$data["uf"]."<br>";



?>