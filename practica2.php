<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Ejemplo de HTML5" />
        <meta name="keywords" content="HTML5,CSS3,JavaScript" />
        <title>Formulario</title>
    </head>
    <body>
         <div>
                <h1>Agregar empleado</h1>
             <form action="datos.html" method="POST">
                 <fieldset>
                 <legend>Laboral</legend>
                     <label for="txtNombre">C&oacutedigo</label><br/>
                     <input type="text" size="40" maxlength="255" id="txtCodigo" name="codigo" />
                     <br/>
                     <br/>
                     <label for="txtCorreo">Fecha de ingreso</label><br/>
                     <input type="text" size="40" maxlength="255" id="txtFecha" name="Fecha" />
                     <br/>
                     <br/>
                     <label for="txtSsocial">Seguridad Social</label><br/>
                                 <select name="sexo" id="sexo">
                                 <option>ISSSTE</option>
                                 <option>IMSS</option>
                                 <option>OTRO</option>
                                 </select>
                     <br/>
                     <br/>
                <label for="txtNumber">Numero</label><br/>
                 <input type="text" size="20" maxlength="255" id="txtNumero" name="Numero" />
                     <br/>
                     <br/>
                 </fieldset>
             </form>
         </div>
 <br/>
                 <br/>



                 <div>
              <form action="datos.html" method="POST">
                          <fieldset>
            <legend>Personal</legend>
                 
                 <label for="txtNombre">Nombre</label> <br/>
                 <input type="text" size="40" maxlength="255" id="txtNombre" name="nombre" />
                 <br/>
                 <br/>
                 <label for="txtApaterno">Apellido Paterno</label> <br/>
                 <input type="text" size="30" maxlength="255" id="txtPaterno" name="Apeterno" />
                 <br/>
                 <br/>
                 <label for="Amaterno">Apellido Materno</label> <br/>
                 <input type="text" size="30" maxlength="255" id="txtMaterno" name="Amaterno" />
                 <br/>
                 <br/>
                 <label for="Foto">Foto</label> <br/>
                 <input type="file" multiple="multiple" />
                                 <br/>
                 <br/>
                                 <label for="txtsexo">Sexo</label><br/> <br/>
                                 <p><label> <input type="radio" name="prior" value="M" checked> Hombre</label></p>
                                 <p><label> <input type="radio" name="prior" value="F"> Mujer </label></p>
                                 <br/>
                 <br/>
                                 <label for="Ecivil">Estado Civil</label> <br/>
                                 <select name="Ecivil" id="Estadocivil">
                                 <option>Soltero</option>
                                 <option>Casado</option>
                                 <select/>
                </fieldset>

       </form>
         </div>
 <br/>
                 <br/>


         <div>
<form action="datos.html" method="POST">
                          <fieldset>
            <legend>Nacimiento</legend>
                 
                 <label for="txtFecha">Fecha</label><br/>
                 <input type="date" size="20" maxlength="255" id="txtFecha" name="nombreFecha" />
                 <br/>
                 <br/>
                                 <label for="Pais">Pais</label><br/>
                                 <select name="Paisse" id="idpais">
                                 <option>Mexico</option>
                                 <option>Canada</option>
                                 <option>USA</option>
                                 <option>Colombia</option>
                                 <option>Argentina</option>
                                 <select/>
                </fieldset>

       </form>
         </div>
 <br/>
                 <br/>
         </div>
 <form action="datos.html" method="POST">
                          <fieldset>
            <legend>Contacto</legend>
                 
                 <label for="txtTitulo">Titulo</label><br/>
                 <input type="text" size="5" maxlength="255" id="txtTitulo" name="Titulo" />
                 <br/>
                 <br/>
                                 <label for="txtCurp">CURP</label><br/>
                 <input type="text" size="20" maxlength="255" id="txtCurp" name="Curp" />
                                 <br/>
                 <br/>
                                 <label for="txtRfc">RFC</label><br/>
                 <input type="text" size="20" maxlength="255" id="txtRfc" name="Rfc" />
                                 <br/>
                 <br/>
                                 <label for="txtTelefono">Telefono</label><br/>
                 <input type="text" size="25" maxlength="255" id="txtTel" name="Telefono" />
                                 <br/>
                 <br/>
                                 <label for="txtCel">Celular</label><br/>
                 <input type="text" size="25" maxlength="255" id="txtCel" name="Celular" />

                                 <br/>
                 <br/>

                                 <label for="txtDomicilio">Domicilio</label><br/>
                 <input type="text" size="70" maxlength="255" id="txtDomic" name="Domici" />
                                 <br/>
                 <br/>
                                 <label for="txtCol">Colonia</label><br/>
                 <input type="text" size="40" maxlength="255" id="txtCol" name="Colonia" />
                                  <br/>
                 <br/>
                                 <label for="txtCodPostal">Codigo Postal</label><br/>
                 <input type="text" size="10" maxlength="255" id="txtCpos" name="CodPos" />

                                 <br/>
                 <br/>
                                 <label for="Pais">Pais</label><br/>
                                 <select name="Paisse" id="idpais">
                                 <option>Mexico</option>
                                 <option>Canada</option>
                                 <option>USA</option>
                                 <option>Colombia</option>
                                 <option>Argentina</option>
                                 <select/>
                                 <br/>
                 <br/>
                                 <label for="txtRdio">Radio</label><br/>
                 <input type="text" size="25" maxlength="255" id="txtRadio" name="Radio" />
                                  <br/>
                 <br/>
                                 <label for="txtCorreo">Correo Electronico</label><br/>
                 <input type="text" size="40" maxlength="255" id="txtCorreo" name="Email" />
                                  <br/>
                 <br/>
                                 <label for="txtObs">Observaciones</label><br/>
                 <input type="text" size="70" maxlength="255" id="txtObser" name="Observaciones" />
                </fieldset>
                                <input type="submit" name="enviar" value="Cancelar" />
                                <input type="button" name="Cancelar" value="Agregar"/>

       </form>
         </div>
    </body>
</html>