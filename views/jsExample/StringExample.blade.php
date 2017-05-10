<!DOCTYPE html>
<html>
<head>
    <title>string op example</title>
</head>
<body>

</body>
<script type="text/javascript" language="javescript">
    var myName = new String("pual");

    // 1.length 属性
    document.write(myName.length);

    // 2.charAt()方法和charCodeAt()---从字符串中选取一个字符
    document.write(myName.charAt(myName.length-1)); //l
    var code = myName.charCodeAt(myName.length-1);
    document.write(code); // 108 返回unicode字符集中的编码值

    // 3.fromCharCode() ---讲字符编码转换为字符串
    document.write(String.fromCharCode(65,66,67));

    // 4.indexOf() --从前往后查找 && lastIndexOf() --从后往前查找
    document.write(myName.indexOf("pu"));
    document.write(myName.lastIndexOf("pu"));

    // 5. substr(start, length) && substring(start, end)  --复制字符串的一个字串
    document.write(myName.substring(1,3)); //ua
    document.write(myName.substr(1, 3));  //ual

    // 6. toLowerCase() && toUpperCase()  --转换字母大小写
    document.write(myName.toUpperCase());

</script>
</html>