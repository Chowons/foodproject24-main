<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>

<?php 

    include_once 'controllers/Comment.php';
    $com = new Comment();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="./images/anya.png" type="image/x-icon">
  <title>Comment</title>
  <link rel="stylesheet" href="./reset.css">
  <!-- <link rel="stylesheet" href="./globalStyles.css"> -->
  <!-- <link rel="stylesheet" href="./components.css"> -->
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./home.css">
  <link rel="stylesheet" href="./soi.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <div class="box">
        <ul>
            <?php 
                if($result = $com->indexc()) {
                while ($data = $result->fetch_assoc()) {
            ?>
                <li>
                    <b><?php echo $data['name']; ?></b> - <?php echo $data['comment']; ?> - <?php echo $com->dateFormat($data['comment_time']); ?>
                </li>
                <?php } ?>
            <?php }?>
        </ul>
    </div>

    <br><br>

    <center>
    <?php 
    
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo "<span style='color: green; font-size: 20px'>".$msg."</span>";
        }

    ?>

    <form action="post_comment.php" method="post">
        <table>
            <tr>
                <td>Your Name:</td>
                <td><input type="text" name="name" placeholder="Please enter your name" style="width: 230px; height: 30px;"></td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td>
                    <textarea name="comment" cols="30" rows="10" placeholder="Please enter your comment"></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Post" style="width: 235px; height: 40px;"></td>
            </tr>
        </table>
    </form>
    </center>
    
</body>
</html>