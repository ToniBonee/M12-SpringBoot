<?php
$variablephp = $_SESSION['id'];
?>
<script  >
var inc = "<?php echo $variablephp; ?>" ;

    let url = "http://localhost:8080/datos_envio" + inc ;
    fetch(url).then((response) => {
                    return response.json();
                    
                })
                .then((data) => {
                    let authors = data;
                    
                    document.getElementById("nombre").value = authors.nombre;
                    document.getElementById("apellido").value = authors.apellido;
                    document.getElementById("DNI").value = authors.DNI;
                    document.getElementById("Email").value = authors.Email;
                    document.getElementById("Contraseña").value = authors.Contraseña;
                    document.getElementById("fecha_nacimiento").value = authors.fecha_nacimiento;
                    
                    
}).catch(function(error) {
  console.log(error);
});
	
	function modInf() {
		if (inc == null) {
			let xhrpost = new XMLHttpRequest();
			xhrpost.open("POST", "http://localhost:1337/api/datos-envios/");
			xhrpost.setRequestHeader("Content-type", "application/json");
			xhrpost.onreadystatechange = function () {
			if (xhrpost.readyState === 4) {
			    console.log(xhrpost.status);
			    console.log(xhrpost.responseText);
			}};

			xhrpost.send(JSON.stringify(object));
		}else{
			let xhrput = new XMLHttpRequest();
			xhrput.open("PUT", "http://localhost:1337/api/clientes/" + inc);
			xhrput.setRequestHeader("Content-type", "application/json");
			xhrput.onreadystatechange = function () {
			if (xhrput.readyState === 4) {
			    console.log(xhrput.status);
			    console.log(xhrput.responseText);
}};


xhrput.send(JSON.stringify(objectput));
		}

		

	}
	
</script>
			<label for="nombre" class="col-5">Nombre:</label>
           	<input   type="text" name="nombre" id="nombre" value=""required /><br>

            <label for="apellido" class="col-5">Apellido:</label>
            <input type="text" name="apellido" id="apellido" value=""required /><br>
            			
			<label for="Direccion" class="col-5">Direccion:</label>
           	<input   type="text" name="Direccion" id="Direccion" value="" /><br>

            <label for="Codigo_postal" class="col-5">Codigo_postal:</label>
            <input type="text" name="Codigo_postal" id="Codigo_postal" value="" /><br>

            <label for="Ciudad"class="col-5">Ciudad:</label>
            <input type="text" name="Ciudad" id="Ciudad" value="" /><br>

            <label for="Telefono"class="col-5">Telefono:</label>
            <input type="text" name="Telefono" id="Telefono" value="" /><br>

            <label for="Empresa"class="col-5">Empresa:</label>
            <input type="text" name="Empresa" id="Empresa" value="" /><br>

            
					
	