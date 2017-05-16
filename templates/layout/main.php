<?php
	
	$d->reset();
	$sql_qc_slide ="select * from #_linhvuc where hienthi = 1 and taisan = 1 order by stt asc limit 0,12";
	$d->query($sql_qc_slide);
	$qc_slide=$d->result_array();
	
	$d->reset();
	$sql_tungdanhmuc="select * from #_product where hienthi = 1 order by stt asc limit 12";
	$d->query($sql_tungdanhmuc);
	$result_spnam=$d->result_array();
	
	$d->reset();
	$sql_linhvuc="select * from #_linhvuc where hienthi = 1 and linhvuc = 1 order by stt asc limit 4";
	$d->query($sql_linhvuc);
	$result_linhvuc=$d->result_array();
	
	$d->reset();
	$result_detailq="select * from #_tinloai1_1 order by id limit 0,2";
	$d->query($result_detailq);
	$result_detailq=$d->result_array();
	$tg=date('Y-m-d H:i:s');
	$tgout=900;
	$tgnew=$tg - $tgout;
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
	    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
	    $ipaddress = $_SERVER['REMOTE_ADDR'];
	else
	    $ipaddress = 'UNKNOWN';
	$local = $_SERVER['PHP_SELF'];
// 	$sql_insert = "INSERT INTO #_useronline (Tgtmp, Ip, Local) VALUES ('$tg', '$ipaddress', '$local')";                  
// 	$d->query($sql_insert);
// 	$next30 = strtotime( '-900 seconds' );
// 	$tgnew =  date('Y-m-d H:i:s',$next30 );
// 	$d->reset();
// 	$sql_delete = "DELETE FROM #_useronline WHERE Tgtmp < '$tgnew'";
// 	$d->query($sql_delete);
// 	$d->reset();
// 	$result_detail="select DISTINCT ip from #_useronline where Local='$local'";
// 	$d->query($result_detail);
// 	$result_detail=$d->fetch_array();
// 	$useronline = count($result_detail);

	//slide show
	$d->reset();
	$sql_thuvienanh="select * from #_slideshow";
	$d->query($sql_thuvienanh);
	$result_thuvienanh=$d->result_array();
?>

<div class="banner-slider">
	<ul class="index_slider owl-carousel owl-theme owl-rtl owl-loaded">
			<div class="owl-stage-outer">
			
			<div class="owl-stage" style="transform: translate3d(6000px, 0px, 0px); transition: all 0.25s ease 0s; width: 27600px;"><div class="owl-item cloned" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div>
			
			<div class="owl-item cloned" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/banner-web4.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div>
			<div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div>
			<div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/16.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item active" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/banner-web4.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/sofa-vai-2.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/banner-web4.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/sofa-da-2.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/ban-an-7.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/banner-web4.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/ban-an-2.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/PN-1.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/PN-2.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div><div class="owl-item" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/banner-web4.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div>
			<div class="owl-item cloned" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/slider-web.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div>
			
			<div class="owl-item cloned" style="width: 1200px; margin-left: 0px;"><li>
				<img src="images/16.jpg" alt="">
				<div class="container">	
					<h3></h3>
					<p></p>
				</div>
			</li></div>
			
			</div>
			</div>
			
			<div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div style="" class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></ul>
	<div class="icons-slider">
		<div class="container">
			<ul>
					<?php include _template."layout/menu_top_list.php"; ?>
			</ul>
		</div>
	</div>
</div>
</div>
