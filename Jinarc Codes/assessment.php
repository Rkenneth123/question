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


</section>
<button type="submit"  class="" name="submit">Submit</button>

<div class="submit_btn">

<button type="submit" class="submit_assess" name="submit" onclick="goToHome()" >Submit</button>
</div>

</form>


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
                    <button type="button" class="retake" name="submits">Submit</button>
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
<script>
    

const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
//not input yet
const answersIndicatorContainer = document.querySelector(".answers-indicator");
//not input yet
const homeBox = document.querySelector(".home-box");
//not input yet
const quizBox = document.querySelector(".quiz-box");
//not input yet
const resultBox = document.querySelector(".result-box");
const passedBox = document.querySelector(".passed-box");
const assessContainer = document.querySelector(".assess-container");
// canva signature
const canvas = document.querySelector('canvas');
const form = document.querySelector('.signature-pad-form');
const clearButton = document.querySelector('.clear-button');
const ctx = canvas.getContext("2d");
let writingMode = false;

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const imageURL = canvas.toDataURL();
    const image = document.createElement('img');
    image.src = imageURL;
    image.height = canvas.height;
    image.width = canvas.width;
    image.style.display = 'block';
    form.appendChild(image);
    clearPad();
})

const clearPad = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

clearButton.addEventListener('click', (event) => {
    event.preventDefault();
    clearPad();
})

const getTargePosition = (event) => {
    positionX = event.clientX - event.target.getBoundingClientRect().x;
    positionY = event.clientY - event.target.getBoundingClientRect().y;

    return [positionX, positionY];
}

const handlePointerMove = (event) => {
    if (!writingMode) return

    const [positionX, positionY] = getTargePosition(event);
    ctx.lineTo(positionX, positionY);
    ctx.stroke();
}

const handlePointerUp = () => {
    writingMode = false;
}

const handlePointerDown = (event) => {
    writingMode = true;
    ctx.beginPath();

    const [positionX, positionY] = getTargePosition(event);
    ctx.moveTo(positionX, positionY);
}

ctx.lineWidth = 3;
ctx.lineJoin = ctx.lineCap = 'round';

canvas.addEventListener('pointerdown', handlePointerDown, { passive: true })
canvas.addEventListener('pointerup', handlePointerUp, { passive: true })
canvas.addEventListener('pointermove', handlePointerMove, { passive: true })

// end of canvas signature

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;
//let attempt = 0;


//push the questions into available Array
function setAvailableQuestions() {
    const totalQuestion = quiz.length;
    for (let i = 0; i < totalQuestion; i++) {
        availableQuestions.push(quiz[i])
    }
}


// set question number, question and options
function getNewQuestion() {
    // set question number
    questionNumber.innerHTML = "Question<br>" + (questionCounter + 1); // changes

    // set question text
    // get random question
    const questionIndex = availableQuestions[0];
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;
    // get the position of 'questionIndex' from the availableQuestion Array
    const index1 = availableQuestions.indexOf(questionIndex);
    // remove the 'questionIndex' from the availableQuestion Array, so that the question does not repeat
    availableQuestions.splice(index1, 1);
    // set options
    // get the length of options
    const optionLen = currentQuestion.options.length
    // push options into availableOptions Array
    for (let i = 0; i < optionLen; i++) {
        availableOptions.push(i)
    }


    optionContainer.innerHTML = '';
    let animationDelay = 0.15;
    // create options in html
    for (let i = 0; i < optionLen; i++) {
        // random option
        const optionIndex = availableOptions[0];

        // get the position of 'optionIndex' from the availableOptions
        const index2 = availableOptions.indexOf(optionIndex);

        // remove the 'optionIndex' from the AvailableOptions, so that the option does not reappear
        availableOptions.splice(index2, 1);
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id = optionIndex;
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.15;
        option.className = "option";
        optionContainer.appendChild(option);
        option.setAttribute("onclick", "getResult(this)");

    }

    questionCounter++;
}
// get result of current attempt question
function getResult(element) {
    console.log(element);
    let id;
    id = parseInt(element.id);
    // get the answer by comparing the id of clicked option
    if (id === currentQuestion.answer) {
        // set the green color to the correct option
        element.classList.add("correct");
        //add the indicator to correct mark pending
        updateAnswerIndicator("correct");
        correctAnswers++;
        console.log("correct:" + correctAnswers)
    }
    else {
        // set the red color to the correct option
        element.classList.add("wrong");
        //add the indicator to wrong mark pending
        updateAnswerIndicator("wrong");

        //if the answer is incorrect it will show the correct option
        const optionLen = optionContainer.children.length;
        /* for(let i=0; i<optionLen; i++){
            if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){
                optionContainer.children[i].classList.add("correct");
            }
        }*/
    }
    //attempt++;
    unclickableOptions();
}

// make all the options unclickable once the user select a option
//(Restrict the user to change the option again)
function unclickableOptions() {
    const optionLen = optionContainer.children.length;
    for (let i = 0; i < optionLen; i++) {
        optionContainer.children[i].classList.add("already-answered");
    }
}

function clickReset() {
    const optionLen = optionContainer.children.length;
    for (let i = 0; i < optionLen; i++) {
        optionContainer.children[i].classList.remove("already-answered");

        if (optionContainer.children[i].classList.contains("correct")) {
            correctAnswers = correctAnswers - 1
        }
        optionContainer.children[i].classList.remove("correct");
        optionContainer.children[i].classList.remove("wrong");
    }
}
//pending
function answersIndicator() {
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = quiz.length;
    for (let i = 0; i < totalQuestion; i++) {
        const indicator = document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);

    }
}
function updateAnswerIndicator(markType) {
    answersIndicatorContainer.children[questionCounter - 1].classList.add(markType)

}

function next() {
    if (questionCounter === quiz.length) {
        console.log("quiz over");
        quizOver();
    }
    else {
        getNewQuestion();
    }
}

function quizOver() {
    //hide quiz box
    quizBox.classList.add("hide");

    if (correctAnswers === quiz.length) {
        passedBox.classList.remove("hide");
    }
    else {
        //show result box
        resultBox.classList.remove("hide");
    }
    quizResult();
    document.getElementById('nvbr').hidden = false;
}

//get the quiz result
function quizResult() {
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
}

function resetQuiz() {
    questionCounter = 0;
    correctAnswers = 0;
}

function goToHome() {
    //go to home button after submit was clicked
    assessContainer.classList.add("hide");
    homeBox.classList.remove("hide");
}


function tryAgainQuiz() {
    // when retake clicked
    resultBox.classList.add("hide");
    // will go back to quiz
    quizBox.classList.remove("hide");
    resetQuiz();
    startQuiz();

}

// ----- Starting Point -----
function startQuiz() {
    //hide home box
    homeBox.classList.add("hide");
    //show quiz box
    quizBox.classList.remove("hide");
    //first we will set all questions in availableQuestions Array
    setAvailableQuestions();
    //second we will call getNewQuestion(); function
    getNewQuestion();
    //to create indicator of answers (pending)
    document.getElementById("nvbr").hidden = true;

}

</script>
</body>
</html>
