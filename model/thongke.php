<?php 
function tk_danhmuc(){
    $sql = "select danhmuc.id_dm,danhmuc.ten_dm,count(sanpham.id_dm) as sl from danhmuc
    left join sanpham on sanpham.id_dm = danhmuc.id_dm
    group by danhmuc.id_dm order by danhmuc.id_dm DESC";
    $result = pdo_query($sql);
    return $result;
}

function tk_sanpham_banchay(){
    $sql = "select sanpham.name_sp,sanpham.gia,sanpham.image, (count(cart.idpro)*cart.sl) as sl from sanpham
    join cart on cart.idpro = sanpham.id_sp
    order by (count(cart.idpro)*cart.sl) desc limit 0,10";
}

function top10sp_banchay (){
    $sql = "select * from cart order by count(idpro) desc ;";
}

function top10_view(){
    $sql = "select * from sanpham order by luot_xem desc limit 0,10";
    return pdo_query($sql);
}



function bieudo(){
    $sql = "select danhmuc.ten_dm as 'tendm', count(sanpham.id_sp) as 'sl' from sanpham 
    left join danhmuc on danhmuc.id_dm = sanpham.id_dm 
    group by danhmuc.id_dm order by danhmuc.id_dm DESC;";
   
    return  pdo_query($sql);
}
?>