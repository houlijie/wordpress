<!DOCTYPE html>
<html>
<head>
    <title>regExp example</title>
</head>
<body>

</body>
<script type="text/javascript">
    var myString ="Zhouhuafei, houlijie,zhouHuafeiiii, zhaochuanhong, zhouhuafei";

    //默认情况下，regExp 仅查找与模式匹配的第一个字符串，找到之后就会停止查找
    //g --全局查找，查找所有与模式匹配的字串
    //i --忽略大小写
    //m --多行标记
    var myRegExp = /zhouhuafei\b/gi;
    document.write(myString.replace(myRegExp, "friend"));

    var testString = "a dog walked in off a street and ordered a finest beer";
    var rregExp = /a\b/g;
    document.write("<br>" + testString.replace(rregExp, "the"));
</script>
</html>