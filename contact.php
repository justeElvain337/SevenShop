
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="">
    <title>Dajnad T-Shirt | Contact </title>

    
        

        <!-- Bootstrap core CSS --> 
<link rel="stylesheet" href="css/main.css">
<link rel="shortcut icon" type="image/png" href="images/products/favicon.png">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  </head>
  <body>
    


  <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
           
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarResponsive">
              <span class="sr-only">Grandpace | Tshirt Design</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span>
              </button>
              <a href="index.php" class="navbar-brand">Grandpace</a>
            </div>
            <div id="navbarResponsive" class="collapse navbar-collapse ml-auto">
               <ul class="nav navbar-nav">
               <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                   <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                   <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
                   <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
            

               <li class="nav-item"><a href="https://www.instagram.com/juste_elvain/" class="nav-link"> <i class="fa fa-instagram"></i> </a></li>
               <li class="nav-item"><a href="https://web.facebook.com/GrandPace-Services-690273567844117/" class="nav-link"> <i class="fa fa-facebook"></i> </a></li>
               <li class="nav-item"><a href="https://twitter.com/ElvainJuste3" class="nav-link"> <i class="fa fa-twitter"></i> </a></li>
               
               </ul>
            </div>  <!-- end Nav-collapse  -->
        </div>
    </nav> 
    <!-- End of Nav -->


  <div class="title-bar">
     <div class="container">
         <h1>Kugira mugire commande; mushobora kutwandikira canke kuduhamagara</h1>
     </div>
     </div>
   <?php include('form_process.php');?>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <h1 class="text-center"> Twandikire email</h1>
                          <form id="contact" action="POST" data-netlify="true" method="POST">
                              <div class="form-group field">
                                  <label for="amazina" class="text-center">Amazina</label>
                                 <input type="text" class="form-control" name="name" placeholder="amazina yanyu ngaha"  required>
                                 <span class="text-center text-danger"> <?=$name_error;?> </span>
                                 
                                </div>

                                <div class="form-group field">
                                  <label for="email" class="text-center">E-mail</label>
                                 <input type="email" class="form-control" name="email" placeholder="E-mail yanyu ngaha" required>
                                 <span class="text-center text-danger"> <?=$email_error;?> </span>
                                </div>
                                <div class="form-group field">
                                  <label for="telephone" class="text-center">Telephone</label>
                                 <input type="tel" class="form-control" name="phone" placeholder="Numero za Telephone yanyu ngaha" required>
                                 <span class="text-center text-danger"> <?=$phone_error;?> </span>
                                </div>


                                <div class="form-group field">
                                  <label for="ubutumwa" class="text-center"> Ubutumwa</label>
                                 <textarea  class="form-control" type="text" name="message" placeholder="Andika ubutumwa bwanyu ngaha" required>
                                 </textarea>
                                </div>

                                
                                 <button name="submit" type="submit" id="contact-form"  class="btn btn-primary btn-md pull-center"> Murungike</button>
                                 <div class="text-center text-success"><?=$success;?></div>

                                 <div class="field">
                                  <div data-netlify-recaptcha="true"></div>
                                </div>
                            
                          </form>
             
            </div>
          
            <div class="col-md-4 mx-4">

            <img src="images/products/intamba_murugamba_BW.jpg" alt="">
            <br>
            <hr>
            <div class="col-md-12">
            <p class="text-center">Mugize Commande y'izirenga 10 ibeyi igabanuka 33%.</p>
            </div>

            </div>
        </div>
    </div>
</div>

     

</div>

            <br>

   <!-- end of section-b -->
   <div class="section-c">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 ">
         <div class="panel panel-secondary">
         <div class="panel-heading">
           <h1 class="text-center"> <i class="fa fa-address-card"> </i> &nbsp; Contact </h1>
         </div>
          <div class="panel-body">
         
           <div class="well">
            <p> <span class="lead">   Address</span> &nbsp; :Centre Ville kayanza; RN1 Hotel OKAPI</p>

            <div class="row">
            <div class="col-md-6">
              <h4> <i class="fa fa-user"></i>  &nbsp; Dusabe Don Divin</h4>
            <p> <i class="fa fa-phone"></i> &nbsp; +257 61 21 21 61  &nbsp; | +257 75 21 21 61  &nbsp; | +257 79 88 97 59</p>
            <p> <i class="fa fa-envelope"></i> &nbsp; beedin5@gmail.com &nbsp; | gpc@gmail.com</p>
            </div>

            <div class="col-md-6">
            <h4> <i class="fa fa-user"> </i> &nbsp; Juste Elvain </h4>
            <p><i class="fa fa-phone"></i> &nbsp; +260 962015621 </p>
            <p> <i class="fa fa-envelope"></i>  &nbsp;justeelvain337@gmail</p>
            </div>

            </div>
           </div>
          </div>
         </div>
        </div>

        <div class="col-md-6 ">
        <div class="panel panel-secondary">
          <div class="panel-heading">
          <h1 class="text-center"><i class="fas fa-clock"> </i> &nbsp;  Amasaha y'akazi </h1>
          </div>
          <div class="panel-body">
          <div class="well">
          <p><span class="lead">Kuwambere - Kuwagatanu:</span> 8:00AM - 6:00 PM </p>
             <p><span class="lead">Kuwagatandatu</span> 10:00AM - 4:00 PM </p>
             <p><span class="lead">Kuwmungu n'iminsi mikuru:</span> --- </p>
          </div>
          </div>
        </div>
         
            
        </div>
      </div>
    </div>
  </div>



<!-- end of section-c -->
<footer class="text-center">
  <div class="container">
    <p class="#"> Copyright &copy; 2019 Grandpace Tshirt Design  | &nbsp; &nbsp; <small> <i> Designed and implemented by </i></small> <a class="text-light" href="https://web.facebook.com/juste.redberry">Juste Elvain</a> </p>
  </div>
</footer>


<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
 