<script >


/*

    let urlP = "http://localhost:8080/productos";
    let list = document.createDocumentFragment();
    fetch(urlP).then((response) => {
                    return response.json();
                })
                .then((data) => {
                     let authors = data;
                    authors.forEach(element => {
                       let li = document.createElement('li');
                       let producto = document.createElement('h2');
                       let imagen_producto = document.createElement('img');
                        producto.innerHTML = authors.producto;
                        imagen_producto.src = authors.imagen_producto;
                        li.appendChild(producto);
                        li.appendChild(imagen_producto);
                        list.appendChild(li);
                        ul.appendChild(list);
                     
                    });
                })
                .catch(function(error) {
                    console.log(error);});


*/

function getUsers(){
let urlPc = "http://localhost:8080/clientes";
    let ul = document.getElementById('users');
    let list = document.createDocumentFragment();
    fetch(urlPc).then((response) => {
                    return response.json();
                })
                .then((data) => {
                    let users = data;
                    users.forEach(element => {
                     ul.appendChild(list);
                       let li = document.createElement('li');
                       let name = document.createElement('h2');
                       let id = document.createElement('span');
                        name.innerHTML = element.nombre;
                        id.innerHTML = element.id;
                        li.appendChild(name);
                        li.appendChild(id);
                        list.appendChild(li);
                        
                    });
                })
                .catch(function(error) {
                    console.log(error);});
}

getUsers();
/*
    fetch(urlPc).then((response) => {
                    return response.json();
                })
                .then((data) => {
                    let productos = data;
                    productos.forEach(element => {
                    producto = document.getElementById("prod").value = element.producto;
                    document.getElementById("precio").value = element.precio;
                    document.createElement("section");
                    document.createTextNode(producto);


                    });
                })
                .catch(function(error) {
                    console.log(error);});



	*/
	
</script>
    
						<section class="col-3 text-center" id="pr1">
						<section class="col-12" id="bottProdCarr">
							<img class="col-12" id="imagProd" src=''>
							<h3 class="col-12" id="prod"></h3>
							<h4 class="col-12" ><span id="precio"></span> €</h4>
						</section>
						<section class="col-12" >
							<h4 class="col-12">Stock: <span id="stok"></h4>
							<button class="col-12">Comprar</button>	
							<button class="col-12">Añadir Al carro</button>	
						</section>
					</section>
					

						

						
						