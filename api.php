
<?php
$url = "https://www.canalti.com.br/api/pokemons.json";
$pokemons = json_decode(file_get_contents($url));

echo "<h1> Pokemons </h1>";
echo "<ul>";

foreach ($pokemons -> {'pokemon'} as $Pokemon){
    echo "<li>".$Pokemon->{'name'}."</li>"; 
}
echo "</ul>"
?>

