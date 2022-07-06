<?php
$idade1 = 7;
$resultado = '';
if($idade < 12)
$resultado = 'Você não pode assistir a nenhum destes filmes';
elseif($idade > 12)
$resultado = 'Você pode assistir a 2 filmes';
elseif($idade > 16)
$resultado = 'Você pode assistir a 10 filmes';
else($idade > 18)
$resultado = 'Você pode assistir a todos os filmes'; 
echo $resultado
?

