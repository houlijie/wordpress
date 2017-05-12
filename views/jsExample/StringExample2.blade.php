<!DOCTYPE html>
<html>
<head>
    <title>string example 2</title>
</head>
<body>

</body>
<script type="text/javascript">
    // 7. split() --个根据分割标志将字符串拆分成有个由字串组成的数组
    var dir = "test_views_jsExample";
    var test = dir.split('_');
    console.log(test);
    // 8. match()  --查找字串的位置，match()方法返回的是一个数组，包含了所有匹配的字串
    // 9. replace() --查找字符串是否存在，匹配到字串时，replace字串为我们指定的字符串
    var replaceDir = dir.replace("test", "new");
    console.log(replaceDir);
    // 10. search() --查找指定字符串 返回-1（未找到） 或者字符串第一次出现的位置
    console.log(dir.search("test"));
</script>
</html>