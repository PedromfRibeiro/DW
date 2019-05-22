<?php
if(isset($_POST["Logout"]))
{

    UserController::Logout();
}
?>
<script type="text/javascript">window.location="?page=MainPage"</script>
