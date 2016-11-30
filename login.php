<!DOCTYPE html>

<html lang="en">
<head>

  <title>Unic Project - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript">

        function transform(){
          document.getElementById("projects").style.transform = "translateX(0px)"; 
        }
         setTimeout(transform,100);

  </script>


  <link rel="shortcut icon" type="image/png" href="image/mainpage/logoicon/favicon.ico">

  <style type="text/css">

  .container{
    width:100%;
    font-family: Quicksand;
    font-weight:600;
  }
  .logo-text{
    font-size:25px;
  }
  .header{
    top:0px;
    position:fixed;
    letter-spacing: 5px;
    max-width:100%;
    min-height:50px;
    background-color: rgba(35,31,32,0.5);
    color:white;
  }
  .header img{
    max-width:50px;
    max-height:50px;
  }
  .header a{
    text-decoration: none; 
    color:white;
    font-size:100%;
  }
  .features{
    margin-top:13px;
    float:right;
  }
  .features ul,li{
    list-style: none;
    display: inline;
    letter-spacing: 1px;
    font-size: 10px;
  }
  .features li{
    padding:10px;
  }
  .features ul{
    padding:5px;
  }
  .features a{
    transition:0.3s;
  }
  .features a:hover{
    color:#f2a73e;
  }
  @keyframes fadein{
    from{opacity: 0};
    to{opacity: 1};
  }
  .projects{
    width:80%;
    margin-top:100px;
    opacity: 1;
    transition:1s;
    transform: translateX(-50px); 
    animation: fadein 2s;
  }
  .projects h1{
    font-family: Oswald, sans-serif;
    font-size:6vw;
    letter-spacing: 5px;
  }
  .projects hr{
    width:23%;
    border:1px solid #f2a73e;
  }
  .project a{
    font-size:100%;
    color:rgb(35,31,32);
    text-decoration: none;
    transition: 0.3s
  }
  .project a:hover{
    color:#3581fc;
  }
  .projectname hr{
    margin-top:10px;
    width:30%;
  }
  .project span{
    font-size:110%;
    color:rgb(35,31,32);
  }
  .projectname span{
    font-weight:500;
  }
  .login input{
  	border:0.5px solid grey;
  	background:none;
  	padding: 2% 0 2% 0;
  	transition:0.3s;
  }
  .login input:hover{
  	background-color:#3581fc;
  	color:white;
  	border:0.5px solid #3581fc;
  }
  .project{
    margin-top:50px;
    font-family: Roboto;
  }
  table{
    border-collapse: collapse;
  }
  td{
    padding-top:40px;
    padding-bottom:40px;
  }
  .footer{
    margin-top:50px;
    background-color: rgba(35,31,32,1);
    max-width:100%;
    min-height:50px;
    color:white;
    padding-top:50px;
    padding-bottom:50px;
    bottom:0;
    right:0;
  }
  .footer img{
    max-width: 10%;
  }
  .footer p{
    margin-top:20px;
  }
  .footer a{
    text-decoration:none;
    color:white;
    transition: 0.3s
  }
  .footer a:hover{
    color:#f2a73e;
  }
  </style>





</head>
<body>

<center>

<div class="container">

  
  <div id="projects" class="projects row">
    <h1>LOGIN</h1><hr>
    <h4>Login - Enter - Awesome</h4>
      <div class="project col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table>

        <tr><td>
        <span class="projectname col-xs-12 col-sm-12 col-md-12">
            <span class="col-xs-12 col-sm-12 col-md-6">USERNAME :<hr></span>
            <input type="text" name="username" class="col-xs-12 col-sm-12 col-md-12">
        </span>
        </td></tr>

        <tr><td>
        <span class="projectname col-xs-12 col-sm-12 col-md-12">
            <span class="col-xs-12 col-sm-12 col-md-6">PASSWORD :<hr></span>
            <input type="password" name="password" class="col-xs-12 col-sm-12 col-md-12">
        </span>
        </td></tr>
        
         <tr><td>
        <span class="login col-xs-12 col-sm-12 col-md-12">
            <input type="submit" value="LOGIN" class="col-xs-12 col-sm-12 col-md-12">
        </span>
        </td></tr>
        </table>

      </div>
  </div>

  <div class="row">
    <div class="header col-xs-12 col-sm-12 col-md-12">
      <a href="index.html" class="col-xs-12 col-sm-4 col-md-4">
      <img src="image/mainpage/header/logo-01.svg"> <span> | UNIC PROJECT</span></a>
      <div class="features col-xs-12 col-sm-6 col-md-6">
        <ul>
          <li><a href="project.html">PROJECTS</a></li>
          <li><a href="service.html">SERVICES</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </div>

<div class="row">
    <div class="footer col-xs-12 col-sm-12">
     <div class="foot col-xs-12 col-sm-12 col-md-4">
     <a href="#"><img src="image/mainpage/footer/line.svg"><h5>marioyaputra26</h5></a><br><br></div>
     <div class="foot col-xs-12 col-sm-12 col-md-4">
     <a href="#"><img src="image/mainpage/footer/email.svg"><h5>unicprojectid@gmail.com</h5></a><br><br></div>
     <div class="foot col-xs-12 col-sm-12 col-md-4">
     <a href="#"><img src="image/mainpage/footer/ig.svg"><h5>@unicprojectid</h5></a><br><br></div>
    </div>
  </div>

</div>
</center>


</body>
</html>