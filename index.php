<!DOCTYPE html>
<html lang="en">

<html>


    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sih.css">
        <script src="sih.js"></script>
        <title>Crime Report</title>
        <link rel="icon" type="image/x-icon" href="secFav.jpg">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-1ef32eba-94f2-42dd-a1f4-fb3ead55405c"></div>

        <script>

        $( document ).ready(function() {


            var textarea=$("#desc");

            textarea.selectionEnd = textarea.selectionEnd + 7;

        // alert( "ready!" );

        $("#aadhar").keyup(function(){
        //   alert("ok");
        $(this).css('border','');
      

  console.log ($(this).length);

  var regexp=/^[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}$/;
         
           var x=$(this).val;
          if($(this).val().length==12)
              {
                  console.log("success");
                 // window.alert("Valid Aadhar no.");
                 $(this).css('border','1px solid green');
                $("#submit").removeAttr('disabled'); 
              }
       else{  
       $(this).css('border','1px solid red'); $("#submit").attr('disabled', 'disabled');
             }
});

$("#aadhar").on('change',function(){
    var aadhar=$(this).val();
    $.ajax({
               url: 'aadhar_check.php',
               data: {aadhar: aadhar},
                method: "POST",
              dataType: "json",          
               beforeSend: function () {                
               },
               success: function (response) {            
                if(response=='0'){
                    $('.error').html('Aadhar invalid');
                   // setTimeout( $(".error").html('');, 3000);

                    $("#submit").attr('disabled', 'disabled');
                }else{
                   $('.error').html('');
                    $("#submit").removeAttr('disabled'); 
                }      
               },
               complete: function () {            
               }
           });

})
});

        </script>
       <!-- <img src="maxresdefault.jpg" alt="CYBER CRIME" width="100px" height="100">-->
        <h1 
        style=
        "font-family: 'Times New Roman', Times, serif; 
        font-size: 30px; 
        font-weight:bold;
        text-align:center;
        color: black;"
        >CRIME REPORTING PORTAL</h1>


<br><br>
    


        <div style="text-align: center;"> 
        <h4>MINISTRY OF HOME AFFAIRS<br>GOVERNMENT OF INDIA</h4>
        </div>

        <marquee>
        <div class="separator" style="clear: both; text-align: center;">
        <br /></div>
        <br /><span style="color: red; font-size: 25px;">
        <b>In case of Cyber Financial Fraud, 
        For immediate reporting ,Call 1930 (Earlier 155260).(24*7) 
        For more details, 
        see Citizen Manual under “Resources Section”</b>
        </span>
        </marquee>
        <div><marquee><br /></marquee></div>

        <!--<div class="w3-content w3-section" style="max-width:500px">
        <img class="mySlides w3-animate-fading" src="" style="width:100%">
        <img class="mySlides w3-animate-fading" src="R.gif" style="width:100%">
        <img class="mySlides w3-animate-fading" src="R.gif" style="width:100%">
        <img class="mySlides w3-animate-fading" src="R.gif" style="width:100%">
        </div>-->

        <script>
                    var myIndex = 0;
                    carousel();
                    
                    function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) { x[i].style.display="none" ; } 
                    myIndex++; 
                    if (myIndex> x.length) {myIndex = 1}
                    x[myIndex-1].style.display = "block";
                    setTimeout(carousel, 5000);
                    }

        </script>

        <style>
            head,body {
                font-family:'calibri', 'arial', 'helvetica';
                background-image:url('gray-abstract-wireframe-technology-background_53876-101941.jpg'); 
                background-repeat:no-repeat; 
                background-attachment: fixed; 
                background-size: cover;
            }
        </style>



        






    </head>


    <body>

        <br><br><br>

<!--
        <div class="section">

            <h1>Hi I am Aakash</h1>

            <div class="video-container">
                <div class="color-overlay"></div>
                <video autoplay loop muted>
                    <source src="1.mp4" type="video/mp4">
                </video>
            </div>

        </div>

                -->

        <br><br>

<!--
        <div lang="fr-CA" xml:lang="fr-CA">
