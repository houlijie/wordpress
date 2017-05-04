<!DOCTYPE html>
<html>
<head>
    <title>hhhh</title>
</head>
<body>
<img src="{{ url('images/lumen.jpg') }}" name="img1" class="img1" onclick="changeImg()">
<a href="http://www.baidu.com" name="linktest" onclick="alert('are you sure ?')">百度</a>
</body>
<script type="text/javascript">
    // window.location.replace("user/1");
    // document.write(screen.colorDepth);
    // document.bgColor = "green";
    function changeImg() {
        var defaultImg = document.getElementsByClassName('img1');
        console.log(defaultImg);
        document.images['img1'].src ="{{ url('images/laravel-1.jpg') }}"
        // body...
    }

    alert(navigator.userAgent);
</script>
</html>