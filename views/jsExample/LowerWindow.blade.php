<!DOCTYPE html>
<html>
<head>
</head>
<body onload="window_onload()">
    <p> Lower frame</p>
</body>
<script type="text/javascript">
    function window_onload() {
        document.write("the name of this Lower frame is " + window.name + "<br>");
        document.write("the location of Lower frame parents is " +  window.parent.location.href + "<br>");
    }

</script>
</html>