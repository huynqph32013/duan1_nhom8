
<div class="wrapperadddm">
<div class="col-md-8">
    <h3>Sửa danh mục sản phẩm</h3>
    <form method="post" action="?act=editdm">
        <input type="hidden" value="<?php echo $dm['id_dm']?>"name="iddm">
            <div class="adddm">
            <div class="inputtdm">
            <input type="text" class="form-control" id="tendm" value="<?php echo $dm['ten_dm']?>" name="tendm" />
            </div>
            <div class="btndm">
            <button type="submit" class="btn btn-primary" name="btnsub">Sửa</button>
        
            </div>
        </div>
    </form>
</div>
</div>