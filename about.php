<?php
include "init.php"; 

if(isset($_SESSION['id'])){
  include "header2.html"; 
}else{
  include "header.html" ;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

   <title>read from heart | About us </title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
</head>
<body>
<div class="container">    
<h1><br><br><p class="text-primary">About Us</p><br></h1>
<div class="text-center">   
  <div class="row">
        <div class="col-8 text-truncate">
            <div class="border">
                <div class="border-0">
                    <div class="border border-primary">
                       
                        <h2 class="text-white">Read From Heart</h2><br> 
                        <h5 class="text-white">our motive</h5>
                        <p class="text-white">    
                            Books are important for the mind, heart, and soul.
                            Books are the plane, and the train, and the road.<br>
                            They are the destination, and the journey. They are home.<br> 
                            Writing and reading decrease our sense of isolation. They deepen and widen and expand our <br> 
                            sense of life: They feed the soul. When writers make us shake our heads with the exactness<br> 
                            of their prose and their truths, and even make us laugh about ourselves or life,<br> 
                            our buoyancy is restored. We are given a shot at dancing with, or at least clapping along with,<br> 
                            the absurdity of life, instead of being squashed by it over and over again.<br> 
                            It’s like singing on a boat during a terrible storm at sea. You can’t stop the raging storm,<br> 
                            but singing can change the hearts and spirits of the people who are together on that ship.
                        </p>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

<br><br>
<h2 class="text-primary">Owners</h2><br><br>


            <!-- awais -->
<div class="text-center">
<div class="row">
    <div class="col-4 text-truncate">
        <div class="border">
            <div class="border-0">
                <div class="border border-primary">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail">
                                <img src="graphics/awais.jpeg"  style="width:150px;height=150px">
                                <div class="caption">
                                    <p class="text-light bg-dark">
                                    Muhammd Awais zahid<br>BS(CS)<br>web developer and content writer
                                    </p>
                                    <br>
                                    <ul>
                                        <li><a href="https://wa.link/69hfa4"><i class="fas fa-mobile-alt"></i> +92 30629432</a></li>
                                        <li><a href="https://twitter.com/Chaudhary_181?s=09"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://instagram.com/chaudhary_181?igshid=bqa3iecuzqpl"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


            <!-- lala -->


    <div class="col-4 text-truncate">
        <div class="border">
            <div class="border-0">
                <div class="border border-primary">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail">
                            <img src="graphics/lala.jpeg" style="width:150px;height=150px">
                                <div class="caption">
                                    <p class="text-light bg-dark">
                                    Lal Ahsan<br>BS(CS)<br>web developer and Marketing Manager
                                    </p>
                                    <br>
                                    <ul>
                                        <li><a href=" https://api.whatsapp.com/send?phone=3217946075&text=its%20pleasure"><i class="fas fa-mobile-alt"></i> +92 3217946075</a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://instagram.com/baryar_ahsan?igshid=b7wi8k80mqnl"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> 
</div> 

</div>
<?php include "cookie.php" ?>
</body>
</html>
<?php include "footer.html" ?>