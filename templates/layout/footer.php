<?php 
	$d->reset();
	$sql_chinhsach ="select * from #_product where chinhsach = 1 order by stt asc limit 0,5";
	$d->query($sql_chinhsach);
	$chinhsach=$d->result_array();
	
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
?>

<div id="footer">
	<div class="container">
		<div class="left-footer" style="width: 25%;">
			<h4>GIỚI THIỆU VỀ HOME DECOR</h4>
				<p><i class="fa fa-map-marker"></i> &nbsp;Tầng 3, tòa nhà An Phú Plaza, số 117-119 đường Lý Chính Thắng, P.7, Q.3, Tp.HCM </p>
<p><i class="fa fa-phone"></i> Điện thoại: <a href="tel:0917 049 077">0917 049 077</a>  |  Fax: <a href="tel:0917 049 077">0917 049 077 | Giờ mở cửa: 8:00-21:30 (Cả tuần)</a></p>
				<p><i class="fa fa-map-marker"></i> &nbsp;Tầng 1, tòa nhà Packsimex Plaza, số 52 đường Đông Du, P.Bến Nghé, Q.1, Tp.HCM </p>
		</div>	
		<div class="right-footer" style="width: 30%;">
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhomedecor.info.vn%3Ffref%3Dts&amp;width=360&amp;height=190&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"
					scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 360px;
					height: 160px;" allowtransparency="true"></iframe>
			<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
			<!-- Histats.com  START  (aync)-->
			<script type="text/javascript">var _Hasync= _Hasync|| [];
			_Hasync.push(['Histats.start', '1,3792557,4,403,118,80,00011111']);
			_Hasync.push(['Histats.fasi', '1']);
			_Hasync.push(['Histats.track_hits', '']);
			(function() {
			var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
			hs.src = ('//s10.histats.com/js15_as.js');
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
			})();</script>
			<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3792557&101" alt="" border="0"></a></noscript>
			<!-- Histats.com  END  -->
		</div>
		
		<div class="right-footer" style="width: 30%;padding-left: 2%">
			<h4>Bản quyền thuộc</h4>
			<p><strong>Công Ty CP Kiến Trúc Xây Dựng Home Decor</strong><br>
				GPĐKKD số: 0314 373 972
			</p>
			<p>
				Trụ sở: Tầng M, tòa nhà An Phú Plaza, số 117-119 đường Lý Chính Thắng, P.7, Q.3, Tp.HCM
			</p>
			<p>
				Văn phòng giao dịch 01: Tầng 3, tòa nhà An Phú Plaza, số 117-119 đường Lý Chính Thắng, P.7, Q.3, Tp.HCM
			</p>
			<p>
				Văn phòng giao dịch 02: Tầng 1, tòa nhà Packsimex Plaza, số 52 đường Đông Du, P.Bến Nghé, Q.1, Tp.HCM
			</p>
			<p><i class="fa fa-phone"></i> Hotline: <a href="tel:0917 049 077">0917 049 077  |  CSKH: 0917 049 077</a></p>
			<p><i class="fa fa-envelope"></i> Email: <a href="mailto:homedecor.info.vn">contact@homedecor.info.vn</a>  |  Website: <a href="">homedecor.info.vn</a></p>
			<p></p>
		</div>
		<div class="clear"></div>
		
	</div>
	
	<div style="padding-top: 25px">
	<div class="clear"> </div>
	<div style="text-align: center"> Copyright © <a style="color: blue;" href="http://homedecor.info.vn" target="_blank">Home Decor</a> </div>
</div>
</div><!--footer-->
    
