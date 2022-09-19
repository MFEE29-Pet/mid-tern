<?php include __DIR__ . './NOT_TOUCH/admin_index/parts/connect_db.php';
$pageName = 'indexpage';
?>
<?php include __DIR__ . './NOT_TOUCH/admin_index/parts/index_header.php'; ?>
<style>
  .index_bg {
    background: url('NOT_TOUCH/images/karsten-winegeart-5PVXkqt2s9k-unsplash.jpg');
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 90% center;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .table-con {
    width: 100%;
    margin-top: 0px;
  }

  .index_box {
    width: 1000px;
    display: flex;
    justify-content: flex-end;
  }

  .left {
    color: #fff;
    background-color: rgba(255, 255, 255, .24);
    backdrop-filter: blur(6px);
    box-sizing: border-box;
    padding: 30px;
    border-radius: 10px;
  }

  h1 {
    font-size: 60px;
    line-height: 80px;
    color: #fff;
    font-family: 'Permanent Marker', cursive;
  }

  h1:nth-child(3),
  h1:nth-child(4) {
    color: #000000;
  }
</style>
<?php include __DIR__ . './NOT_TOUCH/admin_index/parts/index_navber.php'; ?>
<div class="index_bg">
  <div class="index_box">
    <div class="left animate__animated animate__zoomIn">
      <h1 class="animate__animated animate__fadeIn animate__delay-1s">Welcome</h1>
      <h1 class="animate__animated animate__fadeIn animate__delay-1s">To</h1>
      <h1 class="animate__animated animate__fadeIn animate__delay-1s">PET</h1>
      <h1 class="animate__animated animate__fadeIn animate__delay-1s">FEMILY</h1>
    </div>
  </div>

</div>
<?php include __DIR__ . './NOT_TOUCH/admin_index/parts/index_script.php'; ?>
<?php include __DIR__ . './NOT_TOUCH/admin_index/parts/index_footer.php'; ?>