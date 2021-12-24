    <?php include "connect.php"; ?>
     <?php include "header.php"; ?>
     <?php include "sidebar.php";?>
  


     
  <!--main content start-->
   <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Gelir Ekle</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <form action="" method="POST">

                                 <div class="form-group">
                                            <label>Gelir Miktari</label>
                                            <?php 
$askusers=$db->prepare("SELECT users_namesurname,users_id FROM users WHERE users_name=:users_name");
$askusers->execute(array(
'users_name' => $_SESSION['users_name']
));

foreach ($askusers as $row)
{
$kullanici_id= $row['users_id'] ;
$timestamp = date("Y-m-d h:i:s");
echo $timestamp;
}
        ?>
                                            <input class="form-control" name="income_amount" type="number" required>
                                     <p class="help-block">Gelir Miktari ekleyin.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Gelir Aciklamasi</label>
                                            <input class="form-control" name="income_description" type="text" required>
                                     <p class="help-block">Gelir Aciklamasini Buraya Yazin.</p>
                                        </div>
                                 
                                        <button type="submit" name="add" class="btn btn-info">Ekle </button>

                                    </form>          		</div>
          	</div>
            
              <?php



if(isset($_POST["add"])){

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "INSERT INTO income (income_description, income_amount, income_user_id, income_date)
VALUES ('".$_POST["income_description"]."','".$_POST["income_amount"]."',$kullanici_id, ";

if ($db->query($sql)) {
    echo "<script type= 'text/javascript'>alert('Sipariş Basariyla Eklendi!');</script>";
}else{
    echo "<script type= 'text/javascript'>alert('Sipariş Eklenemedi.');</script>";
    }
    $db = null;


}

?>



		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php include "footer.php";?>
