function alerta()
    		{
			   
			    var opcion = confirm("Estas seguro que quieres desconectarte?");
			    if (opcion == true) {
			        
			        window.location.assign("http://localhost/M12-BackEndSpring/logout.php");
			 
				} else {
				    

				}
			}
			
	
function info(){

	window.location.assign("http://localhost/M12-BackEndSpring/paginaUserInfo.php");
}    


function createUser(){
    let user = {
        nombre: document.getElementById("nombre").value, 
        apellido: document.getElementById("apellido").value, 
        dni: document.getElementById("DNI").value, 
        email: document.getElementById("Email").value,
        fecha_nacimiento: document.getElementById("fecha_nacimiento").value,
        contrasena:document.getElementById("Contraseña").value,
        imagen:"img/Usuario.png"
      
    };
    postUser(user);
        console.log(user);
}


function postUser(data){
    const url = 'http://localhost:8080/clientes';
    let request = new Request(url, {
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
                alert("No se ha podido crear el usuario");});

}








/*
function createUser(data){
    const url = 'http://localhost:1337/api/clientes';

    let request = new Request(url, {
                method: 'POST',
                body: JSON.stringify({data:data}),
                headers: new Headers({
                        'Content-Type': 'application/json; charset=UTF-8'
                    })
    });

fetch(request)
  .then(function() {
    // Handle response you get from the API
    console.log(request);
  });
}

console.log(user);

createUser(user);


(function() {

        function addSeparator(nStr) {
            nStr += '';
            var x = nStr.split('.');
            var x1 = x[0];
            var x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + '.' + '$2');
            }
            return x1 + x2;
        }

        function rangeInputChangeEventHandler(e){
            var rangeGroup = $(this).attr('name'),
                minBtn = $(this).parent().children('.min'),
                maxBtn = $(this).parent().children('.max'),
                range_min = $(this).parent().children('.range_min'),
                range_max = $(this).parent().children('.range_max'),
                minVal = parseInt($(minBtn).val()),
                maxVal = parseInt($(maxBtn).val()),
                origin = $(this).context.className;

            if(origin === 'min' && minVal > maxVal-5){
                $(minBtn).val(maxVal-5);
            }
            var minVal = parseInt($(minBtn).val());
            $(range_min).html(addSeparator(minVal*1000) + ' €');


            if(origin === 'max' && maxVal-5 < minVal){
                $(maxBtn).val(5+ minVal);
            }
            var maxVal = parseInt($(maxBtn).val());
            $(range_max).html(addSeparator(maxVal*1000) + ' €');
        }

     $('input[type="range"]').on( 'input', rangeInputChangeEventHandler);
})();       */