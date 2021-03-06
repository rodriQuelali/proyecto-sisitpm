<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITBM-Postulantes</title>
    <link rel="icon" href="/assets/img/itbmInicio.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos.css">
    <script src="https://kit.fontawesome.com/22ed8f9c04.js" crossorigin="anonymous"></script>

</head>
<body class="fondo">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="/assets/img/itbm.png" alt="" width="40" height="40"> ITBM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://www.itboliviamar.edu.bo/"><span class="fas fa-globe-americas"></span> Página web</a>
                </li>
                <li class="nav-item" style="display: none;" id="closeSesion">
                    <a class="nav-link" href="#" onclick="cerrarSesion()"><span class="fas fa-door-closed"></span> Cerrar sesión</a>
                </li>
                <li class="nav-item" style="display: none;" id="usuario">
                    <a  id="nombreUsu" class="nav-link disabled">usuario@gmail.com</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container text-center sesion" id="login" style="padding-bottom:15px; display:block;"> 
            <form id="login-form">
                    <img class="mb-4" src="/assets/img/itbm.png" alt="" width="120" height="120">
                    <p class="mt-5 mb-3 text-white" >INGRESAR</p>
                <div class="form-floating mb-3">
                    <input type="text" name="nombre" class="form-control rounded-5 campsesion" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control rounded-5 campsesion" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                </div>
                    <button class="w-100 btn btn-lg btn-primary btnsesion"  type="submit">Iniciar sesión</button>

                    <p class="mt-5 mb-3 text-white" >© ITBM 2022</p>
                <div class="card footer"style="padding-bottom:0px ;">
                    <div id="errorSesion" class="alert alert-danger alert-dismissible fade show" style="display: none;" role="alert">
                        <strong>¡Intente de nuevo!</strong> Correo o contraseña incorrectos.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </form >
        </div>

        <div  class="container text-center" style="margin-top:50px; display: none;" id="contenido">
                <h1 class="page-header text-center text-white" style="margin-bottom:50px;">POSTULANTES AL ITBM</h1>
            <div class="row">
                <div class="col-sm-12">
                    <div id="btnNuevoPriv" style="display: none;" >
                        <button class="btn btn-primary anchobtn"  data-bs-toggle="modal" data-bs-target="#Registro" ><span class="fa fa-plus" style="padding-right:10px; "></span>  Nuevo</button>
                    </div>

                    <button class="btn btn-primary anchobtn" id="btntotal" onclick="capturaTotal('Total a nivel instituto'),cierraBuscar()"><span class="fas fa-poll" style="padding-right:10px;"></span>  Total</button>
                    <button class="btn btn-primary anchobtn" id="btnBuscar" onclick="buscar(), cerrarTotal()"><span class="fas fa-search" style="padding-right:10px;"></span>   Buscar</button>
                    <div class="btn-group">
                        <button type="button"  onclick="cierraBuscar()" class="btn btn-primary dropdown-toggle anchobtn" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fas fa-university" style="padding-right:10px;"></span>Carreras
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="filtroTotalCarreras(1,'Total Sistemas Informaticos')">Sistemas Informáticos </a></li>
                            <li><a class="dropdown-item" href="#" onclick="filtroTotalCarreras(2,'Total Construcción Civil')">Construcción Civil </a></li>
                            <li><a class="dropdown-item" href="#" onclick="filtroTotalCarreras(3,'Total Electricidad Industrial')">Electricidad Industrial </a></li>
                            <li><a class="dropdown-item" href="#" onclick="filtroTotalCarreras(4,'Total Industria Textil y confección')">Industria Textil y confección </a></li>              
                            <li><a class="dropdown-item" href="#" onclick="filtroTotalCarreras(5,'Total Mecánica Automotríz')">Mecánica Automotríz  </a></li>
                            <li><a class="dropdown-item" href="#" onclick="filtroTotalCarreras(6,'Total Redes de gas y Soldadura en ductos')">Redes de gas y Soldadura en ductos  </a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button"  onclick="cierraBuscar(), cerrarTotal()" class="btn btn-success dropdown-toggle anchobtn" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fas fa-print" style="padding-right:10px;"></span>Imprimir
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="reporteCarreras(1,'SISTEMAS INFORMÁTICOS')">Sistemas Informáticos </a></li>
                            <li><a class="dropdown-item" href="#" onclick="reporteCarreras(2,'CONSTRUCCIÓN CIVIL')">Construcción Civil </a></li>
                            <li><a class="dropdown-item" href="#" onclick="reporteCarreras(3,'ELECTRICIDAD INDUSTRIAL')">Electricidad Industrial </a></li>
                            <li><a class="dropdown-item" href="#" onclick="reporteCarreras(4,'INDUSTRIA TEXTIL Y CONFECCIÓN')">Industria Textil y confección </a></li>              
                            <li><a class="dropdown-item" href="#" onclick="reporteCarreras(5,'MECÁNICA AUTOMOTRÍZ')">Mecánica Automotríz  </a></li>
                            <li><a class="dropdown-item" href="#" onclick="reporteCarreras(6,'REDES DE GAS Y SOLDADURA EN DUCTOS')">Redes de gas y Soldadura en ductos  </a></li>
                        </ul>
                    </div>
                </div>  
                    
            </div>
        </div>


        <div class="modal fade" id="Registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h4 class="modal-title" id="myModalLabel">Agregar postulante</h4></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                        
                    </div>
                
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="" id="Registro-form">

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label">Nombre:</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="txtNombre" required>
                                </div>
                                <div class="col-sm-1">
                                    <label class="control-label">C.I.:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="txtCi" required>
                                </div>
                            </div>
          
                            <div class="row form-group" style="margin-top:15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Paterno:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtPaterno" required>
                                </div>
                            </div> 
          
                            <div class="row form-group" style="margin-top:15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Materno:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtMaterno" required>
                                </div>
                            </div>  
          
                            <div class="row form-group" style="margin-top:15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Celular:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="tel" class="form-control" name="txtTelefono" required>
                                </div>
                                
                                <div class="col-sm-2">
                                    <label class="control-label">Edad:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="txtEdad" required>
                                </div>
                            </div>
          
                            <div class="row form-group" style="margin-top:15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Género:</label>
                                </div>
                                <div class="col-sm-4">
                                    <select  name="txtSexo" class="form-control" required>
                                        <option value="">--Elegir--</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div> 
                            
                                <div class="col-sm-2" style="margin-top:15px;">
                                    <label class="control-label">Año de egreso:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="txtGestion" required>
                                </div>
                            </div>
          
          
                            <div class="row form-group" style="margin-top:15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Dirección:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtDireccion" required>
                                </div>
                            </div>
          
                            <div class="row form-group" style="margin-top:15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Carrera:</label>
                                </div>
                                <div class="col-sm-10">
                                    <select  name="txtGrado" class="form-control" required>
                                        <option value="">-- Elegir --</option>
                                        <option value="1">Sistemas Informáticos</option>
                                        <option value="2">Construcción Civil</option>
                                        <option value="3">Electricidad Industrial</option>
                                        <option value="4">Industria Textil y Confección</option>
                                        <option value="5">Mecánica Automotríz</option>
                                        <option value="6">Redes de Gas y Soldadura en Ductos</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group" style="margin-top:15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Estado:</label>
                                </div>
                                <div class="col-sm-4">
                                    <select name="txtEstado" class="form-control" required>
                                        <option value="">--Elegir--</option>
                                        <option value="Ninguno">Ninguno</option>
                                        <option value="APROBADO">Aprobado</option>
                                        <option value="REPROBADO">Reprobado</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <label class="control-label">Turno:</label>
                                </div>
                                <div class="col-sm-4" >
                                    <select name="txtTurno" class="form-control" required>
                                        <option value="">--Elegir--</option>
                                        <option value="MAÑANA">Mañana</option>
                                        <option value="NOCHE">Noche</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal" onclick="BorrarDatos()">  <span class="fa fa-close"></span> Cancelar</button>
                                <button type="submit" class="btn btn-primary" ><span class="fa fa-save"></span> Guardar</button>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="card" id="Contenedor-Total" style="margin-top:30px; display: none;">
                <div class="card-header" id="cabeza" style="font-size:1.5rem; font-weight: bold;">                   
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="margin-bottom:20px;" id="total"></h5>
                    <a href="#" class="btn btn-danger" onclick="cerrarTotal()">Cerrar</a>
                </div>
            </div>
        </div>

        <div class="container text-center" style="margin-top:30px; display: none;" id="Contenido-Buscar">
            <div class="card" id="Contenedor-Busqueda" >
                <div class="card-header">
                    Búsqueda por CI o Nombre.
                </div>
                <div class="card-body">
                    <div class="input-group flex-nowrap" style="margin-bottom: 20px;">
                        <span class="input-group-text" id="addon-wrapping"> <i class="fas fa-search"></i> </span>
                        <input type="text" id="txtCiFiltro" name="txtCiFiltro" class="form-control" placeholder="CI o nombre" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <button class="btn btn-success" id="filtro-Btn">Buscar</button>
                    <a href="#" class="btn btn-danger" onclick="cierraBuscar()">Cancelar</a>

                    <div id="resultado-Busqueda">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h4 class="modal-title" id="myModalLabel">Editar postulante</h4></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                        
                    </div>
                
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="" id="editar-form">

                            <div class="row form-group">
                                <div class="col-sm-5">
                                    <input type="hidden" class="form-control" name="id" id="editar-text"  required>
                                </div>
                            </div>

                            <div class="row form-group" style="margin-top:15px; margin-bottom: 15px;">
                                <div class="col-sm-2">
                                    <label class="control-label">Estado:</label>
                                </div>
                                <div class="col-sm-4">
                                    <select name="estado" class="form-control" required>
                                        <option value="">--Elegir--</option>
                                        <option value="Aprobado">Aprobado</option>
                                        <option value="Reprobado">Reprobado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal" onclick="BorrarDatos()">  <span class="fa fa-close"></span> Cancelar</button>
                                <button type="submit" class="btn btn-success" ><span class="fa fa-save"></span> Guardar</button>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="/js/main.js"></script>
</body>
</html>

