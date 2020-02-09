<?php include "connect.php"; ?>
     <?php include "header.php"; ?>
     <?php include "sidebar.php";?>
  
  <!--main content start-->
   <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Sene Ekle</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <form action="" method="POST">

                                 <div class="form-group">
                                            <label>Sene</label>
                                            <input class="form-control" name="year" type="text" required>
                                     <p class="help-block">Sene Ekleyiniz.</p>
                                        </div>

                                        
                                 
                                        <button type="submit" name="year_add" class="btn btn-info">Ekle </button>

                                    </form>          		</div>
          	</div>
              <?php 


$askusers=$db->prepare("SELECT users_namesurname,users_id FROM users WHERE users_name=:users_name");
$askusers->execute(array(
'users_name' => $_SESSION['users_name']
));


foreach ($askusers as $row)
{
    echo "Hoş Geldin:  ".$row['users_namesurname'] ;
}
?>
              <?php
if(isset($_POST["year_add"])){
/*    
try {
    $db = new PDO ("mysql:host=localhost;dbname=visne;charset=utf8",'root','12345');
//echo 'Baglanti Kuruldu';*/

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "INSERT INTO years ( year, year_user_id)
VALUES ('".$_POST["year"]."','".$row['users_id']."')";

if ($db->query($sql)) {
    header ("Location:plans.php?durum=sene_eklendi");
}else{
    echo "<script type= 'text/javascript'>alert('Sipariş Eklenemedi.');</script>";
    }
    $db = null;
/*
} catch (PDOException $e) {
    echo $e->getMessage();
}*/

}

?>



		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php include "footer.php";?>
