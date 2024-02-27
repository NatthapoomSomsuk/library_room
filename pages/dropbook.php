<div class=" vh-100 vw-100 overflow-hidden">
    <div class="  w-100 h-100 d-flex justify-content-center align-items-center">
        <div class=" card shadow" style="width: 30rem;">
            <div class=" card-body">
                <div class=" d-flex justify-content-center gap-3">
                    <a class=" btn btn-success " href="?page=getbook">ยืมหนังสือ</a>
                    <a class=" btn btn-warning text-decoration-underline" href="?page=dropbook">คืนหนังสือ</a>
                </div>
                <h3 class=" text-center ">คืนหนังสือ</h3>
                <div class=" d-flex justify-content-center my-3">
                    <table>
                        <tr>
                            <td>รหัสหนังสือที่ต้องการคืน : </td>
                            <td> <input type="text"></td>
                            <td><button class=" btn btn-success py-1">ต้นหา</button></td>
                        </tr>
                    </table>
                </div>
                <table class=" table table-bordered">
                    <tr>
                        <td>รหัสหนังสือ :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ชื่อหนังสือ :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ผุ้ยืม-คืนหนังสือ :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>วันที่ยืม :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ค่าปรับ :</td>
                        <td> <input type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="">
                            <div class=" d-flex justify-content-center gap-2 ">
                                <button class=" btn btn-success py-1">คืนหนังสือ</button>
                                <button class=" btn btn-danger py-1">ยกเลิก</button>
                            </div>
                        </td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>