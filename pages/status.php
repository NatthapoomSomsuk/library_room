<div class=" vh-100 vw-100 overflow-hidden">
    <div class="  w-100 h-100 d-flex justify-content-center align-items-center">
        <div class=" card shadow rounded-0"    style="width: 50rem;">
            <div class=" card-header bg-primary text-center text-white fs-3 rounded-0">ข้อมูลสถิติห้องสมุด</div>
            <div class=" card-body text-center px-5">
                <div class=" row  row-cols-2 g-4">
                    <div class=" col">
                        หนังสือทั้หมด (เล่ม)
                        <div class=" card card-body shadow bg-success bg-opacity-10 ">
                            <?php
                             $sqlbookcount = "SELECT * FROM tb_book"; 
                             $sqlbookcount_q = mysqli_query($conn, $sqlbookcount);
                             $booknum = mysqli_num_rows($sqlbookcount_q)
                            ?>
                            <p class=" m-0 fw-bold  display-2"><?= $booknum ?></p>
                        </div>
                    </div>
                    <div class=" col">
                        การใช้งานบริการยืม-คืนหนังสือ (ครั้ง)
                        <div class=" card card-body shadow bg-success bg-opacity-10 ">
                        <?php
                             $sqlbookusecount = "SELECT * FROM tb_borrow_book"; 
                             $sqlbookusecount_q = mysqli_query($conn, $sqlbookusecount);
                             $bookusenum = mysqli_num_rows($sqlbookusecount_q)
                            ?>
                            <p class=" m-0 fw-bold  display-2"><?= $bookusenum ?></p>
                        </div>
                    </div>
                    <div class=" col">
                        สมาชิกทั้งหมด (คน)
                        <div class=" card card-body shadow bg-success bg-opacity-10 ">
                        <?php
                             $sqlmember = "SELECT * FROM tb_member"; 
                             $sqlmember_q = mysqli_query($conn, $sqlmember);
                             $membercount = mysqli_num_rows($sqlmember_q)
                            ?>
                            <p class=" m-0 fw-bold  display-2"><?= $membercount ?></p>
                        </div>
                    </div>
                    <div class=" col">
                        หนังสือค้างส่ง (เล่ม)
                        <div class=" card card-body shadow bg-success bg-opacity-10 ">
                        <?php
                             $sqlrd = "SELECT * FROM `tb_borrow_book` WHERE
                             br_date_rt = '0000-00-00'"; 
                             $sqlrd_q = mysqli_query($conn, $sqlrd);
                             $rd = mysqli_num_rows($sqlrd_q)
                            ?>
                            <p class=" m-0 fw-bold  display-2"><?= $rd ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>