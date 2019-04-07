
<!DOCTYPE html>
<html>
<!-- Para alterar os icones entrar no site: https://feathericons.com/ -->
<head>
	<title> repositorios</title>
	
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Estilos customizados para esse template -->



<body>


 		    <div id="secao_prin">
              

						<?php

						set_time_limit(120); //aumentando o tempo da execução do PHP para não dar time limit
							//$vetor = array('Java', 'Python', 'C++', 'C#', 'JavaScript', 'php', 'Objective-C', 'Perl', 'Ruby', 'Groovy', 'Swift');
							$vetor = array('Java', 'Python', 'C++', 'C#', 'JavaScript', 'php', 'Objective-C', 'Perl', 'Ruby', 'Groovy', 'Swift', 'Dart', 'Lua', 'ABAP', 'Scala');
							$qtd_repositorios = 3;

							for($it=0; $it<3; $it++)
							{
								
									sleep(5); // sleep para aumentar o tempo de consultas na API para não bloquear por RATE LIMIT.
									$url = "https://api.github.com/search/repositories?q=language:".$vetor[$it]."&per_page=".$qtd_repositorios."&?client_id=f2fb8af26dade8fdde1b&client_secret=b85cd28a568afea9f77d6a5a2887818c687447a5";
									$opts = [
									    'http' => [
									        'method' => 'GET',
									        'header' => [
									                'User-Agent: everton'
									        ]
									    ]
									];

									$json = file_get_contents($url, false, stream_context_create($opts));
									$obj = json_decode($json);
									$data = (array) $obj;

									#echo "<pre>";
									#var_dump($data);
									#echo "</pre>";


									$xml = json_decode(json_encode($data),true);
									echo "<b>$vetor[$it]</b>";
									echo "<br>" ;
									for($i=0; $i<$qtd_repositorios; $i++)
									{
										$n= $i +1; 
										echo "Repositório ". $n  . ": ";
										echo $xml["items"][$i]["html_url"]; 
										$d_branch= '/archive/'. $xml["items"][$i]["default_branch"]; 

										echo ' <a href="' . $xml["items"][$i]["html_url"] . $d_branch  . '/s.zip" 

										download="1.zip">Download repositorio</a>';
										echo "<br>" ;

									} // fim do for
									
									#echo $xml["items"][0]["git_url"];
									#echo "<br>";
									#echo $xml["items"][1]["git_url"];
									#	
								
							}	// fim do for
						?> 
						
     </div> 
  
   
    

</body>
</html>	
