<?php include "_header.php" ?>

	<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
      	
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<!-- <p class=" text-info">May 05,2014,03:00 pm </p> -->
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   		
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Usuario</h3>
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 ">
                <!-- <form action="procesa_datos.php" method="post"> --> 
                <form action="ejercicio.php" method="post"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre del cliente:</td>
                        <td><input type="text" name="nombredelcliente" class="form-control"></div></td>
                      </tr>
                      <tr>
                        <td>D.N.I:</td>
                        <td><input type="text" name="dni" class="form-control"></div></td>
                      </tr>
                      <tr>
                        <td>Fecha de Nacimiento</td>
                        <td><input type="date" name="fechadenacimento" class="form-control"></div></td>
                      </tr>
                   
                         
                       <tr>
                        <td>Direccion</td>
                        <td><input type="text" name="Direccion" class="form-control"></div></td>
                       </tr>
                       <tr>
                        <td>Poblacion</td>
                        <td><input type="text" name="Poblacion" class="form-control"></div></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="text" name="Email" class="form-control"></div></td>
                      </tr>
                      <tr>
                        <td>Telefono</td>
                        <td><input type="text" name="Telefono" class="form-control"></div><td>
                       </tr>
                      
                      <tr>
                        <td>Contraseña</td>
                        <td><input type="text" name="Contraseña" class="form-control" placeholder="Contraseña"></div></td>
                       </tr>
                       <tr> 
                        <td></td>
                        <td><input type="text" name="Confirmar contraseña" class="form-control" placeholder="Confirmar Contraseña"></div></td>
                       </tr>
                       <tr>
                       <td>Aceptar condiciones de uso</td> 
                       <td><input type="checkbox" name="condiciones" value="1"></div></td>
                       </tr>

                </form>      
                        
                           
                      
                     
                    </tbody>
                  </table>
                  
                  <button type="submit" class="btn btn-danger">Nuevo usuario</a>
                  <button type="submit" class="btn btn-primary">Guardar usuario</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                          
                        </span>
                    </div>
            	</div>
          		
         	 
        </div>
      </div>
    </div>

<?php include "_footer.php" ?>
