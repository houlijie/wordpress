
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>css example</title>
    <link href=" {{url('/css/test.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    <h1>定位元素</h1>
    <div class="box">
    	<h2>盒模型</h2>
	    <p>
	    	盒子的属性（ 边框border 内边距padding 外边距margin ）<br />
	    	eg: {margin-top; margin-right; margin-bottom; margain-left}<br />
	    	只写两个属性值时，如果哪个值没有写，那就使用对边的值； 只写一个属性值时， 那么 4 个边都取这个值
	    	以 em 为单位则可以让段间 距随字号变化而相应增大或缩小
	    </p>
	    <p class="box-border">
	    	盒子边框属性（宽度 border-width 样式 border-style 颜色 border-color）
	    	border-width：  thin、medium 和 thick <br />
	    	border-style ： none、hidden、dotted、dashed、solid、double、groove、 ridge、inset 和 outset <br />
	    	border-radius: 圆角
	    </p>
	</div>
	<p>外边距叠加：a下边距50 b上边距30， 实际间距是50，也就是说，较宽的外边距决定两个元素最终离多远，这就是外边距叠加</p>
    <p>
    	页面板式控制属性： 
    	<li>position  -- 控制页面上元素间的位置关系</li>
    	<li>display  --控制元素是堆叠、并排</li>
    	<li>float --提供控制的方式，以便把元素组成成多栏布局</li>
    </p>

    <div class="box-width">
    	<h2>盒子宽度</h2>
    	<p>不设置块级元素的 width 属性，那么这个属性的默认值是 auto，结果会让元素 的宽度扩展到与父元素同宽</p>   
    </div>
    <div class="float-example">
    	<section>
    		<img src="{{url('images/lumen.jpg')}}">
    		<p>it's fun to float</p>
    	</section>
    	<footer> here is the footer element that runs across the bottom of the page</footer>
    </div>
    <div>
    	<h2>围住元素的三种方法</h2>
    	<li>为父元素添加 overflow:hidden</li>
    	<li>同时浮动父元素</li>
    	<li>添加非浮动的清除元素</li>
    </div>
</body>
<script type="text/javascript">
</script>
<style type="text/css">
	.float-example {
		/*overflow: hidden;*/
		margin: 10px 10px;

	}
	/*.float-example::after {
		content: '.';
		display: block;
		height: 0;
		visibility: hidden;
		clear: both;
	}*/
/*	.float-example section {
		width: 100%;
		float: left;
		margin-bottom: 20px;
		
	}
	.float-example section img{
		border: 2px solid;
		width: 50%;
		height: 70%;
		float: left;
	}
	.float-example footer {
		clear: left;
		border: 2px solid;
	}*/
	p {
		margin: 2px 10px;
		border: 2px solid; 
	}
	.box {
		border:solid red;
		border-radius: 20px;
		margin: 10px;
		padding: 10px;
		display: inline-block;
	}
	.box-width {
		border: 2px dashed;
		margin: 2px;
		padding: 10px;
		background: gray;
	}
	.box-width p {
		width: 400px;
		text-align: center;
	}
	
</style>
</html>