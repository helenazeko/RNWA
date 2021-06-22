<DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

* {
  box-sizing: border-box;

}

.topnav {
  background-color:rgb(68, 100, 58);
  color: white;
  text-align: left;
  padding: 13px;
border-top: 2px solid white;
border-bottom: 2px solid white;
  
}
.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}
.topnav a:hover {
  background-color: rgb(199, 178, 178);
  color: black;
}


@media screen and (max-width: 600px) {
  .column{
    width: 100%;
    height: auto;
  }
}

@media screen and (max-width: 600px) {
  .column1{
    width: 100%;
    height:auto;
  }
}
</style>
  </head>
  <body>
  <div class="topnav"  id="mytopnav">
                <a href='./'>Home</a>
                <a href='?controller=employees&action=index'>Employees</a>
                <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
                      <a href='?controller=salaries&action=index'>Salaries</a>
                         <?php 
                      }
                    }
                      ?>
                
                <a href='logout.php'>Odjava</a>
  </div>  
    <?php require_once('routes.php'); ?>
    <body>
<html>