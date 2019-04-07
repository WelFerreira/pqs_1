<!DOCTYPE html>
<html>
<head>
	<title>palavras</title>
<body>
<?php

#Listar

$directory = dir('c:/\xampp/\htdocs/\phpzip/\java');

# Extension Filter
### $allowed_ext = array(".sample", ".png", ".jpg", ".jpeg", ".txt", ".doc", ".xls"); 
$allowed_ext = array(".java");

$do_link = TRUE; 
$sort_what = 0;
$sort_how = 0;


# # #
function dir_list($dir){ 
    $i=0; 
    $dl = array(); 
    if ($hd = opendir($dir))    { 
        while ($sz = readdir($hd)) {  
            if (preg_match("/^\./",$sz)==0) $dl[] = $sz;$i.=1;  
        } 
    closedir($hd); 
    } 
    asort($dl); 
    return $dl; 
} 
if ($sort_how == 0) { 
    function compare0($x, $y) {  
        if ( $x[0] == $y[0] ) return 0;  
        else if ( $x[0] < $y[0] ) return -1;  
        else return 1;  
    }  
    function compare1($x, $y) {  
        if ( $x[1] == $y[1] ) return 0;  
        else if ( $x[1] < $y[1] ) return -1;  
        else return 1;  
    }  
    function compare2($x, $y) {  
        if ( $x[2] == $y[2] ) return 0;  
        else if ( $x[2] < $y[2] ) return -1;  
        else return 1;  
    }  
}else{ 
    function compare0($x, $y) {  
        if ( $x[0] == $y[0] ) return 0;  
        else if ( $x[0] < $y[0] ) return 1;  
        else return -1;  
    }  
    function compare1($x, $y) {  
        if ( $x[1] == $y[1] ) return 0;  
        else if ( $x[1] < $y[1] ) return 1;  
        else return -1;  
    }  
    function compare2($x, $y) {  
        if ( $x[2] == $y[2] ) return 0;  
        else if ( $x[2] < $y[2] ) return 1;  
        else return -1;  
    }  

} 

$i = 0; 
while($file=$directory->read()) { 
    $file = strtolower($file);
    $ext = strrchr($file, '.');
    if (isset($allowed_ext) && (!in_array($ext,$allowed_ext)))
        {
            // dump 
        }
    else { 
        //$temp_info = stat($file);
		$temp_info = 0;
        $new_array[$i][0] = $file; 
        $new_array[$i][1] = $temp_info[7]; 
        $new_array[$i][2] = $temp_info[9]; 
        $new_array[$i][3] = date("F d, Y", $new_array[$i][2]); 
        $i = $i + 1; 
        } 
} 
$directory->close(); 

switch ($sort_what) { 
    case 0: 
            usort($new_array, "compare0"); 
    break; 
    case 1: 
            usort($new_array, "compare1"); 
    break; 
    case 2: 
            usort($new_array, "compare2"); 
    break; 
} 

$i2 = count($new_array); 
$i = 0; 

for ($i=0;$i<$i2;$i++) { 
    if (!$do_link) { 
        $line = $new_array[$i][0]; 
 
    }else{ 
        $line = $new_array[$i][0]; 

    } 
    //echo $line."<br>"; 
//} 

#Palavras

$arquivo = "java/".$line;
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
