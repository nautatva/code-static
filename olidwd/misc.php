<!DOCTYPE html>
<html lang="en-US">
   <head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="https://gymkhana.iitb.ac.in/~nss/assets/images/147455559147662-1-128x128-55.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Miscellaneous Videos</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="https://gymkhana.iitb.ac.in/~nss/olidwd/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="https://gymkhana.iitb.ac.in/~nss/olidwd/owl-carousel/owl.theme.css">

    <!-- CUSTOM STYLE -->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/validation.js"></script> 
    <style type="text/css">
      #tags ul li {
        display: inline;
      }
    </style>
    
<script> 
$(function(){
  $("#header").load("header.html"); 
  
});
</script> 
 </head> 
  <body>
  
   <!-- HEADER -->
    <div id="header"></div>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
        <section class=" background-white"> 
    
         
    <div class="item">
              <div class="margin"> 
              <div class="text-center text-size-30"> Miscellaneous Playlist </div>
              <div class ="text-center  text-size-24">
             <?php   

              echo' 
              <a class="s-12 m-12 l-12" target="_blank" href="'.'https://bit.ly/2pTFgxT'.'"><i class="icon-download  iconx"></i>
              Download Miscellaneous Videos. </a>
            ';
           
            echo '<br><br>';
        
            


?>
              
          
               
              </div>
</div>
<br><br>
          
        <?php

            include('../../dbconfig.php');
            // if(is_set["page"])
            $conn= mysqli_connect($host, $username, $password, $db);
            if(!isset($_GET["page"])){
              
              $sql = "SELECT * FROM OLI WHERE CLASS='Misc'";
              //echo $sql;
              $result = mysqli_query($conn, $sql);

            
            $rowcount=mysqli_num_rows($result);
            $page = 0;
            }
            else{
            $page = $_GET["page"];
            $rowcount = $_GET["t"];
            }
            $offset = $page * 6;
             
            $sql = "SELECT * FROM OLI WHERE CLASS='Misc' LIMIT $offset, 6";
            //echo $sql;
            $result = mysqli_query($conn, $sql);
           
            while ($row = mysqli_fetch_assoc($result)) {  

                $queryString = parse_url($row['YTUBE'], PHP_URL_QUERY);
                parse_str($queryString, $params);
                echo '
                <div class="item">
                <div class="margin"> 
                <div class="s-12 m-12 l-12">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                    <div class="s-12 m-12 l-2 margin-m-bottom"><p>&nbsp</p></div>
                      <div class="s-12 m-12 l-2 margin-m-bottom">
                        <a class="image-hover-zoom" href=video.php?id='.$row["ID"].'><img src="https://img.youtube.com/vi/'.$params["v"].'/mqdefault.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-6 margin-m-bottom">
                        <a class="text-dark text-primary-hover" href=video.php?id='.$row["ID"].'><h3>'.$row['TITLE'].'</h3>
                        <p>'.substr($row['DES'],0,190).'...'.'</p>
                        <p> '.'Miscellaneous'.', '.$row['SUB'].', '.$row['LANG'].'</p></a>
                    
                       <a class =" text-primary-hover" target="_blank" href='.$row['DLINK'].'><i class="icon-download background-white iconx"></i>
                 &nbsp &nbsp Download The Video. </a>
                      </div>
                      <div class="s-12 m-12 l-2 margin-m-bottom"><p>&nbsp</p></div>
                    </div>  
                  </div>
                </div>
              
            <p class="text-size-12">&nbsp<br><br></p></div>
            </div>
              ';
            }
            echo '
            
                        <div class="item">
                        
                        <div class="s-12 m-12 l-6 ">
                         <div class=" margin-top-30 margin-bottom-0  text-center">
                         ';
                         if($page!=0)
                         echo '<a href="misc.php?page='.($page - 1).'&t='.$rowcount.'"><button class="button background-primary border-radius text-white text-strong">< Previous Page </button></a>';
                       echo'
                     </div>
                     </div>
                     <div class="s-12 m-12 l-6 ">
                         <div class=" margin-top-30 margin-bottom-0  text-center">
                         ';
                         if($page!=floor($rowcount/6 ))
                         echo '<a href="misc.php?page='.($page + 1).'&t='.$rowcount.'"><button class="button background-primary border-radius text-white text-strong"> Next Page > </button></a>';
                       echo'
                     </div>
                     </div>
                       </div>
             '; 
         ?>
                

             
                
      </section>
     
    
      
     <section class="section background-white"><div class="s-12 m-12 l-12"></br><center><h3>To learn more about what <b>NSS, IIT Bombay</b> does, click <a href="https://gymkhana.iitb.ac.in/~nss"><b>here</b></a></h3></center></div> <!-- Section 1 --></section>
    <section>
    	

    </section>
    <!-- FOOTER -->
    <footer> </center><section class="padding background-dark">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2018, NSS IIT Bombay</p>
            
          </div>
          
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/responsee.js"></script>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/template-scripts.js"></script>   
    
   </body>
   <link
 href="https://fonts.googleapis.com/css?family=Montserrat"
 rel="stylesheet"
/>
<style>
 body{
   font-family: 'Montserrat', sans-serif;
 }
</style>
   </html>