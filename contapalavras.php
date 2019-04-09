<!DOCTYPE html>
<html>
<head>
	<title>palavras</title>
<body>
<?php

#Analisador

							$files = new FilesystemIterator("../", FilesystemIterator::UNIX_PATHS);

							$filtered = new RegexIterator($files, "/\.(abap|cpp|dart|groovy|java|js|lua|objectivec|pl|py|rb|scala|swift)$/i");

							foreach($filtered as $file){

							}

							$files = new RecursiveDirectoryIterator('../');

							$files = new RecursiveIteratorIterator($files);

							$filtered = new RegexIterator($files, "/\.(abap|cpp|dart|groovy|java|js|lua|objectivec|pl|py|rb|scala|swift)$/i");

$dados = fopen("dados1.txt", "a") or die ("unable to open file");
set_time_limit(6000);
fwrite ($dados, "comando".","."caminho".","."incidencia".","."nome_arquivo".","."tipo".","."total_linhas"."\r\n");

							foreach($filtered as $file){
								$line = $file->getRealPath();

#Palavras
$arquivo = $line;
$extension = substr($line,strripos($line,".")+1);
$nome_arquivo = substr($line,strripos($line,"\\")+1);

#if
$procura = " if ";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
$total_linhas = sizeof($arrayArquivo);
for($i = 0; $i < sizeof($arrayArquivo); $i++){
$arrayArquivo[$i]="*".$arrayArquivo[$i];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$i]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

#else
$procura = " else ";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

#switch
$procura = " switch ";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

#erros
$procura = "error";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "warning";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "parse";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "strict";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "try";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "catch";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "throws";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "except";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "finally";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "rescue";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

$procura = "pcall";
$arrayArquivo = file($arquivo);
$contador = 0;
$numero_ocorrencias = 0;
for($ipalavras = 0; $ipalavras < sizeof($arrayArquivo); $ipalavras++){
$arrayArquivo[$ipalavras]="*".$arrayArquivo[$ipalavras];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$ipalavras]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
fwrite ($dados, trim($procura).",".$arquivo.",".$contador.",".$nome_arquivo.",".$extension.",".$total_linhas."\r\n");

//break;
}

fclose ($dados);

?>
</body>
</html>
