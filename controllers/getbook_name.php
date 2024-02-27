<?php
if (isset($_POST['input_username'])) {
    $username = $_POST['username'];
    if (empty($username)) {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'ไม่พบ..',
                timer: 1500,
                text: 'โปรดทำการกรอกข้อมูล',
            })
        </script>
        <?php
    } else {
        $userser = " SELECT * FROM tb_member WHERE m_user = '$username'";
        $userser_q = mysqli_query($conn, $userser);
        if (mysqli_num_rows($userser_q) >= 1) {
            $username = mysqli_fetch_assoc($userser_q);
            $_SESSION['getbook_name'] = $username['m_name'];
            $_SESSION['getbook_nameid'] = $username['m_user'];
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'ไม่พบ..',
                    timer: 1500,
                    text: 'เราไม่พบผู้ใช้งานนี้ในระบบ',
                })
            </script>
            <?php
        }
    }
} 
?>