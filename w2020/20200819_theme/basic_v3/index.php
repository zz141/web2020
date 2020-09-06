<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<? echo G5_THEME_URL ?><BR>
<? echo G5_THEME_PATH ?><BR>
<? echo G5_PATH ?><BR>
<? echo G5_URL ?>

<h2 class="sound_only">최신글</h2>

<div class="latest_wr">
<!-- 최신글 시작 { -->

    
    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/myNew', "freeboard", 4, 20);
        ?>
    </div>

    <!-- } 최신글 끝 -->

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>