 <script>
            		
    var sessionId = "<?php echo $_SESSION['id']; ?>";
   
    let urlC = "http://localhost:8080/clientes/" + sessionId ;
    fetch(urlC).then((response) => {
                    return response.json();
                    
                })
                .then((data) => {
                    let authors = data;
                    
                    document.getElementById("sesion").innerHTML = authors.email;
                    document.getElementById("fotoPerfil").src = authors.imagen;
                    
                    
}).catch(function(error) {
  console.log(error);
});

            	</script>
 <?php
            	
               
            	if (!isset($_SESSION['login'])) {
            		
            		echo"<a href='iniciarUser.php'>Iniciar sesion</a> ";

            	}else{
            		echo"<a class='row' href='usuario.php'>"."<img class='col-3' id='fotoPerfil' style='height: 20px ;
                    width: 20px;' src=''>"."<button class='col-4 ' id='sesion' ></button>"."</a>";
					
			        
            	}
            	 
            	?>

  