
      <?php include "header.php"; ?>
     <?php include "sidebar.php";?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
							<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3>30</h3>
					  			<h6>Günlük Limitiniz .</h6>
                  			</div>
					  			<p>Günlük Limitiniz Belirlenmiştir!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3>-15</h3>
					  			<h6>Harcadığınız Fazla Limit.</h6>

                  			</div>
					  			<p>Harcadığınız Fazla Limit.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3>23</h3>
					  			<h6>Aylık Harcama.</h6>

                  			</div>
					  			<p>Aylık Harcama.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3>+10</h3>
					  			<h6>Aylık Fazla Harcama.</h6>

                  			</div>
					  			<p>Aylık Fazla Harcama.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3>1550</h3>
					  			<h6>Toplam Harcamalarınız.</h6>

                  			</div>
					  			<p>Toplam Harcamalarınız.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
                  
					<div class="row mt">
                     
					</div><!-- /row -->	

      				<!-- BUTTON BLOCK -->
      				<div class="showback">
						<a  class="btn btn-default btn-lg btn-block" href="income_add.php">Gelir Ekle</a>
						<a  class="btn btn-default btn-lg btn-block" href="income_list.php">Gelirleri Listele</a>
						<a  class="btn btn-default btn-lg btn-block" href="expense_add.php">Gider Ekle</a>
						<a  class="btn btn-default btn-lg btn-block" href="expense_list.php">Giderleri Listele</a>

      				</div><!--/showback -->					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
				  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>BILDIRIMLER</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Dakika Önce</muted><br/>
                      		   <a href="#">Ali Osmanlı</a> Satış Yaptı.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Saat Önce</muted><br/>
                      		   <a href="#">Ali Osmanlı</a> para harcadı.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Saat Önce</muted><br/>
                      		   <a href="#">Ali Osmanlı</a> 10 tl harcadı.<br/>
                      		</p>
                      	</div>
                      </div>
                     

                       <!-- USERS ONLINE SECTION -->
					

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
<?php include "footer.php";?>