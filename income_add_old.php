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
                                            <label>Plan numarası</label>
                                            <input class="form-control" name="plan_no" type="text" required >
                                            <p class="help-block">Plan numarasını yazınız.</p>
                                        </div>
                                 <div class="form-group">
                                            <label>Plan İsmi</label>
                                            <input class="form-control" name="plan_name" type="text" required>
                                     <p class="help-block">Plan ismini ekleyiniz.</p>
                                        </div>
                                            <!--  <div class="form-group">
                                            <label>Ürün Açıklaması</label>
                                            <textarea name="urun_aciklama" class="form-control" rows="3" required></textarea>
                                        </div>-->
                                        <div class="form-group">
                                            <label>Plan date</label>
                                            <input class="form-control" name="plan_date" type="text" required>
                                     <p class="help-block">Siparişin Verilme dateni Buraya Kopyalayın.</p>
                                        </div>
                                 
                                        <button type="submit" name="add" class="btn btn-info">Ekle </button>

                                    </form>          		</div>
          	</div>
            
              <?php
if(isset($_POST["add"])){
/*    
try {
    $db = new PDO ("mysql:host=localhost;dbname=visne;charset=utf8",'root','12345');
//echo 'Baglanti Kuruldu';*/

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "INSERT INTO plans (plan_no, plan_name, plan_date)
VALUES ('".$_POST["plan_no"]."','".$_POST["plan_name"]."','".$_POST["plan_date"]."')";

if ($db->query($sql)) {
    echo "<script type= 'text/javascript'>alert('Sipariş Basariyla Eklendi!');</script>";
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
