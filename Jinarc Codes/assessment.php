<?php 
//Databse Connection file
include('connection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values

    $name=$_POST['name'];
    $hos_affi=$_POST['hos_affi'];
    $specialty=$_POST['specialty'];
    $email=$_POST['email'];
	$prc=$_POST['prc'];


  
// Query for data insertion
$query=mysqli_query($con, "INSERT INTO `account`(`name`, `hospital_affliiation`, `specialty`, `email`, `prc`) VALUES (' $name','$hos_affi',' $specialty',' $email','$prc')");

if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='assessment.php '; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assessment_style.css">
    <title>Document</title>
</head>
<body>
    <div class="assessment">

        <header class="nav_header">
            <div class="jinarc_logo">
            <img src="image/Jinarc web logo_blue.png">
            </div>

            <nav id="nvbr">
                <ul>
                    <li><a disabled href="index.html">home</a></li>
                    <li><a href="prescriber.html">prescriber</a></li>
                    <li class="active"><a href="patient.html">patient</a></li>
                    <li><a href="resources.html">resources</a></li>
                </ul>
            </nav>

        </header>

        <p class="assess_title">Prescriber Knowledge Assessment</p>

        <section class="assess-container custom-box">
         <!-- <form class="input-data" action="connection.php" method="post" autocomplete="off">  -->

         <form class="input-data"  method="POST" autocomplete="off">  

         <div class="form_name">
                <input type="text" name="name" class="input_name"
                autocomplete="off" placeholder=" " >
                <label for="name" class="label_name">Name</label>
            </div>
           <div class="form_affi">
                <input type="text" name="hos_affi" class="inputhos_affi"
                autocomplete="off" placeholder=" " >
                <label for="hos_affi" class="label_hos">Hospital Affiliation</label>
            </div>

            <div class="form_specialty">
                <input type="text" name="specialty" class="input_specialty"
                autocomplete="off" placeholder=" " >
                <label for="specialty" class="label_specialty">Specialty
                </label>
            </div>

            <div class="form_email">
                <input type="text" name="email" class="input_email"
                autocomplete="off" placeholder=" " >
                <label for="email" class="label_email">Email</label>
            </div>

            <div class="form_prc">
                <input type="text" name="prc" class="input_prc"
                autocomplete="off" placeholder=" " >
                <label for="prc" class="label_prc">PRC License</label>
            </div>

<button type="submit"  class="" name="submit">Submit</button>

 </form>
<div class="submit_btn">

<button type="submit" class="submit_assess"  onclick="goToHome()" >Submit</button>
</div>

</section>


        <!--Start Assessment-->
        <div class="home-box custom-box hide">
            <p>In order for you to become a certified prescriber of
            Jinarc, you need to successfully complete the Prescriber
            Knowledge Assessment and correctly answer all 8 questions.
            </p>

            <section class="start_btn">
                <button type="button" class="start_assess" onclick="startQuiz()">Start the Assessment</button>
            </section>
        </div>

        <!--Assessment-->

            <div class="quiz-box custom-box hide">

                <div class="question-number">

                </div>

               <div class="question-text">

                </div>

                <div class="option-container">
                    .sss
                </div>

                <section class="res-nxt">

                <div class="reset-btn">
                    <button type="button" class="res-btn" onclick="clickReset()">Reset</button>
                </div>
                <div class="next-question-btn" onclick="next()">
                    <button type="button" class="nxt-btn">Next</button>
                </div>

                </section>
            </div>

        <!--Assessment-->

        <!--Assessment Result-->
            <div class="result-box custom-box hide">

                <section>
                <p>Your <b>Prescriber Knowledge Assessment</b> score
                    is</p>
                    <div class="correct-answer">
                        <p class="total-correct"></p>
                        <p>out of 8</p>
                        <p class="assess-result">Your assessment result</p>
                    </div>
                </section>

                <section class="answers-indicator">
                   <div>1</div>
                   <div>2</div>
                   <div>3</div>
                   <div>4</div>
                   <div>5</div>
                   <div>6</div>
                   <div>7</div>
                   <div>8</div>
                </section>


                <section class="failed-buttons">
                    <button type="button" class="retake" onclick="tryAgainQuiz()">RETAKE</button>
                    <a href="DOWNLOADABLES/Jinarc Prescribing Information_F.pdf"><button type="button" class="preview-info">review prescribing information</button></a>
                    <a href="DOWNLOADABLES/JINARC_RMP_Prescriber Guide.docx"><button type="button" class="preview-guide">review prescriber guide</button></a>
                </section>

            </div>

        <!--Assessment Passed Result-->
            <div class="passed-box custom-box hide">

                <section class="greetings">
                    <div class="certified-img">
                        <img src="image/Certified stamp.png">
                    </div>

                    <div class="congratulations-container">
                        <div class="confetti-gif">
                            <img src="image/CONFETTI.gif">
                        </div>
                    <p class="congratulations">CONGRATULATIONS!</p>
                    <p class="certified-prescriber">You are now a
                        certified Jinarc® prescriber.</p>
                    </div>
                </section>

                <section class="signature">
                    <form class="signature-pad-form" action="#" method="post">
                    <!-- <canvas height="50" width="267.8" class="signature-pad">
                    </canvas>
                    <div class="signature-button">
                        <p class="sign">PLEASE SIGN HERE TO COMPLETE THE ASSESSMENT</p>
                        <button type="reset" class="clear-button">Reset</button>

                        <button type="submit" class="submit-button">Done</button>
                    </div> -->
                    <!-- <p class="sign">PLEASE SIGN HERE TO COMPLETE THE ASSESSMENT</p> -->
                    <h1>Important</h1>
                    <p>Sign here to completed the assessment</p>
                    <canvas height="100" width="300" class="signature-pad"></canvas>
                    <p>
                    <a href="#" class="clear-button">Clear</a>
                    </p>
                    <button type="submit" class="submit-button">SUBMIT</button>
                </form>

                </section>
            </div>
        <!--Assessment Passed Result-->


<script src="question.js"></script>
<script src="app.js"></script>
</body>
</html>
