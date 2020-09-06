<style TYPE="text/css">
<!--
	#mysubmenu{margin: 0 auto;}
	#snb > li.snb{display:none;}
	#snb > li.snb.active{display:block !important;}
	#snb .snb2dul{height:50px;}
	/*#snb .snb2dul:after{content:"";display: block;clear: both;}*/
	#snb .snb2dul > li.active,#snb .snb2dul > li:hover{background:red;}
	#snb .snb2dul > li{display:inline-block;background-color:black;width:180px;margin-right:10px;_margin-right:-5px;}
	#snb .snb2dul > li>a{display: block;line-height:50px;color:#fff;text-align: center;}


//-->
</style>

<div id="mysubmenu">
    <?php /* 주의사항 아래 코드를 수정하시면 페이지 현재위치 및 서브메뉴,모바일메뉴가 정상작동되지 않을 수 있습니다. 11111*/ ?>
		<ul id="snb">
		<?php $sql = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '2' order by me_order, me_id "; $result = sql_query($sql, false);
		for ($i=0; $row=sql_fetch_array($result); $i++) {

	    $gnbM = explode("?",$row['me_link']); 
		$gnbM_kind_id = explode("=",$gnbM[1]); 
		$gnbM_kind = $gnbM_kind_id[0]; 
		$gnbM_idA = $gnbM_kind_id[1]; 
		$gnbM_lt = explode("&",$gnbM_idA); 
		$gnbM_id = $gnbM_lt[0]; $gnbM_idL = $gnbM_kind_id[2]; ?>
		
		<li class="snb <?php echo $gnbM_kind; ?><?php echo $gnbM_id; ?><?php echo $gnbM_idL; ?> 
		<?php $sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id "; 		
		$result2 = sql_query($sql2); 
		for ($k=0; $row2=sql_fetch_array($result2); $k++) {
			$gnbM2 = explode("?",$row2['me_link']); 
			$gnbM_kind_id2 = explode("=",$gnbM2[1]); 
			$gnbM_kind2 = $gnbM_kind_id2[0]; 
			$gnbM_idA2 = $gnbM_kind_id2[1];
			$gnbM_lt2 = explode("&",$gnbM_idA2);
			$gnbM_id2 = $gnbM_lt2[0];
			$gnbM_idL2 = $gnbM_kind_id2[2]; 
			if($k == 0)  echo ' ';
				echo $gnbM_kind2;
				echo $gnbM_id2; 
				echo $gnbM_idL2; 
				echo ' ';}?>"
				>
		
		
		<h2 style="display: none;">
			<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><b><?php echo $row['me_name'] ?></b>
			</a>
		</h2>
		
		<?php $sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id "; 
		$result2 = sql_query($sql2); 
		for ($k=0; $row2=sql_fetch_array($result2); $k++) {
			$gnbM2 = explode("?",$row2['me_link']); 
			$gnbM_kind_id2 = explode("=",$gnbM2[1]); 
			$gnbM_kind2 = $gnbM_kind_id2[0]; 
			$gnbM_idA2 = $gnbM_kind_id2[1]; 
			$gnbM_lt2 = explode("&",$gnbM_idA2);
			$gnbM_id2 = $gnbM_lt2[0];
			$gnbM_idL2 = $gnbM_kind_id2[2]; 
			if($k == 0) echo '<ul class="snb2dul">'; ?>
			<li class="snb2d snb2d_<?php echo $gnbM_kind2; ?><?php echo $gnbM_id2; ?><?php echo $gnbM_idL2; ?>"><a href="<?php echo $cube_link ; ?><?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" ><b> <?php echo $row2['me_name'] ?></b></a></li><?php } if($k > 0) echo '</ul>'; ?></li><?php } ?><li class="snb noInfoPageTit" style="display:none"></li></ul>
		<!-- // SNB -->


</div>




