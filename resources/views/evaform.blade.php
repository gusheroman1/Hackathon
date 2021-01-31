<!DOCTYPE html>
<html>
{{--
    $keep =0;
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "2") { $totalCorrect++; }
    if ($answer2 == "1") { $totalCorrect+=0; }
    if ($answer3 == "3") { $totalCorrect+=2; }
    if ($answer4 == "4") { $totalCorrect+=3; }
    
    $keep==$totalCorrect;
    
   
   
    
--}}
<head>
<title>VUY</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/evaform.css">
    <!-- <script src = "/public/js/evaform.js"></script> -->

</head>

<body>
    <form action="/result" method="POST">
    @csrf
    <div class="col-sm-12">
        <div class="header">
            <h1>Evaliation Form</h1>
        </div>
        <hr>
    </div>
    <div class="col-sm-1">

    </div>
    <div class="col-sm-10">
        <div class="question">
            <h4>Little interest or pleasure in doing things?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-1-answers" id="question-1-answers-1" value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"name="question-1-answers" id="question-1-answers-2"value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-1-answers" id="question-1-answers-3"value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-1-answers" id="question-1-answers-4" value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Feeling down, depressed, or hopeless?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-2-answers" id="question-2-answers-1"value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"name="question-2-answers" id="question-2-answers-2"value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-2-answers"id="question-2-answers-3" value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-2-answers"id="question-2-answers-4" value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Trouble falling or staying asleep, or sleeping too much?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-1"value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-2"value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-3"value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-3-answers" id="question-3-answers-4"value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Feeling tired or having little energy?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-4-answers" id="question-4-answers-1"value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-4-answers"id="question-4-answers-2" value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-4-answers" id="question-4-answers-3"value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-4-answers"id="question-4-answers-4" value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Poor appetite or overeating?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-5-answers" id="question-5-answers-1"value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-5-answers"id="question-5-answers-2" value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-5-answers" id="question-5-answers-3"value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-5-answers" id="question-5-answers-4"value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Feeling bad about yourself — or that you are a failure or have let yourself or your family down?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-6-answers"id="question-6-answers-1" value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-6-answers" id="question-6-answers-2"value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-6-answers"id="question-6-answers-3" value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-6-answers" id="question-6-answers-4"value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Trouble concentrating on things, such as reading the newspaper or watching television?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-7-answers" id="question-7-answers-1"value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-7-answers"id="question-7-answers-2" value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-7-answers" id="question-7-answers-3"value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-7-answers" id="question-7-answers-4"value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Nearly every day+3
                Moving or speaking so slowly that other people could have noticed? Or so fidgety or restless that you
                have been moving a lot more than usual?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-8-answers" id="question-8-answers-1"value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-8-answers" id="question-8-answers-2"value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-8-answers"id="question-8-answers-3" value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-8-answers"id="question-8-answers-4" value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Thoughts that you would be better off dead, or thoughts of hurting yourself in some way?</h4>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-9-answers"id="question-9-answers-1" value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-9-answers"id="question-9-answers-2" value="1">
                    <p>Several days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-9-answers"id="question-9-answers-3" value="2">
                    <p>More than half the days</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-9-answers"id="question-9-answers-4" value="3">
                    <p>Nearly every day</p>
                </label>
            </div>
        </div>

        <div class="question">
            <h4>Ask the patient: how difficult have these problems made it to do work, take care of things at home, or
                get along with other people?</h4>
            <p>Optional, not included in final score but may help assess global impairment</p>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-10-answers" id="question-10-answers-1"value="0">
                    <p>Not at all</p>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-10-answers" id="question-10-answers-2"value="0">
                    <p>Somewhat difficult</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-10-answers"id="question-10-answers-3" value="0">
                    <p>Very difficult</p>
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="question-10-answers"id="question-10-answers-4" value="0">
                    <p>Extremely difficult</p>
                </label>
            </div>
        </div>
        <div>
            <button type="submit" class="button-round">
                <h5>Submit</h5>
            </button>
        </div>
    </div>
    <div class="col-sm-1">

    </div>
</form>
</body>

</html>
