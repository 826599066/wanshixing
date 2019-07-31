<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=45FhwOnszsxXxe6GXLKvQ9NLUEvHqcxj"></script>
<div class="block_wrap category_block_wrap">
    <div class="container" >
        <div class="content">
            <div class="category_block_title">
                <div><?php echo $page_content_title;  ?></div>
                <div class="category_subtitle"><?php echo $page_content_subtitle;  ?></div>
                <div class="title_underline"></div>
            </div>
            <div class="contact_us_wrap">
                <div class="contact_us_item" style="background-image:url('<?php echo wp_upload_dir()['baseurl']; ?>/2018/10/asd.jpg'); background-size:cover;"></div>
                <div class="contact_us_item">
                    <div class="contact_us_title">天津万事兴物业服务集团股份有限公司</div>
                    <div class="contact_us_content">
                        <div class="contact_us_content_item">
                            <span>联系电话:</span>
                            <span><?php echo $phone_num;  ?></span>
                        </div>
                        <div class="contact_us_content_item">
                            <span>集团邮箱:</span>
                            <span><?php echo $company_email;  ?></span>
                        </div>
                        <div class="contact_us_content_item">
                            <span>联系地址:</span>
                            <span><?php echo  $address;  ?></span>
                        </div>
                    </div>
                </div>
                <div class="contact_us_item">
                <div class="contact_map" id="contact_map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var map = new BMap.Map("contact_map",{minZoom:11,maxZoom:20});          // 创建地图实例  
var point = new BMap.Point(117.427752,40.049307);
var opts = {
	  width : 100,     // 信息窗口宽度
	  height: 80,     // 信息窗口高度
	  title : "万事兴物业服务集团有限公司" ,
	}
var infoWindow = new BMap.InfoWindow("地址：天津市蓟县城关镇东一环路2号302-A室", opts); 
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);    // 创建点坐标  
map.centerAndZoom(point, 16);   
marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	});              // 初始化地图，设置中心点坐标和地图级别  
map.enableScrollWheelZoom(true); 
</script>