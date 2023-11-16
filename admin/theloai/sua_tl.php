<div class="app-content">
    <div class="container"  style="margin-top: 50px">
        <form method="post" action="index.php?act=sua_tl&id=<?php echo $ten_tl_old['id'] ;?>">
            <div class="form-group">
                <label for="exampleInputPassword1">Tên thể loại</label>
                <input type="text" class="form-control" name="ten_tl" id="exampleInputPassword1" value="<?php echo $ten_tl_old['ten_tl'] ;?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <a href="index.php"><button  class="mr20 btn btn-primary" type="button">Danh sách thể loại</button></a>
        </form>
    </div>
</div>
