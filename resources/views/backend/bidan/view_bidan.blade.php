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
				  <h3 class="box-title">Bidan</h3>
                  <a href="{{route('bidan.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Data</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nama Bidan</th>
								<th>NIP</th>
								<th>Nama Posyandu</th>
								
								<th>Alamat</th>
								<th>Aksi</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataBidan as $key => $bidan)
							<tr>
								<td>{{$bidan->nama}}</td>
								<td>{{$bidan->nip}}</td>
								<td>{{$bidan->posyandu->nama_posyandu}}</td>
								<td>{{$bidan->alamat}}</td>
								<td>
                                    <a href="{{route('bidan.edit', $bidan->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('bidan.delete', $bidan->id)}}" id="delete" class="btn btn-danger">Delete</a>
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