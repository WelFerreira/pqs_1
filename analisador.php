
<!DOCTYPE html>
<html>
<!-- Para alterar os icones entrar no site: https://feathericons.com/ -->
<head>
	<title> analisador</title>
	
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Estilos customizados para esse template -->



<body>


 		    <div id="secao_prin">
              

					<?php
							
							$files = new FilesystemIterator("../", FilesystemIterator::UNIX_PATHS);
							$filtered = new RegexIterator($files, "/\.(java)$/i");
							foreach($filtered as $file){
								echo $file . "<br/>";

							}

							echo "END FIlesystemIterator .......<br/>";
							echo "START RecursiveDirectoryIterator ........<br/>";
							$files = new RecursiveDirectoryIterator('../');
							$files = new RecursiveIteratorIterator($files);
							$filtered = new RegexIterator($files, "/\.(java)$/i");
							foreach($filtered as $file){
								echo $file->getRealPath() . $file->getSize() . '<br>';
						}


					?>
						
    		 </div> 
  
   
    

</body>
</html>	





















