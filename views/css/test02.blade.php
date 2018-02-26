
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>css example</title>
    <link href=" {{url('/css/test.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    <h1>id 类的区别</h1>

    <p>
        id 是页面上唯一的标识一个元素， 同一页面每个id都是独一无二的
    </p>
    <p> 
    	伪元素
    	::first-letter
    	::first-line 
    	::before 特定元素前面添加特殊内容
		::after 特定元素后面添加特殊内容
    </p>
    <p>
    	样式优先级：
    	内联》ID选择器100》伪类=属性选择器=类选择器10》元素选择器【p】1》通用选择器(*)》继承的样式 
    </p>
   <p>
   	机制： 继承。层叠。特指
   </p>

   <p>
   	aqua(浅绿色)、black(黑色)、blue(蓝色)、fuchsia (紫红色)、gray(灰色)、green(绿色)、lime(黄绿色)、 maroon(褐红色)、navy (深蓝色)、olive(茶青色 )、purple(紫色)、red(红色)、silver(银色)、teal(青色)、
white(白色)和 yellow(黄色)。rgb
   </p>
    <p class="age">25</p>
    

</body>
<script type="text/javascript">
</script>
<style type="text/css">
	p::first-letter {
		font-size: 300%
	}
	/*p::first-line {
		color: green;
	}*/

	p {
		color: green;
	}
	p.age::before {
		content: "i am ";
		color: rgb(0%, 0%, 0%);
	}
	p.age::after {
		content: " years old!";
		color: maroon;
	}
    li { font-size: 30px;}
</style>
</html>