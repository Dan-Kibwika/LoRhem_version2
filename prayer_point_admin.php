

<html lang="en">

<head>

<meta charset = "utf-8">
<meta http_equiv = "X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>about</title>




<link rel="alternate"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<link rel="stylesheet" href="css/aboutStyle.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


</head>


<body>

<?php

$ip = gethostbyname('www.google.com');

?>
<!--header-- STARTS HERE -->
<!--==================================================================================================================================-->


<section class="header">

<a href="index.php" class="logo">Bird.</a>

<nav class="nvaBar">


<a href="index.php" >home</a>
<a href="about.php" >About</a>
<a href="package.php" >Package</a>
<a href="book.php" >Book</a>



</nav>


<div id="menu-btn" class="fas fa-bars"><img width="40%" src="pictures/icons8-menu-64.png" alt=""></div>



</section>



<!-- middle_about_us_content STARTS HERE-->

<div class="heading">

<h1>Prayer  point</h1>


</div>






<!-- ========================================================================================================================================================================== -->
<!-- //MY PHP STARTS  HERE  -->
<!-- ========================================================================================================================================================================== -->
<?php

include "config.php";







// Check if image file is a actual image or fake image




if(isset($_POST["upload"])) {




    
    
    $prayertext = $_POST['prayertext'];
   





    //  if(isset($_POST['bible_version']  null !=='    ') && isset($_POST['bible_version']  null !=='  ') && isset($_POST['bible_version']  null !=='  ')){



        $sqlinsertText = "INSERT INTO  PRAYER_REQUEST( prayertext ) VALUES ( '".$prayertext."');";
                                               
                                $q = mysqli_query($conn,$sqlinsertText );
                                echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">Amen.</p>';
                                if (!$q) die(mysqli_error($db));


    //  }

    //  else{

    //     echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">TextFiled empty can not submit.</p>';

    //  }


                                                
                                
                                            

  } 





?>



<!-- ========================================================================================================================================================================== -->
<!-- //MY PHP ENDS  HERE  -->
<!-- ========================================================================================================================================================================== -->
<html>

<head>
    <title>stuff</title>
    <meta charset = "utf-8">
    <meta http_equiv = "X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>



  


<link rel="alternate"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/style2.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


<link rel ="stylesheet" href="css/starter-template.css";>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<!-- ========================================================================================================================================================================== -->
<!-- //MY SYLESHEET STARTS  HERE  -->
<!-- ========================================================================================================================================================================== -->

<style>



@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap');



*{

    font-family: 'Poppins', sans-serif;
    margin:0;padding:0;box-sizing:border-box;
    outline:none;border:none;text-decoration:none;
    text-transform: capitalize;

}



:root{

--main-color:#2983f0;
--black:#222;
--white:#fff;
--light-black:#777;
--light-white:#fff9;
--dark-bg:rgba(0,0,0,.7);
--light-bg:#eee;
--border:1rem solid var(--black);
--box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
--text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);


}

html{


    font-size: 32.5%;
    overflow-x: hidden;

}

html::-webkit-scrollbar{
width :1rem;
}

html::-webkit-scrollbar-track{
  background-color: var(--main-color);

}




















/* ===================================================================================================================== */
/* HEADER- STARTS HERE */
/* ===================================================================================================================== */


section{

padding: 5rem 5%;

}



@keyframes fadeIn {

0%{

transform: scale(0);
opacity:0 ;

}

}





body{
    /* background: url(pictures/Sand-Desert.jpg); */
    background: var(--white);
   
}

.staffMember{
 width : 100%;

     background: #24a0ff;
     padding : 10rem 4rem;
     border   : solid #ffffff 1px;

}
.staffMember  form {

    font-size: 3.5rem;



}

.staffMember  form #submit{

 padding: 10px 10px 10px 10px;
 font-size:18px;



}

h3 {

font-size : 20px;


}

textarea{

width:50%;
height:30%;


}

label {

    width:50px;
    height:30px;

}
.textInput{


    width:25%;
    height:30px;


}



.row{

background-color: #fff;
position: absolute;
width : 90%;
margin-left: 5%;

}

.row .col-md-12 {
  padding:5%;
  text-align: center;
 
}

.table_header{

    color : var(--white);
    background-color:#5da4e7 ;
 


}



.table{


margin:1%;
padding:10px;
background: #cfe0ef;
border : solid 1px #e7eff7 ;
width:100%;
text-align:center;


}



</style>

<!-- ========================================================================================================================================================================== -->
<!-- //MY SYLESHEET ENDS  HERE  -->
<!-- ========================================================================================================================================================================== -->

</head>

<body>
    


<?php


