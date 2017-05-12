<!DOCTYPE html>
<html>
<head>
</head>
<body onload="window_onload()">
    <p> Upper frame</p>
    <div class="inner">
        
    </div>
</body>
<script type="text/javascript">
    function window_onload() {
        document.write("the name of this upper frame is " + window.name + "<br>");
        document.write("the location of upper frame parents is " +  window.parent.location.href + "<br>");
        window.parent.parent.parentFun();

        //window.open()打开新的浏览器窗口
        //@param1 新窗口加载的页面URL
        //@param2 为新窗口分配的名字
        //@param3 指定新窗口的宽高
        var newWindow = window.open('UpperWindow', 'mywindow', 'width=250,height=250');
        //newWindow变量用于保存open()方法的返回值
        
        newWindow.document.open();
        newWindow.document.bgColor ="Green";
        newWindow.document.getElementsByClassName('inner').write('dsdsds');
        newWindow.close();
    }


</script>
</html>