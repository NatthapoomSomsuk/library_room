<?php
if (isset($_POST['input_bookid'])) {
    $bookid = $_POST['bookid'];
    if (empty($bookid)) {
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
        $bookidser = " SELECT * FROM tb_book WHERE b_id = '$bookid'";
        $bookidser_q = mysqli_query($conn, $bookidser);
        if(mysqli_num_rows($bookidser_q)>=1){
            $book = mysqli_fetch_assoc($bookidser_q);
            $_SESSION['getbook_bookid'] = $book['b_id'];
            $_SESSION['getbook_bookname'] = $book['b_name'];
        }else{
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'ไม่พบ..',
                    timer: 1500,
                    text: 'ไม่พบรหัสหนังสือนี้',
                })
            </script>
            <?php
        }
    }
} 
?>