<?php
session_start();
require_once "utils/LoginAccess.php";
giveAccess();

?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once "pages/header.php";
?>

<body class="hold-transition skin-blue sidebar-mini">
  <?php require_once "pages/reload.php"; ?>
  <div class="wrapper boxed-wrapper">
    <?php
    require_once "pages/navbar.php";

    ?>
    <?php
    require_once "pages/sidebar.php";
    ?>

    <div class="content-wrapper">
      <div class="content-header sty-one">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><i class="fa fa-angle-right"></i> Dashboard</li>
        </ol>
      </div>

      <?php
      if (!empty($_GET['route'])) {
        require_once "pages/content.php";
      } else {
        require_once "pages/main.php";
      }

      ?>
      <?php
      require_once "pages/footer.php";

      ?>
    </div>

    <?php
    require_once "pages/js.php";

    ?>
</body>

</html>