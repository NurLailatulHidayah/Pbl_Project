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
				  <h3 class="box-title">Posyandu</h3>
                  <a href="{{route('posyandu.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Data</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nama Bidan</th>
								<th>Nama Posyandu</th>
								<th>Alamat</th>
								<th>Jadwal</th>
								<th>Aksi</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataPosyandu as $key => $posyandu)
							<tr>
								<td>{{$posyandu->nama}}</td>
								<td>{{$posyandu->nama_posyandu}}</td>
								<td>{{$posyandu->alamat}}</td>
								<td>{{$posyandu->jadwal}}</td>
								<td>
                                    <a href="{{route('posyandu.edit', $posyandu->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('posyandu.delete', $posyandu->id)}}" id="delete" class="btn btn-danger">Delete</a>
                                </td>
								
							</tr>
                            @endforeach
						<!-- <tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								
							</tr>
						</tfoot> -->
					  </table>
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