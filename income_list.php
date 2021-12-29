<?php include "connect.php"; ?>
     <?php include "header.php"; ?>
     <?php include "sidebar.php";?>
  
     <?php
if (!empty($_GET)) {
if ($_GET['durum'] == "sene_eklendi") {
    echo "<script type= 'text/javascript'>alert('Sene Başarıyla eklendi.');</script>";
}}else {
    echo "Sene Eklenemedi";
}

?>

  <!--main content start-->
   <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Plan Ekle</h3>
                                                              <!-- BASLANGIC -->

                                                              <h5 class="centered">  
                                                <?php 


                                                $askusers=$db->prepare("SELECT users_namesurname,users_id FROM users WHERE users_name=:users_name");
                                                $askusers->execute(array(
                                                'users_name' => $_SESSION['users_name']
                                                ));


                                                foreach ($askusers as $row)
                                                {
                                                echo "Hoş Geldin:  ".$row['users_namesurname'] ;
                                                echo " -- ID:  ".$row['users_id'] ;
                                                $kullanici_id= $row['users_id'] ;


                                                }
                                                ?></h5>
                                                            <!-- BITIS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sipariş Listesi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                                        <th>ID</th>
                                                        <th>Aciklama</th>
                                                        <th>Tutar</th>
                                                        <th>Tarih</th>

                                        </tr>
                                    </thead>
                                                <?php     
                                                        $veriler = $db->query("SELECT * FROM income WHERE $kullanici_id = income_user_id  ORDER BY income_user_id  DESC")->fetchAll();
                                                        foreach ($veriler as $row)
                                                        { 
                                                ?>

                                        <tbody>
                                        <tr>
                                            
                                                        <td><?php echo $row['income_id']."<br />\n"; ?></td>
                                                        <td><?php echo $row['income_description']."<br />\n"; ?></td>
                                                        <td><b><?php echo $row['income_price']."<br />\n"; ?></td></b>
                                                        <td><?php echo $row['income_date']."<br />\n"; ?></td>

                                                       <!-- <td> <a href="<?php /*echo "months.php?year=".$row['year'];*/?>" class="btn btn-info" title="işlem yap"><i class="fa fa-eye fa-1x"></i></a> </td>-->
                                                <?php }?>
                                        </tr>

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <?php     
                                                       /* $veriler = $db->query("SELECT * FROM income WHERE $kullanici_id = income_user_id  ORDER BY income_user_id  DESC")->fetchAll();*/
                                                       $Fiyat=$db->prepare("SELECT SUM(income_price) AS sayi FROM income");
                                                       $Fiyat->execute();
                                                      $FiyatYaz= $Fiyat->fetch(PDO::FETCH_ASSOC);
                                                      echo "Toplam Gelir: ".$FiyatYaz['sayi']." TL";
                                                    


                                                      $Price_Expense=$db->prepare("SELECT SUM(expense_price) AS sayi_expense FROM expense");
                                                      $Price_Expense->execute();
                                                     $FiyatYazGider= $Price_Expense->fetch(PDO::FETCH_ASSOC);
                                                     echo "     Toplam Gider: ".$FiyatYazGider['sayi_expense']." TL";

                                                     $a = $FiyatYazGider['sayi_expense'];
                                                     $b = $FiyatYaz['sayi'];
                                                     $c =  $b-$a;
                                                     echo "     Kalan Paraniz: ".$c." TL";

                                                     
                                                      ?>
                                                
                     <!-- End  Kitchen Sink -->
                </div>
                
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

      <!--main content end-->
      <?php include "footer.php";?>
