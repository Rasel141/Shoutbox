<?php
include_once 'Classes/Shout.php';
$shout = new Shout();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper clr">
      <header class="headsection">
        <h2> Basic Shoutbox with PHP OOP & MySLi </h2>

      </header>
        <section class="content clr">
            <div class="box">
              <ul>
        <?php
            $getData = $shout->getAllData();
            if($getData){
              while ($data = $getData->fetch_assoc()) { ?>
                <li> <span> <?php echo $data['time']; ?> </span> - <b> <?php echo $data['name']; ?> </b> <?php echo $data['body']; ?> </li>
        <?php    } } ?>

              </ul>
            </div>
       <?php
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $shoutdata = $shout->insertData($_POST);
          }


        ?>
            <div class="shoutform clr">
              <form action="" method="post">
                <table>
                  <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type= "text" name="name" placeholder="Enter your Name" required/></td>
                  </tr>
                  <tr>
                    <td>body</td>
                    <td>:</td>
                    <td><input type= "text" name="body" placeholder="Enter your Text" required/></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type= "submit" value="Shout It"/></td>
                  </tr>
                </table>
              </form>
            </div>
        </section>
        <footer class="footsection">
          <h2>&copy; Copyright Rasel Hossain</h2>
        </footer>
    </div>

  </body>
</html>
