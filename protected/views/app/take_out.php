<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >外卖</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>/">首页</a>
</header>

<p id="tips">小U提示：外卖虽然方便，但考虑健康问题，建议同学们还是尽量少点叫外卖哦！o( >_< )o </p>

<div id = "takeout" >
			
	
		<a  class = "list s-open" >
			<!--<span class="state close" ><b class=""></b></span>-->
			<div class = "info span1" >
				<p class = "name">明记</p>
				<p class = "intro" >你们的微笑时明记餐饮服务的追求</p>
				<p class = "intro">
					<span class = "level">
						<b class = "complete" ></b><!--
						--><b class = "complete" ></b><!--
						--><b class = "half" ></b><!--
						--><b></b><!--
						--><b></b>
					</span>共n种菜式
				</p>
			</div>
		</a>
		<a  class = "list s-close" >
			<!--<span class="state close" ><b class=""></b></span>-->
			<div class = "info span1" >
				<p class = "name">明记</p>
				<p class = "intro" >你们的微笑时明记餐饮服务的追求</p>
				<p class = "intro">
					<span class = "level">
						<b class = "complete" ></b><!--
						--><b class = "complete" ></b><!--
						--><b class = "half" ></b><!--
						--><b></b><!--
						--><b></b>
					</span>共n种菜式
				</p>
			</div>
		</a>
</div>

<script>
	var h = window.innerHeight,
		div = document.getElementById( "takeout" ),
		offset = h-115-4; // 头部高度
		
	div.setAttribute("style", "height:"+offset+"px;");
</script>