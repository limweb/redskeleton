<?php 

class App_View_Widget_Register extends App_View_Widget {
  
  /**
      User registers
  */
  public static function register ( ) {
    $bean = Model_User::createBean($_REQUEST);
    $_SESSION['user'] = $bean->export();
    RedView::end('message', 'Your account has been created.');
  }
  
}

