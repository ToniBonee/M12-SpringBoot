 
<script >
function mostrarProducts(){
  var idP = document.getElementById("id").value;
    let urlT = "http://localhost:8080/productos/" + idP ;
    fetch(urlT).then((response) => {
                    return response.json();
                    
                })
                .then((data) => {
                    let authors = data;
                    
                    document.getElementById("producto").value = authors.producto;
                    document.getElementById("precio").value = authors.precio;
                    document.getElementById("stock").value = authors.stock;
                    document.getElementById("imagen_producto").value = authors.imagen_producto;
                    document.getElementById("info_producto").value = authors.info_producto;
                    document.getElementById("id_categoria").value = authors.id_categoria;
                    
                    
}).catch(function(error) {
  console.log(error);
});  
}



    function updateProduct(){
    
    let productos = {
        producto: document.getElementById("producto").value, 
        precio: document.getElementById("precio").value, 
        stock: document.getElementById("stock").value, 
        imagen_producto: document.getElementById("imagen_producto").value,
        info_producto: document.getElementById("info_producto").value, 
        id_categoria:document.getElementById("id_categoria").value
        
    };
    putProduct(productos);
}


function putProduct(data){
    var idP = document.getElementById("id").value;
    const url = 'http://localhost:8080/productos/' + idP;
    console.log("TEST2");
    let request = new Request(url, {
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
                alert("No se ha podido crear el producto");});

}


function deleteProduct(){
    var idP = document.getElementById("id").value;
   let xhrdelete = new XMLHttpRequest();
    xhrdelete.open("DELETE", "http://localhost:8080/productos/" + idP);
    xhrdelete.responseType = 'json';
    xhrdelete.onreadystatechange = function () {
    if (xhrdelete.readyState === 4) { //Cuando termina de cargarse
        if(xhrdelete.status == 200){
            console.log(xhrdelete.status);
            console.log("Borrado correctamente");
            
        }
        }};
xhrdelete.send();

   }

</script>

            <label for="id" class="col-5">Id del Producto:</label>
            <input   type="number" name="id" class="id" onchange="" id="id" value=" "  /><br>

            <label for="producto" class="col-5">Producto:</label>
            <input   type="text" name="producto" class="producto" id="producto" value=" "  /><br>

            <label for="precio" class="col-5">Precio:</label>
            <input type="text" name="precio" class="precio"  id="precio" value="" /><br>

            <label for="stock"class="col-5">Stok:</label>
            <input type="text" name="stock" class="stock" id="stock" value="" /><br>

            <label for="imagen_producto"class="col-5">Imagen del producto:</label>
            <input type="text" name="imagen_producto" class="imagen_producto"  id="imagen_producto" value=" " /><br>

            <label for="info_producto"class="col-5">Informacion del producto:</label>
            <textarea type="textarea" name="info_producto" class="info_producto"  id="info_producto" value=" " > </textarea><br>

            <label for="id_categoria"class="col-5">Categoria del producto:</label>
            <select name="id_categoria" id="id_categoria">
                 <option value="1">Componentes</option>
                 <option value="2">Ordenadores</option>
                 <option value="3">Gaming</option>
                 <option value="4">Periféricos</option>
            </select>
           
           

           
          </section> 