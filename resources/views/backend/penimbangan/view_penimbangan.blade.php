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
				  <h3 class="box-title">Penimbangan</h3>
				
				  <!-- <div class="row"> -->
				  <a href="{{route('penimbangan.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5" >Tambah Data</a>
				  <a href="{{route('laporan.view') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Laporan</a>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>NIK Bayi</th>
								<th>Nama Posyandu</th>
								<th>Tinggi Badan</th>
								<th>Berat Badan</th>
								<th>Posisi</th>
								<th>Umur</th>
								<th>Tanggal Pemeriksaan</th>
								<th>Aksi</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataPenimbangan as $key => $penimbangan)
							<tr>
								<td>{{$penimbangan->bayi->id}}</tdS>
								<td>{{$penimbangan->posyandu->nama_posyandu}}</td>
								<td>{{$penimbangan->tinggi_badan}}</td>
								<td>{{$penimbangan->berat_badan}}</td>
								<td>{{$penimbangan->posisi}}</td>
								<td>{{$penimbangan->umur}}</td>
								<td>{{$penimbangan->tanggal_pemeriksaan}}</td>
								<td>
                                    <a href="{{route('penimbangan.edit', $penimbangan->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('penimbangan.delete', $penimbangan->id)}}" id="delete" class="btn btn-danger">Delete</a>
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