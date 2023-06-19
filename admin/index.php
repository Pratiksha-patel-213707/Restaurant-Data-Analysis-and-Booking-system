<?php  

   include( 'db.php');
 
   ?>
</body>
</html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<meta http-equiv="Refresh" content=“6; url=https://pawsthedogsplanet.com/“ />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<style>
      body{
          margin: 0;
          padding: 0;
          
      }

     #zoom-In:hover  {
     transform: scale(1.4);
     cursor: pointer;
 }
 .image {
     display: block;
     width: 100%;
     height: 100%;
     cursor: pointer; 
 }    
#zoom-In {
    transform: scale(1);
    transition: 0.3s ease-in-out;
}

.container img{
    height: 20%;
    width: 70%;
}
/*.amit {*/
/*  width: 100%;*/
/*  height: 100%;*/

/*  position: relative;*/
/*  animation-name: example;*/
/*  animation-duration: 4s;  */
/*  animation-fill-mode: forwards;*/
/*}*/

@keyframes example {
  from {top: 320px;}
  to {top: 0px; }
}
</style>
</head>
<body>
<?php
   
   

   if(isset($_POST['login']))
    {
        $Uname=$_POST['user'];
        $Password=$_POST['password'];
        

        if($Uname=='' && $Password=='')
        {
            echo "<script> alert('Filled Should Not be Blank'); </script>"; 
            header('refresh:2; url=Login.php');
        }

        else

        {

        $qry="select * from admin_login where usname='$Uname' && pass='$Password'";
       

        $ex=mysqli_query($con,$qry);
       
        $res=mysqli_fetch_array($ex);


        if($res['usname']==$Uname && $res['pass']==$Password)
        {
                 session_start();
                 
                 $_SESSION['usname']=$Uname; 
                 
                 echo "<script> window.location.assign('bookingrecord.php'); </script>";
                
// echo "<script> window.location.assign('https://pawsthedogsplanet.com/admin/home.php?$Uname'); </script>";
                
                                
                //echo' <script>window.location="home.php?url=newapplication&id='.$_SESSION['usname'].'"';
                
                // header('location:home.php');
            //   echo "<meta http-equiv='refresh' content='0; URL=http://pawsthedogsplanet.com/admin/home.php/$username'>";
        }
        else 
        {
            echo "<script> 
                   
                   alert('Wrong Username Or Password');
                      
                  </script>";
        }
       

        }

    }

?>
    <div class="container">
        <div class="amit">

        <div class="card card-container">
        <div id="zoom-In" class="image">
            
       <img src="../img/logo3.png" class="rounded mx-auto d-block "alt="..." >
      </div>
      <p style="margin-top: 40px; margin-bottom: 40px; font-size: 1.8rem;" id="profile-name" class="profile-name-card"><b>MAIN ADMIN </b></p>
          
            <form method="post" action="">

<fieldset class="clearfix">

  <p>
    <span class="fontawesome-user"></span>
    <input class="form-control" type="text"  name="user" placeholder="Enter username" ></p> <!-- JS because of IE support; better: placeholder="Username" -->
  <p>
    <span class="fontawesome-lock"></span>
    <input class="form-control" type="password" name="password"  placeholder="Enter Password" ></p> <!-- JS because of IE support; better: placeholder="Password" -->
  <p>
    <input  class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login" value="LogIn"></p>

</fieldset>

</form>
        </div>
    </div>
</div>
</body>
</html>
