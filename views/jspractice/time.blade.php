<!DOCTYPE html>
<html>
<head>
    <title>multiply table</title>
</head>
<body>

</body>
<script type="text/javascript">
    var arr = new Array();
    var arr2 = new Array();
    arr[0] = 'apple';
    arr['test'] = 'bana';
    arr2[0] = 'orange';
    arr2[3] = 'test';
    document.write(arr.concat(arr2));
    // console.log(arr);
    document.write("<br>");

    var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth()+1;
    var day = now.getDate();
    document.write(year + '-'+month+"-"+ day);

    // document.write(arr2.concat(arr));
    // for (var i = 1; i <= 9; i++) {
    //     for(var j=1; j<=9; j++)
    //     {
    //         var result = i * j;
    //         document.write(i + " * " + j + " = " + result );
    //         document.write("<br>");
    //     }
    // }

    // timeTable(2,9);

    function timeTable(start, end)
    {
        var string1 = prompt("please enter you string");
        var needString = string1.substring(2,4);
        alert(needString.toLowerCase());

        document.write(eval(start + end)+ "<br>");
        for (var i = start; i <= end; i++) {
            var result = start * i;
            document.write(start + " * " + i + " = " + result );
            document.write("<br>");
        }
    }
</script>
</html>