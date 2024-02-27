<div class=" vh-100 vw-100 overflow-hidden">
    <div class="  w-100 h-100 d-flex justify-content-center align-items-center">
        <div class=" card shadow">
            <div class=" card-body text-center">
                <h5 class=" fw-bold">
                    การจัดการข้อมูลการยืมขคืนหนังสือ
                </h5>
               
                <form method="post">
                    <div class=" d-flex  justify-content-center gap-2 ">
                        <input type="text" class=" form-control " name="serd_getbook_detail" placeholder="กรอกข้อมูลการค้นหา">
                        <button class=" btn btn-success" name="serd_getbook">ค้นหา</button>
                    </div>
                </form>
                <div class=" d-flex justify-content-end my-2 gap-3">
                    <a href="?page=getbook" class=" btn btn-outline-primary">ยืม-คืนหนังสือ</a>
                    <a href="?page=status" class=" btn btn-outline-warning">ข้อมูลสถิติ</a>
                </div>
                <table class=" table table-bordered">
                    <thead>
                        <tr>
                            <td>รหัสหนังสือ</td>
                            <td>ชื่อหนังสื่อ</td>
                            <td>ผู้ยืม-คืน</td>
                            <td>วันที่ยืม</td>
                            <td>วันที่คืน</td>
                            <td>ค่าปรับ</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php include('./controllers/serdbook.php') ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>