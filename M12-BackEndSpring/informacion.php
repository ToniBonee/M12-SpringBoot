<?php
$variablephp = $_SESSION['id'];
?>
<script>
var ini = "<?php echo $variablephp; ?>" ;

    let url = "http://localhost:8080/clientes/" + ini ;
    fetch(url).then((response) => {
                    return response.json();
                    
                })
                .then((data) => {
                    let authors = data;
                    
                    document.getElementById("nombre").value = authors.nombre;
                    document.getElementById("apellido").value = authors.apellido;
                    document.getElementById("DNI").value = authors.dni;
                    document.getElementById("Email").value = authors.email;
                    document.getElementById("Contraseña").value = authors.contrasena;
                    document.getElementById("fecha_nacimiento").value = authors.fecha_nacimiento;
                    
                    
}).catch(function(error) {
  console.log(error);
});
	
	function deleteUser(){

   let xhrdelete = new XMLHttpRequest();
    xhrdelete.open("DELETE", "http://localhost:8080/clientes/" + ini);
    xhrdelete.responseType = 'json';
    xhrdelete.onreadystatechange = function () {
    if (xhrdelete.readyState === 4) { //Cuando termina de cargarse
        if(xhrdelete.status == 200){
            console.log(xhrdelete.status);
            console.log("Borrado correctamente");
            window.location.assign("http://localhost/M12-BackEndSpring/logout.php");
        }
        }};
xhrdelete.send();

   }

   function modificarUser(){
    let user = {
        nombre: document.getElementById("nombre").value, 
        apellido: document.getElementById("apellido").value, 
        dni: document.getElementById("DNI").value, 
        fecha_nacimiento: document.getElementById("fecha_nacimiento").value,
        email: document.getElementById("Email").value, 
        contrasena:document.getElementById("Contraseña").value,
        
    }
    console.log(user);
    updateUser(user);
   }

	function updateUser(data){
    const urlU = 'http://localhost:8080/clientes/' + ini;
    console.log("TEST2");
    let request = new Request(urlU, {
                method: 'PUT',
                body: JSON.stringify(data),
                headers: new Headers({
                        'Content-Type': 'application/json; charset=UTF-8'
                    })
    });

    fetch(request)
      .then(function() {
        // Handle response you get from the API
        console.log(request);
        
      })                .catch(function(error) {
                    console.log(error);
                    alert("No se ha podido modificar los datos del usuario");});
    }
</script>
					
		            <label for="nombre" class="col-5">Nombre:</label>
                    <input   type="text" name="nombre" id="nombre" value=" " required /><br>

                    <label for="apellido" class="col-5">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" value=" " required /><br>

                    <label for="DNI"class="col-5">DNI:</label>
                    <input type="text" name="DNI" id="DNI" value=" " required /><br>

                    <label for="Email"class="col-5">Email:</label>
                    <input type="text" name="Email" id="Email" value=" " required /><br>

                    <label for="Contraseña"class="col-5">Contraseña:</label>
                    <input type="password" name="Contraseña" id="Contraseña" value=" " required/><br>

                    <label for="fecha_nacimiento"class="col-5">Fecha de nacimiento:</label>
                    <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value=" " required/><br>

                    <label for="Imagen" class="col-4">Imagen de perfil:</label>
                    <input type="file" name="imagen" id="Imagen" value=" "  /><br>				

			
					
	