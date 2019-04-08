<!DOCTYPE html>
<html>
<head>
	<title>palavras</title>
<body>
<?php

#Analisador

							$files = new FilesystemIterator("../", FilesystemIterator::UNIX_PATHS);

							$filtered = new RegexIterator($files, "/\.(java|py|cpp|js|php|pl|rb|groovy|swift|dart|lua|abap|scala)$/i");

							foreach($filtered as $file){

								//echo $file . "<br/>";

							}

							//echo "END FIlesystemIterator .......<br/>";

							//echo "START RecursiveDirectoryIterator ........<br/>";

							$files = new RecursiveDirectoryIterator('../');

							$files = new RecursiveIteratorIterator($files);

							$filtered = new RegexIterator($files, "/\.(java|py|cpp|js|php|pl|rb|groovy|swift|dart|lua|abap|scala)$/i");

							foreach($filtered as $file){
								$line = $file->getRealPath();
								//echo $line."<br/>";

						//}

#Palavras

$arquivo = $line;
$procura = " if ";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
$total_linhas = sizeof($arrayArquivo);
for($i = 0; $i < sizeof($arrayArquivo); $i++){
$arrayArquivo[$i]="*".$arrayArquivo[$i];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$i]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
echo "Total de if no arquivo ".$arquivo." = ".$contador."<br>";

$procura = " else ";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
echo "Total de else no arquivo ".$arquivo." = ".$contador."<br>";

echo "Total de linhas do arquivo ".$arquivo." = ".$total_linhas."<br>";
echo "----//----"."<br>";
}
?>
</body>
</html>
