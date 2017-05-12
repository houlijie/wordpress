<!DOCTYPE html>
<html>
<head>
    <title>chapter 6 quiz</title>
</head>
<body>
    <form name="quizForm">
        Question <input type="text" name="qNumber" size="1">
        <div class="question">
            
        </div>
        <div class="button">
          <input type="button" name="check answer" value="check it out" onclick="checkAnswer()">  
        </div>
        
    </form>

</body>
</html>
<script type="text/javascript">
    var quizArr = new Array();
    quizArr[0] = new Array();
    quizArr[1] = new Array();
    var answer = new Array();
    answer[0] = 2;
    answer[1] = 3;

    quizArr[0][0] = "hanna's favorate fruit is?";
    quizArr[0][1] = "banana";
    quizArr[0][2] = "orange";
    quizArr[0][3] = "apple";

    quizArr[1][0] = "hanna's's favorate star?";
    quizArr[1][1] = "adel";
    quizArr[1][2] = "willam";
    quizArr[1][3] = "jackson";

    document.write('Question <input type="text" name=questionId value="'+)

    console.log(quizArr);

    function getQuestion() {
        var quizNum = Math.floor(Math.random()*(quizArr.length));
        $('')
        var questionHtml = "<p>"+quizArr[quizNum][0] + "</p>";
        var quizLength = quizArr.length;
        for (var questionChoice = 1; i < quizLength; i++) {
            questionHtml = questionHtml + "<input type=radio name=choice"
        }

    }


    function checkAnswer() {

    }

</script>