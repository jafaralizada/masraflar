<?php include "connect.php"; ?>
     <?php include "header.php"; ?>
     <?php include "sidebar.php";?>
  
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
                                            <th>Plan Kodu</th>
                                            <th>Plan Ismi</th>
                                           <!-- <th>Ürün Resmi</th>-->
                                          
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <?php  

$veriler=$db->prepare("SELECT * FROM month WHERE month_year=:year ORDER BY month_year DESC");
$veriler->execute(array(
    'year' => $_GET['year']
));

$data=$veriler->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $row) {


?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['month_year']."<br />\n"; ?></td>
                                 
                                 
                                                <td><?php echo $row['month_name']."<br />\n"; ?></td>
                                            
                                            
                                   

                                       
                                            <td> <a href="<?php echo "expense.php?month=".$row['month_id'];?>" class="btn btn-info" title="işlem yap"><i class="fa fa-eye fa-1x"></i></a> </td>
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
