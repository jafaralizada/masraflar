<?php include "connect.php"; ?>
     <?php include "header.php"; ?>
     <?php include "sidebar.php";?>
  
        <?php 
                $askusers=$db->prepare("SELECT users_namesurname,users_id FROM users WHERE users_name=:users_name");
                $askusers->execute(array(
                'users_name' => $_SESSION['users_name']
                ));

                foreach ($askusers as $row)
                {
                $kullanici_id= $row['users_id'] ;
                $dateandtime =  date("Y-m-d H:i:s");
                }
        ?>

     
  <!--main content start-->
   <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Gider Ekle</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                  <form action="" method="POST">

                                 <div class="form-group">
                                            <label>Gider Miktarı</label>

                                            <input class="form-control" name="expense_price" type="number" required>
                                     <p class="help-block">Gider Miktarı ekleyin.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Gider Acıklaması</label>
                                            <input class="form-control" name="expense_description" type="text" required>
                                     <p class="help-block">Gider Aciklamasını Buraya Yazın.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Şu Anki Zaman</label>
                                            <input class="form-control" value="<?php echo $dateandtime; ?>" name="expense_date" type="text" required>
                                     <p class="help-block">Zamanı Buraya Yazin.</p>
                                        </div>
                                 
                                        <button type="submit" name="add" class="btn btn-info">Ekle </button>

                                    </form>          		</div>
          	</div>
            
              <?php

                            if(isset($_POST["add"])){

                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

                            $sql = "INSERT INTO expense (expense_description, expense_price, expense_user_id, expense_date)
                            VALUES ('".$_POST["expense_description"]."','".$_POST["expense_price"]."',$kullanici_id,'".$_POST["expense_date"]."')";

                            if ($db->query($sql)) {
                                echo "<script type= 'text/javascript'>alert('Gideriniz Başarıyla Eklendi!');</script>";
                            }else{
                                echo "<script type= 'text/javascript'>alert('Gideriniz Eklenemedi. Bişeyler Yolunda Gitmedi');</script>";
                                }
                                $db = null;

                            }

                ?>

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php include "footer.php";?>
