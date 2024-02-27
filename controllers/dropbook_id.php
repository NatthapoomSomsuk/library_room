<?php
if (isset($_POST['input_bookid'])) {
    $bookid = $_POST['bookid'];
    $sqlserbook = "SELECT * FROM tb_borrow_book
    INNER JOIN tb_member ON tb_member.m_user = tb_borrow_book.m_user
    INNER JOIN tb_book ON tb_book.b_id = tb_borrow_book.b_id
     WHERE b_id='$bookid' AND br_date_rt='0000-00-00' LIMIT 1 ";
    $sqlserbook_q = mysqli_query($conn,$sqlserbook);
    if($sqlserbook_q){
        $data = mysqli_fetch_assoc($sqlserbook_q);
        $_SESSION['drop_bookid'] = $data['b_id'];
        $_SESSION['drop_bookname'] = $data['b_name'];
        $_SESSION['drop_bookuser'] = $data['m_name'];
        $_SESSION['drop_bookusername'] = $data['m_user'];
        $_SESSION['drop_bookdate'] = $data['m_user'];
    }
} 
?>