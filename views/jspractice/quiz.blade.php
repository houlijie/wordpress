<!DOCTYPE html>
<html>
<head>
    <title>little quiz</title>
</head>
<body>

</body>
<script type="text/javascript">
    function answerCorrect(questionNum, answer)
    {
        var correct = false;
        if(answer == answers(questionNum))
            correct = true;

        return correct;
    }

    var questions = new Array();
    var answers = new Array();
    questions[0] = new Array();
    questions[0][0] = "the beatles were";
    questions[0][1] = "a car";
    questions[0][2] = "a band";
    answers[0] = "B";
    questions[1] = new Array();
    questions[1][0] = "what's your favorate food?"
    questions[1][1] = "apple";
    questions[1][2] = "banana";
    answers[1] = "A";
    var index = 0;
    for(index in questions)
    {
        var questionIndex = 1;
        document.write("question " + index + ':'+ questions[index][0]);
        for(questionIndex in questions[index])
        {
            if(questionIndex != 0)
            document.write("A"+ questionIndex + " :" + questions[index][questionIndex]);
            document.write("<br>");
        }
    }
</script>
</html>