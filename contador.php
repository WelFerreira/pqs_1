<!DOCTYPE html>
<html>
<head>
<title>palavras</title>
<body>

<?php
$total_loc=0;
#echo "teste";
#$linguagens = array("java", "js", "php", "py", "rb");
$linguagens = array("js","py","java","php","rb");
$repositorios_java = array("RxJava-2.x", "java-design-patterns-master", "spring-boot-master");
$repositorios_js = array("d3-master", "bootstrap-master", "Font-Awesome-master");
#$repositorios_js = array("freeCodeCamp-master", "bootstrap-master", "Font-Awesome-master");
$repositorios_php = array("Faker-master", "laravel-master", "symfony-master");
$repositorios_py = array("awesome-python-master", "system-design-primer-master", "youtube-dl-master");
#$repositorios_py = array("models-master", "system-design-primer-master");
$repositorios_rb = array("jekyll-master", "fastlane-master", "awesome-awesomeness-master");
foreach ($linguagens as $ling){
if ($ling=="java"){$repositorios=$repositorios_java;}
if ($ling=="js"){$repositorios=$repositorios_js;}
if ($ling=="php"){$repositorios=$repositorios_php;}
if ($ling=="py"){$repositorios=$repositorios_py;}
if ($ling=="rb"){$repositorios=$repositorios_rb;}
foreach ($repositorios as $repo){
#echo $ling." - ".$repo."<br>";
$total_condicionais = 0;
$total_acoplamento = 0;
$total_erros = 0;

#Analisador
							$files = new FilesystemIterator("../htdocs/".$ling."/".$repo."/", FilesystemIterator::UNIX_PATHS);#caminho onde estão os arquivos

							$filtered = new RegexIterator($files, "/\.(".$ling.")$/i");#extensão dos arquivos

							foreach($filtered as $file){

							}

							$files = new RecursiveDirectoryIterator("../htdocs/".$ling."/".$repo."/");#caminho onde estão os arquivos

							$files = new RecursiveIteratorIterator($files);

							$filtered = new RegexIterator($files, "/\.(".$ling.")$/i");#extensão dos arquivos
							
							$func = array(" if ", "else", "switch", "try", "catch", "error", "throws", "except");

#$dados = fopen("resultado_condicionais.csv", "a") or die ("unable to open file");
set_time_limit(600000);
#fwrite ($dados, "condicionais".","."total_arquivos"."\r\n");
$contador = 0;
$numero_ocorrencias = 0;
$total_arquivos = 0;

foreach ($func as $procura){
		$contador = 0;
		$numero_ocorrencias = 0;
		$total_arquivos = 0;
	foreach($filtered as $file){
		$line = $file->getRealPath();
		$total_arquivos++;
		$arquivo = $line;
		$extension = substr($line,strripos($line,".")+1);
		$nome_arquivo = substr($line,strripos($line,"\\")+1);

#$procura = " if ";
$arrayArquivo = file($arquivo);

$total_linhas = sizeof($arrayArquivo);
$total_loc = $total_loc + $total_linhas;
#echo "Total linhas: ".$total_loc."<br>";
for($i = 0; $i < sizeof($arrayArquivo); $i++){
$arrayArquivo[$i]="*".$arrayArquivo[$i];
while(($numero_ocorrencias = strpos(strtolower($arrayArquivo[$i]), $procura, $numero_ocorrencias+1)) != 0){$contador++;}
}
}
#"try", "catch", "error", "throws", "finally", "except", "warning", "parse", "strict"
#fwrite ($dados, $contador.",".$total_arquivos);
#echo "Total de ".$procura.": ".$contador."<br><br>";
if ($procura == " if " or $procura == "else" or $procura == "switch"){
$total_condicionais = $total_condicionais + $contador;}

if ($procura == "try" or $procura == "catch" or $procura == "error" or $procura == "throws" or $procura == "finally"  or $procura == "except"  or $procura == "warning" or $procura == "parse" or $procura == "strict"){
$total_erros = $total_erros + $contador;}

}

#fwrite ($dados, $contador.",".$total_arquivos);
#fclose ($dados);
#echo "Total de condicionais: ".$contador."<br><br>";
#echo "Total de arquivos: ".$total_arquivos."<br><br>";
echo "Linguagem: ".$ling."<br>";
echo "Repositório: ".$repo."<br>";
echo "Linhas de código: ".$total_loc."<br>";
echo "Total de condicionais: ".$total_condicionais."<br>";
echo "Total de tratamento de erro: ".$total_erros."<br>";
echo "Total de arquivos: ".$total_arquivos."<br>"."<br>";

#$dados = fopen("resultado_condicionais.csv", "a") or die ("unable to open file");
#fwrite ($dados, "condicionais".","."total_arquivos"."\r\n");
#fclose ($dados);
$total_loc=0;
}
}
?>

</body>
</html>
