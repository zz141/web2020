<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd" >
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    
    <div id="hd_wrapper" class="clearfix">

        <div id="logo">
            <a href="<?php echo G5_URL ?>">
                <img src="<? echo G5_THEME_IMG_URL ?>/logo.jpg" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
    
        <nav id="gnb">
           
                <ul id="gnb_1dul" class="clearfix">
                    
                    <?php
                    $sql = " select *
                                from {$g5['menu_table']}
                                where me_use = '1'
                                  and length(me_code) = '2'
                                order by me_order, me_id ";
                    $result = sql_query($sql, false);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $menu_datas = array();

                    for ($i=0; $row=sql_fetch_array($result); $i++) {
                        $menu_datas[$i] = $row;

                        $sql2 = " select *
                                    from {$g5['menu_table']}
                                    where me_use = '1'
                                      and length(me_code) = '4'
                                      and substring(me_code, 1, 2) = '{$row['me_code']}'
                                    order by me_order, me_id ";
                        $result2 = sql_query($sql2);
                        for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                            $menu_datas[$i]['sub'][$k] = $row2;
                        }

                    }

                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue; 
                    ?>
                    <li class="gnb_1dli" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                        
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
        </nav>
    </div>
    
</div>
<!-- } 상단 끝 -->


<hr>
<? if( defined("_INDEX_") ){ ?>

<div style="height: 400px;background:#0ff">222ddd</div>

<?}else{?>

<style>
    #subBg{height:300px;min-width:1200px;}
    #subBg .sbtImg{height: 300px;text-align: center;position: relative;}
    #subBg .sbtImg .title{
        width: 400px;_background-color: #fff;
        left:50%;top:50%;transform:translate(-50%,-50%);
        position: absolute;
    }
    #subBg .sbtImg .title h2{font-size:2em;}
    .subTopBg_01{background-color:skyblue;}
    .subTopBg_02{background-color:pink;}
    .subTopBg_03{background-color:gray;}
</style>



<div id="subBg">
    <div id="page_title" class="sbtImg ">
        <div class="title">
            <h2 class="loc1D"><!-- 1차메뉴 --></h2>
            <div class="text"></div>
        </div>
    </div>
</div>
<script>
   // window.onload = function(){};
   window.onload = function(){
    var menuDep = $("#subBg .loc1D").html();
    console.log("현재위치 :"+menuDep);

    if(menuDep == "회사소개"){
        $("#subBg .text").text("저희 홈페이지를 찾아주셔서 감사합니다.");
    }else if(menuDep == "자유게시판"){
        $("#subBg .text").text("이곳은 자유롭게 글쓰기를 하실수 있습니다.");
    }
   };
    

    
</script>
<?}?>

<? if(!defined("_INDEX_")){ ?>
<div id="aside">
         <?include_once(G5_THEME_PATH.'/skin/nav/mysubmenu.php'); ?> 
</div>
<?}?>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?>

            <div>
                
                 <span class="locationBar" title="현재위치">
                    <span> <em class="fa fa-home" aria-hidden="true"></em> HOME 
                    <i class="fa fa-angle-right" aria-hidden="true"></i> </span> 
                    <span class="loc1D"><!-- 1차메뉴 --></span> 
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="loc2D"><!-- 2차메뉴 --></span>
                </span>
            </div>

             <h2 id="container_title" style="text-align:center;font-size:2em">
                <?php echo get_head_title($g5['title']); ?><br>
             </h2>
             <style>
                 
             </style>
             <div class="subTitle">
                <?
                $subTitle = get_head_title($g5['title']);
                
                if($subTitle == "회사소개"){ 
                ?>
                    대한민국을 대표하는 글로벌기업
                    <img src="<? echo G5_THEME_IMG_URL ?>/sub01_01.jpg" alt="">
                <?
                }else if($subTitle == "오시는길"){
                    echo "글로벌기업 오시는길";
                    echo "<img src='";
                    echo G5_THEME_IMG_URL;
                    echo "/sub01_01.jpg'>";

                }
                ?>
            </div>

        <?php } ?>