Canadian French content...
</div>
<div lang="en-CA" xml:lang="en-CA">
Canadian English content...
</div>
<div lang="nl-NL" xml:lang="nl-NL">
Netherlands, Dutch content...
</div>
                -->



    <div>
        <div>
        <ul class="nav__links">
        <nav class="menu-bar">
            <a href="#" class="active">Home</a>
            <a href="#">About US</a>
            <a href="#">Contact us</a>
            <a href="#">Services</a>
            <a href="#">Helpline</a>
      
            <div class="menu-bg"></div>
          </nav>
        </nav>
        </div>
    </div>
        
        <br><br><br>

        <section style="text-align:center; color:rgb(20, 0, 0); font-size: 20px;">
            <h1><b>Raising a Complaint Anonymously</b></h1>

        </section>

        <script>

            const menuItems = document.querySelectorAll("nav.menu-bar a");
            const menuBg = document.querySelector("nav.menu-bar .menu-bg");

            menuItems.forEach((i) => {
                i.addEventListener("mouseover", () => {
                    let element = i.getBoundingClientRect();

                    menuBg.style.left = element.x + "px";
                    menuBg.style.top = element.y + "px";
                    menuBg.style.width = element.width + "px";
                    menuBg.style.height = element.height + "px";

                    i.style.color = "#fff";
                    menuBg.style.opacity = 1;
                });

                i.addEventListener("mouseout", () => {
                    i.style.color = "#000";
                    menuBg.style.opacity = 0;
                });
            });

        </script>

 
        <br><br><br>
        <div class="container">


        <form 
            name="myForm" 
            action="" 
            onsubmit="return validateForm()" 
            autocomplete="off"
            method="post" required
            id="contactForm"
            enctype="multipart/form-data">


            <table 
                border="0"   
                cellspacing="20" 
                align="center" 
                style="width: 400px; height:100px; padding: 20px;">
                <tr>
                    <td>
                        <div class="inputbox">
                        <input 
                            type="text" 
                            id="aadhar" 
                            name="aadhar" class=""
                            placeholder=" Enter Your Aadhar No"
                            style="width:400px; padding: 10px;" 
                            maxlength="12"
                            required
                        ><p class="error"></p></div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="inputbox">
                        <input 
                            type=text 
                            name="location"
                            list=location 
                            placeholder="-Choose Location-"
                            style="width:400px; padding: 10px;" required 
                        ></div>
                        <datalist id=location>
                            <option> Madurai
                            <option> Kanniya KanniyaKumari
                            <option> Chennai
                        </datalist>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="inputbox">
                        <input 
                            type=text 
                            name="category"
                            list=category
                            placeholder="-Choose Category-"
                            style="width:400px; padding: 10px;" required
                        ></div>
                        <datalist id=category>
                            <option>Chain Snatch
                            <option>Murder
                            <option>Rape
                        </datalist>    
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="inputbox">
                        <p><label  class="pylones-label">YOUR MESSAGE<br />
                        <span class="wpcf7-form-control-wrap your-message">
                        <textarea 
                            id="desc"
                            name="description" 
                            cols="40" 
                            rows="5" 
                            class="wpcf7-form-control wpcf7-textarea pylones-input" 
                            aria-invalid="false" 
                            placeholder="YOUR MESSAGE"
                            style="height:200px; width:400px; text-align: left;"
                            required>
                        </textarea>
                        </span> </label></p>
                    
                        <!--<textarea 
                        id="desc" 
                        name="desc" 
                        col="10"
                        rows="10"
                        placeholder="Detailed Description about the Incident"
                        style="width:400px;">
                        </textarea></div>-->
                    </td>
                </tr>

                 <tr>
                    <td>
                        <div class="inputbox">
                        <input 
                        type="file" 
                        id="myFile" 
                        name="fileToUpload"
                        style="width:400px; padding: 10px; color: rgb(238, 11, 11); text-align: left;"
                        ></div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input 
                            type="submit" 
                            value="Submit"
                            name="submit" id="submit"
                            style="color: white; font-size:2px solid; width:150px; padding: 10px; background-color:rgb(245, 18, 2);"
                        >
                    </td>
                </tr>

               

            </table>
        </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>



        <!--Slide bar Image -->
        <!-- Container for the image gallery -->


  <!-- Next and previous buttons -->


  <!-- Image text -->

</div>

<style>
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(150, 8, 36);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>



        <!--<video autoplay muted loop id="myVideo">
            <source src="1.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
        </video>-->

        <br><br>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


        <style>
            #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
        </style>
            
        <script>
            //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
        </script>



        
        </div>


    </body>
</html>














<?php
include 'db.php';
//error_reporting(0);
if(isset($_POST['submit'])){
   $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//echo $imageFileType;

  /*$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 if($check !== false) {
  // echo "File is an image - " . $check["mime"] . ".";
   $uploadOk = 1;
 } else {
 //  echo "File is not an image.";
   $uploadOk = 0;
 }
*/

 // Check if file already exists
/*if (file_exists($target_file)) {
 echo "Sorry, file already exists.";
 $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
 echo "Sorry, your file is too large.";
 $uploadOk = 0;
}*/

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 $uploadOk = 0;
}
*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
 } else {
   //echo "Sorry, there was an error uploading your file.";
 } 
}

$aadhar = $_POST['aadhar'];
   $fileToUpload = $_FILES["fileToUpload"]["name"];
   $category=$_POST['category'];
   $location = $_POST['location'];
   $description = trim($_POST['description']);


//echo "<pre>"; print_r($_POST);

$sql = "INSERT INTO `details1`(`aadhar_no`, `loc`, `cat`, `descrip`, `file`) 
VALUES ('$aadhar','$location','$category','$description','$fileToUpload')";

//echo $sql;
   // use exec() because no results are returned
$test= $DB_con->exec($sql);
    //$test=$link→query($sql);
    //echo $test;





    /*$sqlsel = "SELECT * FROM `detail`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " -Aadher Number: " . $row["aadhar_no"]. " -Location: " . $row["loc"]. " -Category: ". $row["cat"]. " -Description: ". $row["descrip"]. " -File: ". $row["file"]. "<br>";
        }
    } else {
    echo "0 results";
    }
    $conn->close();
*/

    $file=fopen("details.txt","w");
    //echo "hi hello";
    fwrite($file, $aadhar ."\n");
    fwrite($file, $location ."\n");
    fwrite($file, $category ."\n");
    fwrite($file, $description ."\n");
    fwrite($file, $fileToUpload ."\n");
    fclose($file);


    shell_exec("python3 login.py");


    $command = escapeshellcmd('python3 login.py');
    $output = shell_exec($command);
    echo $output;


    



}
?>
