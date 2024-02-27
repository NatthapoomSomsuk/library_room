<?php
if (isset($_POST['serd_getbook'])) {
    $detail = $_POST['serd_getbook_detail'];
    if (empty($detail)) {
        $sql_listgetbook  = "SELECT * FROM `tb_borrow_book`
        INNER JOIN tb_member ON tb_member.m_user = tb_borrow_book.m_user
        INNER JOIN tb_book ON tb_book.b_id = tb_borrow_book.b_id";
        $sql_listgetbook_q = mysqli_query($conn, $sql_listgetbook);
        while ($data = mysqli_fetch_assoc($sql_listgetbook_q)) { ?>
            <tr>
                <td><?= $data['b_id'] ?></td>
                <td><?= $data['b_name'] ?></td>
                <td><?= $data['m_name'] ?></td>
                <td><?= $data['br_date_br'] ?></td>
                <td><?= $data['br_date_rt'] ?></td>
                <td><?= $data['br_fine'] ?></td>
            </tr>
<?php }
    }else{
        $sql_listgetbook_serd = "SELECT * FROM `tb_borrow_book`
        INNER JOIN tb_member ON tb_member.m_user = tb_borrow_book.m_user
        INNER JOIN tb_book ON tb_book.b_id = tb_borrow_book.b_id
        WHERE `b_name` LIKE '%$detail%' OR m_name LIKE '%$detail%'";
        $sql_listgetbook_q = mysqli_query($conn, $sql_listgetbook_serd);
        while ($data = mysqli_fetch_assoc($sql_listgetbook_q)) { ?>
            <tr>
                <td><?= $data['b_id'] ?></td>
                <td><?= $data['b_name'] ?></td>
                <td><?= $data['m_name'] ?></td>
                <td><?= $data['br_date_br'] ?></td>
                <td><?= $data['br_date_rt'] ?></td>
                <td><?= $data['br_fine'] ?></td>
            </tr>
<?php }
    }
}else{
    $sql_listgetbook  = "SELECT * FROM `tb_borrow_book`
    INNER JOIN tb_member ON tb_member.m_user = tb_borrow_book.m_user
    INNER JOIN tb_book ON tb_book.b_id = tb_borrow_book.b_id";
    $sql_listgetbook_q = mysqli_query($conn, $sql_listgetbook);
    while ($data = mysqli_fetch_assoc($sql_listgetbook_q)) { ?>
        <tr>
            <td><?= $data['b_id'] ?></td>
            <td><?= $data['b_name'] ?></td>
            <td><?= $data['m_name'] ?></td>
            <td><?= $data['br_date_br'] ?></td>
            <td><?= $data['br_date_rt'] ?></td>
            <td><?= $data['br_fine'] ?></td>
        </tr>
<?php }
}
