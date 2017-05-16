<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_cat='$id'  order by stt asc ";
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();	
			
			$d->reset();
			$sql_laycat="select * from #_product_cat where hienthi =1 and id='$id'";
			$d->query($sql_laycat);	
			$result_laycat=$d->fetch_array();	
			
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=30;
			$maxP=5;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
			$total_sp = count($result_spnam);
        ?>

<div class="brackcum">
	<div class="container">
     <!-- Breadcrumb NavXT 5.3.0 -->
<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to ." href="http://nhadep.com.vn" class="home">Trang chủ</a></span><span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to the Sản phẩm mới Danh mục sản phẩm archives." href="http://nhadep.com.vn/danh-muc/san-pham-moi/">Sản phẩm mới</a></span><span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to the Phòng khách Danh mục sản phẩm archives." href="http://nhadep.com.vn/danh-muc/san-pham-moi/phong-khach-san-pham-moi/">Phòng khách</a></span><span typeof="v:Breadcrumb"><span property="v:title">Sofa da Malaysia Hugo góc phải, màu xám | Mã: 72605032</span></span>	</div>
</div>
	<!-- start header -->
<div id="content" class="archive">
	<div class="container">
    <a href="#" class="yf-mob-filter">Hiển thị bộ lọc</a>
		<div class="left">
			<div class="filter">
				<h4>Phong cách:</h4>
				<ul class="filter_ul" id="filter_style">
					<li><a href="#" data-fill=""><p class="active"><span></span></p>Tất cả</a></li>
											<li><a href="#" data-fill="co-dien"><p><span></span></p>Cổ điển</a></li>
											<li><a href="#" data-fill="hien-dai"><p><span></span></p>Hiện đại</a></li>
											<li><a href="#" data-fill="sang-tao"><p><span></span></p>Sáng tạo</a></li>
											<li><a href="#" data-fill="sang-trong"><p><span></span></p>Sang trọng</a></li>
											<li><a href="#" data-fill="tre-trung"><p><span></span></p>Trẻ trung</a></li>
									</ul>
			</div>
			<div class="filter">
				<h4>Xuất xứ:</h4>
				<ul class="filter_ul" id="filter_made">
					<li><a href="#" data-fill=""><p class="active"><span></span></p>Tất cả</a></li>
											<li><a href="#" data-fill="chau-au"><p><span></span></p>Châu Âu</a></li>
											<li><a href="#" data-fill="dai-loan"><p><span></span></p>Đài Loan</a></li>
											<li><a href="#" data-fill="duc"><p><span></span></p>Đức</a></li>
											<li><a href="#" data-fill="han-quoc"><p><span></span></p>Hàn Quốc</a></li>
											<li><a href="#" data-fill="italia"><p><span></span></p>Italia</a></li>
											<li><a href="#" data-fill="malaysia"><p><span></span></p>Malaysia</a></li>
											<li><a href="#" data-fill="nhat-ban"><p><span></span></p>Nhật Bản</a></li>
											<li><a href="#" data-fill="trung-quoc"><p><span></span></p>Trung Quốc</a></li>
											<li><a href="#" data-fill="viet-nam"><p><span></span></p>Việt Nam</a></li>
									</ul>
			</div>
		</div>
		<div class="right">
			
			<div class="title">
				<h2>Sofa da Italia</h2>
				<div class="title_right">
					<span class="count">(Tìm thấy <?php echo count($result_spnam);?> sản phẩm)</span>
					<span class="orderby">Sắp xếp theo: 
						<select name="orderby">
							<option value="" selected="selected">Mặc định</option>
							<option value="desc">Giá từ cao đến thấp</option>
							<option value="asc">Giá từ thấp đến cao</option>
						</select>
					</span>
				</div>
				<div class="clear"></div>
							</div>
			<div class="products">
			<?php
			for ($i=0;$i<count($result_spnam);$i++)
			{ 
			?>
				<div class="item-content">
						<div class="item" style="height: 285px;">	
							<a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="thumbnail">
								<img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>">
									<img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>" class="phoicanh">
																                							</a>
							<div class="text">
								<h3><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html"><?=$result_spnam[$i]["ten_vi"]?></a></h3>
								<!--<h4>Mã SP: </h4>
																	<table class="shop_attributes">
										<tbody>
											<tr>
												<th>Kích thước</th>
												<td><p>
																					</p></td>
											</tr>
										</tbody>
									</table>
																-->
																												<p class="price regular_price">&nbsp;</p>
												<p class="price">Giá: <span><span class="amount"><?php echo number_format ($result_spnam[$i]['gia'],0,",",".")." ₫";?></span></span></p>
																	</div>
							<div class="status">
								<p>Tình trạng: Hàng sắp về</p>
							</div>
						</div>
					</div>
			<?php
			} 
			?>
								<div class="clear"></div>
				
			</div>
		</div>
		<div class="clear"></div>
		</div>
</div>