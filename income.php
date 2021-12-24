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
                                            <th>Yil Seciniz</th>
                                     
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <?php      
 
   /*                   $query = $db->prepare("DELETE FROM urunler where 
                      urunler_id = :id");
                      $sonuc = $query->execute(array(
                          'id'=> $_GET['urun_sil']
                      ));
                      if($sonuc)
{
    echo "<script type= 'text/javascript'>alert('Urun Basariyla Silindi!');</script>";

}
else 
{
    echo "<script type= 'text/javascript'>alert('Urun Silinemedi!');</script>";
    $db = null;

}*/
                      
                                      $veriler = $db->query("SELECT * FROM years ORDER BY year DESC")->fetchAll();


                                      foreach ($veriler as $row)
                                      {
                                      
     
     ?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['year']."<br />\n"; ?></td>
                             
                                            <td> <a href="<?php echo "months.php?year=".$row['year'];?>" class="btn btn-info" title="işlem yap"><i class="fa fa-eye fa-1x"></i></a> </td>
                                               <?php }?>
                                        </tr>

                              </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
