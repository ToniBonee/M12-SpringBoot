 
<script >
    function createProduct(){
    
    let producto = {
        producto: document.getElementById("producto").value, 
        precio: document.getElementById("precio").value, 
        stock: document.getElementById("stock").value, 
        imagen_producto: document.getElementById("imagen_producto").value,
        info_producto: document.getElementById("info_producto").value, 
        id_categoria:document.getElementById("id_categoria").value
        
    };
    postUser(producto);
}


function postUser(data){
    const urlP = 'http://localhost:8080/productos';
    console.log(data);
    let request = new Request(urlP, {
                method: 'POST',
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

</script>



            <label for="producto" class="col-5">Producto:</label>
            <input   type="text" name="producto" class="producto" id="producto"  value=" "  /><br>

            <label for="precio" class="col-5">Precio:</label>
            <input type="text" name="precio" class="precio"  id="precio" value=" "  /><br>

            <label for="stock"class="col-5">Stock:</label>
            <input type="text" name="stock" class="stock" id="stock"  value=" "  /><br>

            <label for="imagen_producto"class="col-5">Imagen del producto:</label>
            <input type="text" name="imagen_producto" class="imagen_producto"  id="imagen_producto"  value=" " /><br>

            <label for="info_producto"class="col-5">Informacion del producto:</label>
            <textarea type="textarea" name="info_producto" class="info_producto"  id="info_producto"  value=" " > </textarea><br>

            <label for="id_categorias"class="col-5">Categoria del producto:</label>
            <select name="id_categorias" id="id_categoria">
                 <option value="1">Componentes</option>
                 <option value="2">Ordenadores</option>
                 <option value="3">Gaming</option>
                 <option value="4">Periféricos</option>
            </select>
           
           

           
          </section> 