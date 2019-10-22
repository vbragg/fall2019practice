<?php

  dynamic_sidebar('default-sidebar');

  if(is_page_template('page-sidebar.php')){
      dynamic_sidebar('right-sidebar');
  }elseif(is_page_template('page-left-sidebar.php')){
      dynamic_sidebar('left-sidebar');

}?>
