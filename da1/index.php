<?php
session_start();

ob_start();

require_once __DIR__ . "./app/models/pdo.php";
require_once __DIR__ . "./app/models/client/client.php";


// ===================================CAP NHAT LẠI TRẠNG THÁI 2 CỦA SẢN PHẨM========================
// Nói cách khác, nếu không có bản ghi nào trong bảng bien_the có id_sp khớp với 
// san_pham.id_sp, hoặc nếu tổng số lượng (soluong_bt) của các bản ghi đó là 0, 
// thì trangthai2_sp sẽ được đặt thành 2.
$sql = "UPDATE san_pham
            SET trangthai2_sp = 
            CASE 
              WHEN COALESCE((SELECT SUM(soluong_bt) FROM bien_the WHERE bien_the.id_sp = san_pham.id_sp), 0) = 0 THEN 2 
              ELSE 1 
            END;";
pdo_exe($sql);


// ==================================CẬP NHẬT LẠI TRẠNG THÁI CỦA  KHUYẾN MÃI====================
$sql = "CALL capnhat_trangthai_km()";
pdo_exe($sql);



// =================================THONG TIN CUA SHOP==============================================
$shop = list_shop();

// =================================CAC DANH MUC ====================================================
$list_dm = list_dm("");

// print_r($_SESSION["cart"]);


require_once __DIR__ . "./app/views/client/header/header.php";
require_once __DIR__ . "./app/controllers/ClientController.php";
require_once __DIR__ . "./app/views/client/footer/footer.php";

ob_end_flush();
