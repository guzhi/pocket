<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >素拓活动</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>/">首页</a>
</header>

<nav id = "nav" class = "clearfix">
	<a class="current" ><span>活动</span></a>
	<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/apply" ><span>可申请</span></a>
	<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/organizations" ><span>机构协会</span></a>
</nav>

<div class = "flexbox" style="margin:0 10px 10px;" >

	<div class="sort span1 flexbox" >
		<a class="span1 selected">按发布时间</a>
		<a class="span1">按活动时间</a>
	</div>
	<div class="search flexbox" >
		<p class="span1" ><input type="text" /></p>
		<a class="icon-search"></a>
	</div>
	
</div>

<ul class = "form-list" >
	<li class = "rarr" >
		<span>期限</span>
		<span class = "form-list-val j_s_val">未过期</span>
		<select class = "j_sel" data-key = "limit" >
			<option value="2" selected >未过期</option>
			<option value="1">已过期</option>
			<option value="0">全部</option>
		</select>
	</li>
	<li class = "rarr" >
		<span>模块</span>
		<span class = "form-list-val j_s_val">全部</span>
		<select class = "j_sel" data-key = "type" >
			<option value="0" selected >全部</option>
			<option value="1">学术科技与专业技能</option>
			<option value="2">文化艺术与体育竞技</option>
			<option value="3">社会实践与志愿服务</option>
		</select>
	</li>
	
	<li><a class = "form-btn" >立即筛选</a></li>
</ul>

<section id = "chain" >

	<div class="chain-nodes ">
		<h2>本周发布<i class="alarm"></i></h2>
		<ul>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/16</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/15</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/15</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/12</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/12</span>
			</li>
		</ul>
	</div>
	
	<div class="chain-nodes ">
		<h2>上周发布<i class="alarm"></i></h2>
		<ul>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/10</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/08</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/06</span>
			</li>
		</ul>
	</div>
	
	<div class="chain-nodes ">
		<h2>更早<i class="alarm"></i></h2>
		<ul>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/4</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/4</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/4</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/4</span>
			</li>
			<li>
				<a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/activities_p">广东石油化工首届编程交流会</a>				
				<span>10/4</span>
			</li>
		</ul>
	</div>
	
</section>

<script>
	//var div = document.getElementsByTagName("ul");
	var div = document.querySelector(".chain-nodes:last-child ul");
	
	window.onscroll = function (){
	var d = window.innerHeight;
	var h = document.body.scrollHeight;
	var t = document.body.scrollTop;
	var li = div.getElementsByTagName("li")[0].cloneNode();

		if( (h-d) == t ){
			div.appendChild(li);
			$.ajax({
				url : "<?php echo Yii::app()->request->baseUrl; ?>/test/web.php?para=说话",
				type : "post",
				dataType : "json",
				data : {
					a : "saddsa",
					b : 1,
					c : [ 1, "haha"],
					d : function(){
						alert(777);
					}
				}
			});
		}else{
			console.log(d+"--"+h+"--"+t);
		}
	}
	
	
		function Jlist (){
		}
		
		Jlist.prototype = {
			
			init : function(){
				this.deal();
				this.change();
			},
			
			// 绑定提交事件
			deal : function(){
				var ul = document.getElementsByClassName("form-list"),
					len = ul.length;
				
				for( var i = 0; i < len; i++ ){
					var btn = ul[i].getElementsByClassName("form-btn");
					
					btn[0].onclick = function(){
						var sel = this.parentNode.parentNode.getElementsByClassName("j_sel"),
							val = [];
						
						for( var i = 0; i < sel.length; i++ ){
							val.push( sel[i].getAttribute( "data-key" ) +"="+sel[i].value );
						}
						console.log( val.join("&") +"---"+ window.location.href);
						window.location.href += "?"+val.join("&");
					};
				}
				
				btn = null;
			},
			
			// 选项更改事件
			change : function(){
				var sel = document.getElementsByClassName("j_sel"),
					span = document.getElementsByClassName("j_s_val");
				
				if( sel.length == span.length ){
					for ( var i = 0; i < sel.length; i++){
						
						(function(j){
							sel[j].onchange = function(){
								span[j].innerText = this.options[this.selectedIndex].text;
							}
						})(i);
					}
				} else {
					console.log("错误；select和span数目不一致！！");
				}
				
			}
		}
		
		var mylist = new Jlist();
		mylist.init();
</script>