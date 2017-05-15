<!DOCTYPE html>
<html>
<head>
    <title>time object example</title>
</head>
<body>
<p>UTC(Coordinated Universal Time)协调世界时</p>
<p>GMT(Greenwich Mean Time) 格林尼治时间</p>
</body>
<script type="text/javascript">
    // 1. toUTCString()
    // 2. toLocaleTimeString()
    // 3. toTimeString()
    // 4. toLocaleDateString()
    // 5. toDateString()
    // 6. getTimezoneOffset() --计算当前本地时间与UTC时间的插值
    // 7. toLocaleString()
    var localTime = new Date();  //Fri May 12 2017 17:29:34 GMT+0800 (中国标准时间)
    document.write("<br>");
    document.write(localTime.toUTCString() + "<br>"); //Fri, 12 May 2017 09:30:14 GMT 
    document.write(localTime.toLocaleString() + "<br>"); //2017-5-12 17:32:19
    document.write(localTime.toTimeString() + "<br>");//17:34:43 GMT+0800 (中国标准时间)
    document.write(localTime.toDateString() + "<br>"); //Fri May 12 2017
    document.write(localTime.toLocaleDateString() + "<br>"); //2017-5-12
    document.write(localTime.getTimezoneOffset() + "<br>"); //-480
    document.write(localTime.toLocaleTimeString() + "<br>"); //17:36:57

    


</script>
</html>