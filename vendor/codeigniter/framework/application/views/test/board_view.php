<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start("ob_gzhandler");
$array = array("a","b","c");
?>

<html lang="ko">
<head>
<title>Board View</title>

<script type="text/javascript">
function del_chk(board_id){
  if(confirm("삭제 하시겠습니까?")){
    location.href = "/test/remove/" + board_id;
    return true;
  }else{
    return false;
  }
}
</script>
</head>
<body>

<div>
  <div style="display: inline-block; width: 80%;">
    <span class="title">
    <?php echo $board_content -> title ?>
    </span>
  </div>
  <p class="date" style="display: inline-block"><?php echo $board_content -> reg_date ?></p>
  <hr>
  <div>
    <p class="reg_id" style="text-align: right;"> <?php echo $board_content -> reg_id ?></p>
    <div class="content">
      <?php echo $board_content -> content ?>
    </div>
  </div>
<hr>

  <a href="/test/edit/<?php echo $board_content -> id ?>">수정하기</a> | <a href="#" onclick="del_chk(<?php echo $board_content -> id ?>);">삭제하기</a>
</div>



</body>
</html>
<?php
ob_end_flush();
?>
