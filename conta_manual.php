<!DOCTYPE html>
<html>
<head>
	<title>palavras</title>
<body>

<?php
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

							$files = new FilesystemIterator("../htdocs/".$ling."/".$repo."/", FilesystemIterator::UNIX_PATHS);#caminho onde estão os manuais

							$filtered = new RegexIterator($files, "/\.(txt|md)$/i");#extensão dos manuais

							foreach($filtered as $file){

							}

							$files = new RecursiveDirectoryIterator("../htdocs/".$ling."/".$repo."/");#caminho onde estão os manuais

							$files = new RecursiveIteratorIterator($files);

							$filtered = new RegexIterator($files, "/\.(txt|md)$/i");#extensão dos manuais

#$dados = fopen("resultado_manual.csv", "a") or die ("unable to open file");
set_time_limit(6000);
#fwrite ($dados, "total_linhas".","."total_arquivos"."\r\n");
$total_linhas = 0;
$total_manuais = 0;

foreach($filtered as $file){
	$total_manuais++;
	$line = $file->getRealPath();
	$arquivo = $line;
	$extension = substr($line,strripos($line,".")+1);
	$nome_arquivo = substr($line,strripos($line,"\\")+1);
	$arrayArquivo = file($arquivo);
	$total_linhas = $total_linhas+sizeof($arrayArquivo);
}
#fwrite ($dados, $total_linhas.",".$total_manuais."\r\n");

#fclose ($dados);

echo "Total de linhas de manuais: ".$total_linhas."<BR><BR>";
echo "Total de manuais: ".$total_manuais."<BR><BR>";
$media = $total_linhas/$total_manuais."<BR><BR>";
echo "Média de linhas por manual: ".$media."<BR><BR>";
}
}
?>

</body>
</html>
