<?php
 if(isset($_POST['getbook'])){
    $book= $_SESSION['getbook_bookid'];
    $usernam = $_SESSION['getbook_nameid'];
    $datenow = date("Y-m-d");
    $sqlgetbook = "INSERT INTO  tb_borrow_book VALUE ('$datenow','0000-00-00','$book','$usernam',0)";
    $sqlgetbook_q = mysqli_query($conn, $sqlgetbook);
    if($sqlgetbook_q){
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'บันทึกข้อมูลสำเร็จ',
                timer: 1500,
                text: '',
            })
        </script>
        <?php
        $_SESSION['getbook_bookid']='';
        $_SESSION['getbook_nameid']='';
        $_SESSION['getbook_name']='';
        $_SESSION['getbook_bookname']='';
    }else{
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'ERROR',
                timer: 1500,
                text: 'เกิดข้อผิดพลาด',
            })
        </script>
        <?php
    }
 } 
?>