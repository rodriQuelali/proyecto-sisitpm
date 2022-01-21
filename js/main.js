
const URL = "https://apirestitpm.itpm.edu.bo/api/index.php/";


//Inicio de sesión
const formularioLogin = document.getElementById("login-form");
formularioLogin.addEventListener("submit", function(e){
    e.preventDefault();
    let data = new FormData(formularioLogin);
    var pae = false;
    //peticion https
    fetch(URL + "Usuario/loginUsuario", {method: 'POST', body: data})
      .then(json=>json.json())
      .then(pack=>{
        console.log(pack);
        if(pae === pack.err){
          if(pack.usuario.privilegio === '0'){
            document.getElementById('btnNuevoPriv').style.display="block";
          }
          document.getElementById("login").style.display="none";
          document.getElementById("contenido").style.display="block";
          document.getElementById('usuario').style.display="block";
          document.getElementById('closeSesion').style.display="block";
          capturaUsu();
          console.log(pack.usuario.privilegio);
        } else{
          document.getElementById('errorSesion').style.display="block";
        }

        document.getElementById("login-form").reset();  
      });
})

function cerrarSesion(){
  window.location.reload();
}

//Registro de nuevo postulante
const formularioRegistro = document.getElementById("Registro-form");
formularioRegistro.addEventListener("submit", function(e){
    e.preventDefault();
    let data = new FormData(formularioRegistro);
    var pae = false;
    //peticion https
    fetch(URL + "Alumnos/guardar", {method: 'POST', body: data})
      .then(json=>json.json())
      .then(pack=>{
        console.log(pack);
        if(pack.estado === 'ok'){
          BorrarDatos();
          alert('Se registro con éxito');
        }else{
          BorrarDatos();
          alert('Registro fallido');
        }
          

      });
}) 


//Captura boton CERRAR de total
function cerrarTotal(){
    document.getElementById('Contenedor-Total').style.display="none";
}

//Captura el total de postulantes
function capturaTotal(inst){
    fetch(URL + "Alumnos/countStudentFinal", {method: 'POST'})
        .then(json=>json.json())
        .then(pack=>{
            console.log(pack);
            let tot=pack.total_general;
            document.getElementById('total').innerHTML = tot + " postulantes";
            document.getElementById('Contenedor-Total').style.display="block";
            document.getElementById('total').innerHTML = tot + " postulantes";
            document.getElementById('cabeza').innerHTML = `<p>${inst}</p>`
        });
}


//Filtro - busqueda
const filtroBtn = document.getElementById("filtro-Btn");
filtroBtn.addEventListener("click", function(e){
    const txtFiltro = document.querySelector('#txtCiFiltro').value;
    document.querySelector('#txtCiFiltro').value ="";
    let data = new FormData();
    data.append("txtCiFiltro", txtFiltro);
    var pae = false;
    //peticion https
    fetch(URL + "Alumnos/filtroAlumnos", {method: 'POST', body: data})
      .then(json=>json.json())
      .then(pack=>{
        console.log(pack);
        document.getElementById('resultado-Busqueda').innerHTML = `<p style="font-size: 2.8rem;
        font-weight: bold;">${pack.alumnos.nombre} ${pack.alumnos.paterno} ${pack.alumnos.materno}</p> 
        <button data-bs-toggle="modal" data-bs-target="#Editar" onclick="editar(${pack.alumnos.id})" class="btn btn-success">Editar</button>`
      });
})

//Editar 
const editar = id =>{
  console.log(id);
  document.getElementById('editar-text').value = id;
}
const formularioEditar = document.getElementById("editar-form");
formularioEditar.addEventListener("submit", function(e){
    e.preventDefault();
    let data = new FormData(formularioEditar);
    var pae = false;
    //peticion https
    fetch(URL + "Alumnos/update", {method: 'POST', body: data})
      .then(json=>json.json())
      .then(pack=>{
        console.log(pack);
        if(pack.estado === 'ok'){
          document.getElementById('editar-form').reset();
          alert('Datos actualizados');
          
        }else{
          document.getElementById('editar-form').reset();
          alert('No se editó');
        }
          

      });
}) 

//Total por carreras
const filtroTotalCarreras = (id,inst) =>{
  let data = new FormData();
  data.append("filtroCarrera", id);
  fetch(URL + "Alumnos/countStudent", {method: 'POST', body:data})
        .then(json=>json.json())
        .then(pack=>{
            console.log(pack);
            let tot=pack.total;
            document.getElementById('Contenedor-Total').style.display="block";
            document.getElementById('total').innerHTML = tot + " postulantes";
            document.getElementById('cabeza').innerHTML = `<p>${inst}</p>`
        });

}

//Reporte por carreras
const reporteCarreras = (id,inst) =>{
  window.location = "https://apirestitpm.itpm.edu.bo/pdf/fpdf/tutorial/reportAlumnos.php?id_carr="+id+"&carr="+inst;
}



//Abre la ventana para buscar
function buscar(){
  document.getElementById('Contenido-Buscar').style.display = "block";
}

//Cierra cancela la ventana para buscar
function cierraBuscar(){
  document.getElementById('Contenido-Buscar').style.display = "none";
}

//Captura el correo del inicio de sesión correcto 
var capturar = "";
function capturaUsu(){
    capturar = document.getElementById('floatingInput').value;
    document.getElementById('nombreUsu').innerHTML = capturar;
}

//Limpia o resetea la ventana modal de registro de postulante nuevo
function BorrarDatos(){
    document.getElementById('Registro-form').reset();
}
