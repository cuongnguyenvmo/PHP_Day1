<!DOCTYPE html>
<html>

<head>
    <title>Giải phương trình bậc nhất</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style>
    body {
        text-align: center;
    }
</style>

<body>
    <?php
    $result = '';
    if (isset($_POST['calculate'])) {
        if (isset($_POST['a']) && isset($_POST['b'])) {
            if (is_numeric($_POST['a']) == 1 && is_numeric($_POST['b']) == 1) {
                $a = $_POST['a'];$b = $_POST['b'];
                if ($a == 0) {
                    $result = 'Loi chia cho 0';
                } else {
                    $result =  -$b / $a;
                }
            } else {
                $result = 'Bạn nhap sai dinh dang ';
            }
        } else {
            $result = 'Bạn chua nhập đủ thông tin';
        }
    }
    ?>
    <h1>Giải phương trình bậc nhất</h1>
    <form method="post" action="">
        <div>
            <input type="text" style="width: 80px" name="a" />x
            +
            <input type="text" style="width: 80px" name="b" /> = 0
        </div>
        <button class="btn btn-primary" style="margin:3%" type="submit" value="submit" name="calculate">Tinh</button>
    </form>
    <h4><?php echo $result; ?></h4>
</body>

</html>