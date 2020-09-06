<?php

include_once('./_common.php');


	$co_id = "testPage";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "4";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "비젼";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ipsam deleniti inventore veniam recusandae quo minus asperiores saepe voluptatibus enim, odio consequuntur praesentium adipisci ea illum reprehenderit rem eveniet dignissimos mollitia quos accusantium. Quae ratione harum ipsum tempora veritatis, corporis fuga, laboriosam nulla minus, sint provident id rerum porro amet, cum consequatur saepe asperiores fugit dolorem nihil dicta eligendi. Non soluta numquam dolor rem totam quas labore error necessitatibus deserunt quod consequatur vero porro quis pariatur tempora at aperiam, accusantium ipsa voluptate molestias aliquam perspiciatis atque! Mollitia nihil blanditiis, illum ut! Quam ab optio neque quaerat inventore modi quae corporis?</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>