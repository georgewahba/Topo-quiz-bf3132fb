<?php
$vraag= array("japan" => "tokyo", 
	"mexico" => "mexico city", 
	"USA" => "washingthon",
	"india" => "mumbai",
	"korea" => "seoul",
	"china" => "Beijing",
	"nigiria" => "lagos",
	"argentina" => "Buenos Aires",
	"egypt" => "cairo",
	"uk" => "london");

$fouten = 0;

foreach ($vraag as $key => $value) {
print_r("wat is de hoofdstad van " . $key);
$antwoord=readline(":");


if ($antwoord == $value) {
	print_r("het antwoord is goed" . PHP_EOL);
}
else{
	print_r("fout, het juiste antwoord is " . $value . PHP_EOL);
 $fouten = $fouten + 1;
}}
print_r("je hebt " .$fouten. " fouten" );
