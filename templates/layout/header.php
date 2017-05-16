<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *	from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
?>

<div id="header">
		<div class="container">
			<a href="index.html" class="logo"><img src="images/logo.png" alt="" style="padding-top: 10px;padding-bottom: 10px;"></a>
			
			<div class="user-menu">
				&nbsp;
			</div>
			<div class="search-forms">
				&nbsp;
			</div>
			<div class="top-menu">
				<ul id="menu-menu-top" class=""><li id="menu-item-582" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-582"><a href="index.html">Trang chủ</a></li>
					<li id="menu-item-2496" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2496"><a href="http://homedecor.info.vn" target="_blank">Thiết kế</a></li>
					<li id="menu-item-1118" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1118"><a href="http://homedecor.info.vn" target="_blank">Thi công</a></li>
					<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="http://homedecor.info.vn/lien-he.html" target="_blank">Liên hệ</a></li>
					<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="giohang" href="gio-hang.html">Giỏ hàng </a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="menu-header">
				<div class="toogle-menu toggle-menu-top">
					MENU
					<a href="#">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
<?php include _template."layout/menu_top.php"; ?>	
							</div>
		</div>
    </div><!--header-->