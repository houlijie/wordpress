<!DOCTYPE html>
<html>
<head>
    <title>form example</title>
</head>
<body language=JavaScript type="text/javascript" onload="window_onload()">
<form name="form1">
    <p>this is form1</p>
    <input type="button" name="exampleBtn" value="i am a example btn" onclick="exampleBtn_getClickNum()" onmousedown="exampleBtn_onmousedown()" onmouseover="exampleBtn_onmouseover()" onmouseup="exampleBtn_onmouseup()">
    <input type="text" name="userName">
    <input type="textarea" name="userProfile">

    <input type="submit" value="submit" name="submit">
    <input type="reset" name="reset" value="reset">
</form>
<form name="form2">
    <p>this is form2</p>
</form>
<form name="form3">
    <p>this is form3</p>
</form>

</body>
<script type="text/javascript">
    function window_onload() {
        var numberForms = document.forms.length;
        for(var formIndex=0; formIndex < numberForms; formIndex++){
            // alert(document.forms[formIndex].name);
        }
        // body...
    }

    var countClick=0;
    function exampleBtn_getClickNum(){
        countClick++;
        // document.form1.exampleBtn.value = 'i\'ve been clicked ' + countClick + ' times';
    }
    function exampleBtn_onmousedown()
    {
        document.form1.exampleBtn.value = "do not touch me!";
    }
    function exampleBtn_onmouseover()
    {
        document.form1.exampleBtn.value = "hi nice to meet you";
    }
    function exampleBtn_onmouseup()
    {
        document.form1.exampleBtn.value = "thank you!";
    }

</script>
</html>