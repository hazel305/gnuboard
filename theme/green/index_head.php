<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
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
	<header>
		<div class="container clearfix">
			<h1 class="logo">
				<a href="<?php echo G5_URL ?>">Logo</a>
			</h1>
			<nav>
				<ul class="clearfix">
					<li><a href="index.html">Home</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="about.html">About us</a></li>
				</ul>
				<ul class="">        
					<?php if ($is_member) {  ?>
					<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
					<?php if ($is_admin) {  ?>
					<li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
					<?php }  ?>
					<?php } else {  ?>
					<li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
					<?php }  ?>
		
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="banner">
	<ul class="banner_list cycle-slideshow"
		data-cycle-fx="scrollHorz" 
		data-cycle-timeout="0"
		data-cycle-slides=".slide"
		data-cycle-prev=".banner .prev"
        data-cycle-next=".banner .next"
		data-cycle-pager=".banner .pager"		
		>	
		<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('theme/banner', 'banner', 3, 10);		// 최소설치시 자동생성되는 갤러리게시판
			?>	
			
					
		</ul>
		<p class="controls">
			<a href="#" class="prev">
			<i class="fa fa-chevron-left" aria-hidden="true"></i>
			</a>
			<a href="#" class="next">
			<i class="fa fa-chevron-right" aria-hidden="true"></i>
			</a>
		</p>
		<p class="pager">
		</p>				
	</div>
	
	<div class="main_content container">
                  
<!-- } 상단 끝 -->