if(isset($_SESSION['message'])){

    echo $_SESSION['message'];
    unset($_SESSION['message']);

}


?>



<section class="headersec">




<center>
<div class="staffMember" >
            <form action="" method = "post" enctype = "multipart/form-data">
                
                <label for="" style = "color:white; " > Enter your prayer </label> <br><br>   <textarea name="prayertext" id="" cols="50" rows="50"></textarea><br><br>
                
            <input type="submit" name = "upload" id="submit">
            </form>
</div>
</center>

</section>



<div class = "container mt-5">

            <div class="row">

                    <div class="col-md-12">

                            <div class="card">

                           

                                <div class="card-header">



                                <?php

                               

                                  $querySelect = "select* from stuff order by id ASC ;";
                                  $query_run = mysqli_query($conn, $querySelect);

                                ?>

                                            <table class="table">


                                         
                                          
                                            <tr class="table_header" >
                                                <th> ID</th>
                                                <th> Prayer point </th>
                                                
                                               
                                                <th> EDIT</th>
                                                <th> REMOVE</th>
                                            </tr>

                                        
                                            <?php

                                                        $querySelect = " SELECT* FROM  PRAYER_REQUEST ORDER BY ID DESC; ;";
                                                        $query_run = mysqli_query($conn, $querySelect);

                                                        if(mysqli_num_rows($query_run) >0){

                                                            foreach( $query_run as $row ){

                                                                
                                                               ?>
                                                               

                                                                <tr class="table_headerInSql">
                                                                    <td> <?php  echo $row['id'] ?> </td>
                                                                    <td> <?php  echo $row['prayertext'] ?> </td>
                                                                   

                                                                   
                                                                    <td> <a  class="editButton" href="">Edit</a> </td>
                                                                    <td> <a  class="editButton" href="">Delete</a>  </td>

                                                                 </tr>
                                                                 <tr class="break">
                                                                         <td  style = " background-color:#f6f6f6; font-size : 18px; padding:3%;">   </td>
                                                            </tr>


                                                               <?php

                                                            }


                                                        }
                                                        else{


                                                            ?>

                                                                 <tr>
                                                                    <td>No record to display </td>
                                                                 </tr>
                                                            <?php

                                                                

                                                        }

                                            ?>
                                            <tr>
                                                

                                            </tr>
                                            </table>
                                


                                </div>

                            
                            
                            </div>
                    </div>

            </div>
            </br>  </br>  </br>




</div>

 






<!-- 
==================================================================================================================== -->
<!-- 
//DISPLAYING MY DATA FROM THE BACKEND TO THE STUFF-ADMIN INTERFACE  -->
<!-- 
==================================================================================================================== -->


 













<!-- middle_about_us_content ENDS HERE -->









<!--custom swipper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!--custom js file-->
    <script src="js/myScript.js"></script>






<!--header-- ENDS HERE -->
<!--==================================================================================================================================-->










<!--FOOTER-- START-->
<!--==================================================================================================================================-->



<section  class="footer">

<div class="box-container">

        <div class="box">

        <h3>Quick links </h3>

        <a href="index.php" > <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php" > <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php" > <i class="fas fa-angle-right"></i> Package</a>
        <a href="book.php" > <i class="fas fa-angle-right"></i> Book</a>

        
        </div>



        <div class="box">

        <h3>Extra links </h3>

        <a href="index.php" > <i class="fas fa-angle-right"></i> Ask question</a>
        <a href="about.php" > <i class="fas fa-angle-right"></i> About us</a>
         <a href="package.php" > <i class="fas fa-angle-right"></i> Privacy policies</a>
        <a href="book.php" > <i class="fas fa-angle-right"></i> Terms of use </a>

        
        </div>




        <div class="box">

        <h3>Contact info</h3>

        <a href="#" > <i class="fas fa-phone"></i> +264-81-64-86-416</a>
        <a href="#" > <i class="fas fa-phone"></i> +264-85-34-06-853</a>
        <a href="#" > <i class="fas fa-envelope"></i> dankibwika820@gmail.com</a>
        <a href="#" > <i class="fas fa-map"></i> Namibia, Windheok, Dorado Park - 3045</a>
        </div>


        <div class="box">


           <h3>Follow Us </h3>
           <a href="#"><i class="fab fa-facebook "></i>facebook </a>
           <a href="#"><i class="fab fa-twitter"></i>twitter </a>
           <a href="#"><i class="fab fa-instagram "></i>instagram </a>
           <a href="#"><i class="fab fa-linkedin"></i>linkedin </a>
         



        </div>


</div>


</bn>
<br><br><br>
<center><div class="credit"> created by <span>Dan Kibwika</span> | all rights reserverd!</div></center>

</section>

</body>

</html>