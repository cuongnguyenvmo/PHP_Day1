<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$result = '';
$error = '';
// if (isset($_POST['tim_kiem'])){
//     if(empty($_POST['array'])){
//          $error = 'Vui long nhap so sinh vien';
//     }else{
//         if($_POST['array']== 1){
//              $result = 'Ten sinh vien la :' . $students;
//         }elseif($_POST['array'] == 2){
//              $result = 'Ten sinh vien la :' . $students;
//         }elseif($_POST['array'] >= 3){
//             $error = 'So sinh vien ko ton tai';
//         }
//     }
// }
$students = array(
    0 => 'Nguyen Van A',
    1 => 'Nguyen Van B'
    ); 
if (isset($_POST['tim_kiem'])){
    if(($_POST['array']) <= 0){
         $error = 'Vui long nhap so sinh vien';
    }else{
        if($_POST['array'] == 1){
             $result = 'Ten sinh vien la :' . $students[0];
        }elseif($_POST['array'] == 2){
            $result = 'Ten sinh vien la :' . $students[1];
        }elseif($_POST['array']>= 3){
            $error = 'So sinh vien ko ton tai';
        }
    }
}
        
?>
    <h1>Kiem tra danh sach hoc sinh</h1>
    <form action="" method="POST">
        <h2>Vui long nhap so thu tu sinh vien :</h2>
        <input type="number" style="width: 80px"  name="array" />  
        <button type="submit" style="width: 3%" value="search" name="tim_kiem">Search</button>
        </form>
        <h3 style="color: red;"><?php echo $error ; ?></h3>
        <h3 style="color: green;"><?php echo $result; ?></h3>
</body>
</html>