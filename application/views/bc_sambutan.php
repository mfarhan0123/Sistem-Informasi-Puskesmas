
<div class="container">
<div class="row">
<div class="span9">

	<div class="baca">
		 <ul class="breadcrumb">
		<li><a href="<?php echo site_url() ?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Baca Kata Sambutan</li>
	  </ul>
	    <h4 class="judul">Sambutan Kepala Puskesmas </h4><hr /> 
<?php foreach ($hasil as $row):?>
<p><img src="<?php echo base_url().'assets/artikels/'.$row->image;?>" width="150"height="100"alt=""/ style="float:left; padding:7px;text-align:justify;font-family:Arial;"><?php echo $row->isi;?></p>
<hr />
<?php endforeach;?>
<?php foreach ($data as $row):?>
Kepala Puskesmas :<?php echo $row->kepala;?> | Alamat Puskesmas <?php echo $row->alamatpuskesmas;?>
<h3> PUSKESMAS <?php echo $row->namapuskesmas;?> </h3> 
<?php endforeach;?>
<hr />
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->

