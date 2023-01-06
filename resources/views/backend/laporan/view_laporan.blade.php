@extends('admin.admin_master')


@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Laporan</h3>
                  <!-- <a href="" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Data</a> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				<div class="row">
				<div class="col-md-6">
                            <div class="form-group">
								<h5>Posisi<span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="posisi" id="posisi" required class="form-control">
										<option value="">Pilih Posisi Bayi</option>
										<option value="terlentang">Terlentang</option>
										<option value="berdiri">Berdiri</option>

									</select>
								</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<h5>Jadwal <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="date" name="jadwal" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<!-- Vendor JS -->	
	<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>