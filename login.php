<?php include "_header.php"?>
 <div class="row">
        <div class="col-md-offset-5 col-md-2 ">
        <form action="procesa_datos.php" method="post">
            <div class="form-login">
                <h4>Welcome back.</h4>
                <input type="text" name="userName" class="form-control input-sm chat-input" placeholder="username" />
                </br>
                <input type="text" name="userPassword" class="form-control input-sm chat-input" placeholder="password" />
                </br>
                
                
                <div class="wrapper">
                <span class="group-btn">     
                <button type="submit" class= "btn btn-danger">enviar</button>
                 </span>
                </div>
            </div>
        </form> 
        </div>   
    </div>   

<?php include "_footer.php"?>