   <?php

  include "../koneksi.php";
   include "header.php";
   $kri=mysqli_query($koneksi,"SELECT  * FROM `tabel_kriteria` GROUP by kriteria");
                            $ea=mysqli_num_rows($kri);
							$los=$ea;
							echo $los;
   ?>

   
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Hasil Perhitungan</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			
			
		</div>
		<!-- /.ico-item -->
		
<a class="ico-item mdi mdi-logout" href="log-out.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"></a>

	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
</div>
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
			<div class="col-lg-12 col-xs-12">
			<div class="col-xs-12">
			<div class="box-content">
					<h4 class="box-title"> Perhitungan </h4>
					 <table class="table table-striped table-hover table-bordered">
                              <thead>
                              <tr>
                                  <th  rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                                  <th colspan="<?php echo $los+1;?>" class="text-center">kriteria</th>
                              </tr>
							     <tr>
								  <?php 
							    $i=1;
                            $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` group by kriteria order by id_kriteria");
                            while($res=mysqli_fetch_array($kriteria_a)){
							   ?>
                                  <th><?php echo $res['kriteria'];?></th>
                                  
							<?php } ?>	
							<th>Voting</th>
                              </tr>
                              </thead>
                              <tbody>
					   <?php 
							    
                            $tp=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` join agen_tour on tabel_kriteria.sub=agen_tour.id_agen_tour group by agen_tour");
                            while($r=mysqli_fetch_array($tp)){
								$krite=$r['kriteria'];
								$id_agen=$r['id_agen_tour'];
							   ?>
                              <tr>
							       <td><?php echo $r['agen_tour']; ?></td>
							      <?php  $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` where   sub='$id_agen'");
                            while($res=mysqli_fetch_array($kriteria_a)){ ?>
							<td> <?php echo $res['nama_kriteria'];
							}								?></td>
                                 <td><?php $c=mysqli_query($koneksi,"SELECT count(id_agen_tour) as rok FROM `tabel_voting` where   id_agen_tour='$id_agen' ");
								 
                            while($d=mysqli_fetch_array($c)){ 
							echo $d['rok'];
						
							}?></td>	
                              </tr>
							<?php }
							?>
							
                             </tbody>
                     </table>
                  </div>
				<div class="box-content">
					<h4 class="box-title">Hasil Perhitungan </h4>
					 <table class="table table-striped table-hover table-bordered">
                              <thead>
                              <tr>
                                  <th  rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                                  <th colspan="<?php echo $los+1;?>" class="text-center">kriteria</th>
                              </tr>
							     <tr>
								  <?php 
							    $i=1;
                            $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` group by kriteria order by id_kriteria");
                            while($res=mysqli_fetch_array($kriteria_a)){
							   ?>
                                  <th><?php echo $res['kriteria'];?></th>
                                  
							<?php } ?>	
							<th>Voting</th>
                              </tr>
                              </thead>
                              <tbody>
					   <?php 
							    
                            $tp=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` join agen_tour on tabel_kriteria.sub=agen_tour.id_agen_tour group by agen_tour");
                            while($r=mysqli_fetch_array($tp)){
								$krite=$r['kriteria'];
								$id_agen=$r['id_agen_tour'];
							   ?>
                              <tr>
							       <td><?php echo $r['agen_tour']; ?></td>
							      <?php  $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` where   sub='$id_agen'");
                            while($res=mysqli_fetch_array($kriteria_a)){ ?>
							<td> <?php echo $res['bobot'];
							}								?></td>
                                 <td><?php $c=mysqli_query($koneksi,"SELECT count(id_agen_tour) as rok FROM `tabel_voting` where id_agen_tour='$id_agen' ");
								 
                            while($d=mysqli_fetch_array($c)){ 
							echo $d['rok'];}?></td>	
                              </tr>
							<?php }
							?>
							
                             </tbody>
                     </table>
                  </div>

      <div class="box-content">
                    <h4>Normalisasi R</h4>
                    <table class="table table-striped table-hover table-bordered">
                              <thead>
                              <tr>
                                  <th  rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                                    <th colspan="<?php echo $los+1;?>" class="text-center">kriteria</th>
                              </tr>
							       <tr>
								  <?php 
							    $i=1;
                            $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` group by kriteria order by id_kriteria");
                            while($res=mysqli_fetch_array($kriteria_a)){
							   ?>
                                  <th><?php echo $res['kriteria'];?></th>
							<?php } ?>	
							<th>Voting</th>
                              </tr>
                              </thead>
                              <tbody>
							    <?php 
							    $i=1;
                            $tp=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` join agen_tour on tabel_kriteria.sub=agen_tour.id_agen_tour group by agen_tour");
                            while($r=mysqli_fetch_array($tp)){
								$krite=$r['kriteria'];
								$id_agen=$r['id_agen_tour'];
							   ?>
                              <tr>
							       <td><?php echo $r['agen_tour']; ?></td>
							      <?php  $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` where   sub='$id_agen'");
								 
                            while($res=mysqli_fetch_array($kriteria_a)){ $tolong=$res['kriteria'];
							$tes1=mysqli_query($koneksi,"select *,max(bobot) as bobotx from tabel_kriteria where kriteria='$tolong' GROUP by kriteria order by id_kriteria limit 1");
                            while($tes2=mysqli_fetch_array($tes1)){ ?>
							<td> <?php echo $res['bobot']/$tes2['bobotx'];
							}	}							?></td>
							
                                 <td><?php 
								 
								 
								 $daas=mysqli_query($koneksi,"SELECT id_agen_tour,count(id_agen_tour) as rok FROM `tabel_voting` GROUP BY id_agen_tour  ORDER BY `rok`  DESC limit 1");
								 while($dd=mysqli_fetch_array($daas)){ 
								 $enter=$dd['rok'];
								 }
								 $c=mysqli_query($koneksi,"SELECT count(id_agen_tour) as rok FROM `tabel_voting` where   id_agen_tour='$id_agen' ");
								 
                            while($d=mysqli_fetch_array($c)){ 
							$to=$d['rok']/$enter;
							echo $to;
							
							
							}?></td>
                              </tr>
							<?php }
							?>
                             </tbody>
							  <tfoot>
                              <tr>
							       <td>bobot</td>
							      <?php  $tes1=mysqli_query($koneksi,"select *,max(bobot) as bobotx from tabel_kriteria GROUP by kriteria order by id_kriteria");
                            while($tes2=mysqli_fetch_array($tes1)){ ?>
							<td> <?php echo $tes2['bobotx']; ?>
							</td>
							<?php }								?>
                               <td>50
							</td>  
                              </tr>
                              </tfoot>
                     </table>
                  </div>
                    
					
					
			     <div class="box-content">
                    <h4>Nilai Alternatif Kriteria</h4>
                    <table class="table table-striped table-hover table-bordered">
                               <thead>
                              <tr>
                                  <th  rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                                    <th colspan="<?php echo $los+1;?>" class="text-center">kriteria</th>
                                  <th   rowspan="2" style="vertical-align: middle" class="text-center">Hasil Akhir</th>
                                  
                              </tr>
							       <tr>
								  <?php 
							    $i=1;
							    $u=0;
                            $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` group by kriteria order by id_kriteria");
                            while($res=mysqli_fetch_array($kriteria_a)){
							   ?>
                                  <th><?php echo $res['kriteria'];?></th>
							<?php } ?>	
								<th>Voting</th>
                              </tr>
                              </thead>
                              <tbody>
							    <?php 
							    $i=1;
                            $tp=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` join agen_tour on tabel_kriteria.sub=agen_tour.id_agen_tour group by agen_tour");
                          	while($r=mysqli_fetch_array($tp)){
								$krite=$r['kriteria'];
								$id_agen=$r['id_agen_tour'];
							   ?>
                              <tr>
							       <td><?php echo $r['agen_tour']; ?></td>
							      <?php  $kriteria_a=mysqli_query($koneksi,"SELECT * FROM `tabel_kriteria` where   sub='$id_agen'"); 
							while($resak=mysqli_fetch_array($kriteria_a)){ 

							$t=$resak['id_kriteria'];
							$tolong=$resak['kriteria'];
							$tes1=mysqli_query($koneksi,"select *,max(bobot) as bobotx from tabel_kriteria where kriteria='$tolong' GROUP by kriteria order by id_kriteria limit 1");
							$alam = array();
                            while($tes2=mysqli_fetch_array($tes1)){?>
							<td> <?php $rokit=$resak['bobot']/$tes2['bobotx'] *25;
										$x[]=$rokit;
										echo $rokit;
							}
							
									
							}							?></td>
							<td><?php $c=mysqli_query($koneksi,"SELECT count(id_agen_tour) as rok FROM `tabel_voting` where   id_agen_tour='$id_agen' ");
								 
                             while($d=mysqli_fetch_array($c)){ 
							$as=$d['rok']/$enter*50;
							echo $as;
							
							
							}?></td>		
                                 <td>
								 <?php
					
					echo $x[$u]+$x[$i]+$as;


					$i=$i+2;
					$u=$u+2;
								 ?>
							</td>

                              </tr>
							<?php }
			
						
							?>
                             </tbody>
                     </table>
				</div>

				<!-- /.box-content -->
			</div>
			</div>
		
		<!-- /.row small-spacing -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	

		<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/scripts/datatables.demo.min.js"></script>
	<script src="assets/scripts/main.min.js"></script>
	
	

	
</body>
</html>