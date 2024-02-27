<div class=" vh-100 vw-100 overflow-hidden">
    <div class="  w-100 h-100 d-flex justify-content-center align-items-center">
        <div class=" card shadow" style="width: 30rem;">
            <div class=" card-body">
                <div class=" d-flex justify-content-center gap-3">
                    <a class=" btn btn-success text-decoration-underline" href="?page=getbook">ยืมหนังสือ</a>
                    <a class=" btn btn-warning" href="?page=dropbook">คืนหนังสือ</a>
                </div>
                <h3 class=" text-center ">ยืมหนังสือ</h3>
                <div class=" d-flex justify-content-center my-3">
                    <table>
                        <?php include('./controllers/getbook_name.php') ?>
                        <form method="post">
                            <tr>
                                <td>ผุ้ต้องการยืม : </td>
                                <td> <input type="text" name="username"></td>
                                <td><button class=" btn btn-success py-1" name="input_username">ตกลง</button></td>
                            </tr>
                        </form>
                        <?php include('./controllers/getbook_book.php') ?>
                        <form method="post">
                            <tr>
                                <td>รหัสหนังสือ : </td>
                                <td> <input type="text" name="bookid"></td>
                                <td><button class=" btn btn-success py-1" name="input_bookid">ตกลง</button></td>
                            </tr>
                        </form>
                    </table>
                </div>
                <table class=" table table-bordered">
                    <tr>
                        <td>ชื่อ-สกุลผู้ยืม :</td>
                        <td class=" w-75"><?= empty($_SESSION['getbook_name']) ? '' : $_SESSION['getbook_name'] ?></td>
                    </tr>
                    <tr>
                        <td>รหัสหนังสือ :</td>
                        <td><?= empty($_SESSION['getbook_bookid']) ? '' : $_SESSION['getbook_bookid'] ?></td>
                    </tr>
                    <tr>
                        <td>ชื่อหนังสือ :</td>
                        <td><?= empty($_SESSION['getbook_bookname']) ? '' : $_SESSION['getbook_bookname'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="">
                            <div class=" d-flex justify-content-center gap-2 ">
                                <?php include('./controllers/getbook.php') ?>
                                <form method="post">
                                    <button class=" btn btn-success py-1" name="getbook">ยืมหนังสือ</button>
                                </form>
                                <button class=" btn btn-danger py-1">ยกเลิก</button>
                            </div>
                        </td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>