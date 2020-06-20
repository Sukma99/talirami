<?php
   session_start();
   
   if(session_destroy() && isset($_SESSION['login_user'])) {
	  unset($_SESSION['login_user']);
      header("Location: index.php?logout=berhasil");
	   
   }

?>