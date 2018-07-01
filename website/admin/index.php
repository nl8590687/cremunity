<?php

require 'includes/checklogin.php';


if($islogin==True){
	echo '
<!DOCTYPE HTML>
<html>
';
require 'includes/admin_head.php';
echo '
<body>
<div id="wrapper">
     ';
	 require 'includes/navbar.php';
	 echo '
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>45</strong></h5>
                      <span>点赞</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>360</strong></h5>
                      <span>访客量</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>24</strong></h5>
                      <span>文章发布数</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>¥450</strong></h5>
                      <span>账户余额</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
      <div class="col_1">
		    <div class="col-md-4 span_7">	
		      <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
		    </div>
		    <div class="col-md-4 span_8">
		       <div class="activity_box">
		        <div class="scrollbar" id="style-2">
                   <div class="activity-row">
	                 <!--<div class="col-xs-1"><i class="fa fa-thumbs-up text-info icon_13"> </i>  </div>-->
	                 <div class="col-xs-3 activity-img"><img src="images/5.png" class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">天涯</a> 最近比较感兴趣<a href="#">古典文学和军事等。</a></h5>
	                    <p>推荐指数：0.56</p>
	                    <h6><a href="#">关注</a></h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
	  			    <div class="activity-row">
	                 <!--<div class="col-xs-1"><i class="fa fa-comment text-info"></i> </div>-->
	                 <div class="col-xs-3 activity-img"><img src="images/3.png" class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">AI柠檬</a> 最近比较感兴趣<a href="#">机器学习等。</a></h5>
	                    <p>推荐指数：0.48</p>
	                    <h6><a href="#">关注</a></h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
	                 <!--<div class="col-xs-1"><i class="fa fa-check text-info icon_11"></i></div>-->
	                 <div class="col-xs-3 activity-img"><img src="images/1.png" class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">Tomorrow</a> 最近比较感兴趣<a href="#">足球世界杯和NBA等。</a></h5>
	                    <p>推荐指数：0.41</p>
	                    <h6><a href="#">关注</a></h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row1">
	                 <!--<div class="col-xs-1"><i class="fa fa-user text-info icon_12"></i></div>-->
	                 <div class="col-xs-3 activity-img"><img src="images/4.png" class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">嗯哼大王</a> 最近比较感兴趣<a href="#">毕业季旅行。</a></h5>
	                    <p>推荐指数：0.32</p>
	                    <h6><a href="#">关注</a></h6>
	                 </div>
	                 <div class="clearfix"> </div>
                     </div>
	  		        </div>
		          </div>
		    </div>
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">当前热点</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>假期将至 教你在家访问图书馆电子资源<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
                        <li>求学21载，西电7年。再见了，我的学生时代！<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
                        <li>免费出让自己做一天男朋友，求一本自然辩证法<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
                        <li>一图胜千言，一图总结“苦逼”的硕士三年<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
                        <li>大四狗急出一个捷安特山地自行车，给钱就卖！！！<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
                        <li>生离死别-记同学谢雕<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
                        <li class="last">我愿长留于此，再别西电<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> 
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
	  </div>
	  <div class="span_11">
		<div class="col-md-6 col_4">
		  <div class="map_container"><div id="vmap" style="width: 100%; height: 400px;"></div></div>
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
		<div class="col-md-6 col_5">
		  <div id="chart_container">
		   <div id="chart"></div>
	       <div id="slider"></div>
<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: "multi",
	
	dotSize: 5,
	series: [
		{
			name: "temperature",
			data: seriesData.shift(),
			color: "#AFE9FF",
			renderer: "stack"
		}, {
			name: "heat index",
			data: seriesData.shift(),
			color: "#FFCAC0",
			renderer: "stack"
		}, {
			name: "dewpoint",
			data: seriesData.shift(),
			color: "#555",
			renderer: "scatterplot"
		}, {
			name: "pop",
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: "#555",
			renderer: "bar"
		}, {
			name: "humidity",
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: "line",
			color: "#ef553a"
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
	      <!-- map -->
<link href="css/jqvmap.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.vmap.js"></script>
<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#vmap").vectorMap({
		    map: "world_en",
		    backgroundColor: "#333333",
		    color: "#ffffff",
		    hoverOpacity: 0.7,
		    selectedColor: "#666666",
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ["#C8EEFF", "#006491"],
		    normalizeFunction: "polynomial"
		});
	});
</script>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
		        <tr>
		          <th>统计</th>
		          <th>发布文章数/篇</th>
		          <th>评论数/条</th>
		          <th>访问量/次</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr class="active">
		          <th scope="row">十一月</th>
		          <td>0</td>
		          <td>0</td>
		          <td>0</td>
		        </tr>
		        <tr>
		          <th scope="row">十二月</th>
		          <td>0</td>
		          <td>0</td>
		          <td>0</td>
		        </tr>
				<tr class="active">
		          <th scope="row">一月</th>
		          <td>2</td>
		          <td>3</td>
		          <td>55</td>
		        </tr>
		        <tr>
		          <th scope="row">二月</th>
		          <td>4</td>
		          <td>23</td>
		          <td>77</td>
		        </tr>
		        <tr class="active">
		          <th scope="row">三月</th>
		          <td>1</td>
		          <td>3</td>
		          <td>12</td>
		        </tr>
		        <tr>
		          <th scope="row">四月</th>
		          <td>3</td>
		          <td>1</td>
		          <td>15</td>
		        </tr>
		        <tr class="active">
		          <th scope="row">五月</th>
		          <td>5</td>
		          <td>10</td>
		          <td>98</td>
		        </tr>
		        <tr>
		          <th scope="row">六月</th>
		          <td>9</td>
		          <td>29</td>
		          <td>103</td>
		        </tr>
		        <tr class="active">
		          <th scope="row">七月</th>
		          <td>0</td>
		          <td>0</td>
		          <td>0</td>
		        </tr>
		        <tr class="info">
		          <th scope="row">总计</th>
		          <td>24</td>
		          <td>59</td>
		          <td>360</td>
		        </tr>
		      </tbody>
		    </table>
		   </div>
	   </div>
	   
	   <div class="col-md-4 span_4">
		 <div class="col_2">
		  <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head red1">
			        <div class="text-center">Orders</div>
			    </div>
			    <div class="tiles-body red">10</div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tiles_blue1">
			        <div class="text-center">Sales</div>
			    </div>
			    <div class="tiles-body blue1">30</div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
		 <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head fb1">
			        <div class="text-center">Facebook</div>
			    </div>
			    <div class="tiles-body fb2">10</div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tw1">
			        <div class="text-center">Twitter</div>
			    </div>
			    <div class="tiles-body tw2">30</div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		   </div>
		  </div>
		  <div class="cloud">
			<div class="grid-date">
				<div class="date">
					<p class="date-in">西安</p>
					<span class="date-on">°C </span>
					<div class="clearfix"> </div>							
				</div>
				<h4>30°<i class="fa fa-cloud-upload"> </i></h4>
			</div>
			<p class="monday">Sunday 1 July</p>
		  </div>
		</div>
		<div class="clearfix"> </div>
	    </div>
		';
		$arg_copyright='';
		require 'includes/copyright.php';
		echo '
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

';
}
else
{
	echo'<script> location.replace ("login.php") </script>'; 
	exit();
}
?>