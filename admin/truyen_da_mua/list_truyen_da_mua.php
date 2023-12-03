<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
<form action="" method="post">
        <table class="table">
  <thead>
    <tr>
      <th scope="col" width="300px">Tên truyện</th>
      <th scope="col">Số lượng người mua</th>
      <th scope="col">Chi tiết</th>
    </tr>
  </thead>
  <tbody>
    <form action="" method="post">
    <?php
    if(isset($so_truyen_da_mua)){
        foreach ($so_truyen_da_mua as $key) {
            echo '<tr>
            <th scope="row">'.$key['ten_truyen'].'</th>
            <td>'.$key['so_luong_nguoi_mua'].'</td>
            <td><a href="index.php?act=tai_khoan_mua_truyen&id_truyen='.$key['id_truyen'].'&ten_truyen='.$key['ten_truyen'].'&gia='.$key['gia'].'">Chi tiết</a></td>
          </tr>';
        }   
    }
    ?>
    </form>
  </tbody>
</table>
</form>
  </main>