<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 1300;
$thumb_height = 600;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
  
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        <li class="slide" style="background-image:url(<?php echo $img; ?>)">
				<h2 class="fancy-box red main_tt"><?php echo $list[$i]['subject']?></h2>
				<div class="slide_contents">
                    <div>
                        <p><?php echo cut_str(strip_tags($list[$i]['wr_content']), 100, '..')?>
	<!-- 게시글의 본문 일부 불러오기 100자 까지 --></p>
                    </div>
					<a href="<?php echo $list[$i]['wr_link1']; ?>" class="btn">See Details</a>
				</div>
			</li>
       
    <?php }  ?>
    <?php if ($list_count == 0) 
    { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php } ?>
   


