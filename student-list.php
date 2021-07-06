<?php
require './libs/students.php';
$students = get_all_students();
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <!-- <a href="student-list.php">Danh sach sinh viên</a> <br/> <br/> -->
    <div align="center">
            <form action="search.php" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
         
        // // Phần code PHP xử lý tìm kiếm
        // if (isset($_REQUEST['ok'])) {
        //     $search = addslashes($_GET['search']);
        //     if (empty($search)) {
        //         echo "Yeu cau nhap du lieu vao o trong";
        //     } else {
        //         // // Kết nối sql
        //         $conn = mysqli_connect('localhost', 'admin', '1', 'qlsv_db');
        //         mysqli_set_charset($conn, 'utf8');
        //         if (!$conn){
        //             die ('ket noi that bai :' .mysqli_connect_error());
        //         }else{
        //             echo 'ket noi thanh cong CSDL';
        //         };

        //         // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
        //         $query = "SELECT * from tb_sinhvien where sv_name like '%$search%'";
        //         // Thực thi câu truy vấn
        //         $sql = mysqli_query($conn, $query);
 
        //         // Đếm số đong trả về trong sql.
        //         $num = mysqli_num_rows($sql);
 
        //         // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
        //         if ($num > 0 && $search != "") 
        //         {
        //             // Dùng $num để đếm số dòng trả về.
        //             // echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
        //             // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
        //             echo '<table border="1" cellspacing="0" cellpadding="10">';
        //             while ($row = mysqli_fetch_assoc($sql)) {
        //                 echo '<tr>';
        //                     echo "<td>{$row['sv_name']}</td>";
        //                     echo "<td>{$row['sv_sex']}</td>";
        //                     echo "<td>{$row['sv_birthday']}</td>";
        //                 echo '</tr>';
        //             }
        //             echo '</table>';
        //         } 
        //         else {
        //             echo "Khong tim thay ket qua!";
        //         }
        //     }
        // }
        // ?>
    
        <h1>Danh sách sinh vien</h1>
        <a href="student-add.php">Thêm sinh viên</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Birthday</td>
                <td>Options</td>
            </tr>
            <?php foreach ($students as $item){ ?>
            <tr>
                <td><?php echo $item['sv_id']; ?></td>
                <td><?php echo $item['sv_name']; ?></td>
                <td><?php echo $item['sv_sex']; ?></td>
                <td><?php echo $item['sv_birthday']; ?></td>
                <td>
                    <form method="post" action="student-delete.php">
                        <input onclick="window.location = 'student-edit.php?id=<?php echo $item['sv_id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['sv_id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>