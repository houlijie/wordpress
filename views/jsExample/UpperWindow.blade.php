<!DOCTYPE html>
<html>
<head>
</head>
<body onload="window_onload()">
    <p> Upper frame</p>
</body>
<script type="text/javascript">
    function window_onload() {
        document.write("the name of this upper frame is " + window.name + "<br>");
        document.write("the location of upper frame parents is " +  window.parent.location.href + "<br>");
        window.parent.parent.parentFun();
    }


</script>
</html>