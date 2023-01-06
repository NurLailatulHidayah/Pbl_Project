@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Data Penimbangan</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{route('penimbangan.update', $editData->id)}}">
						@csrf
						<!--end row-->
						<div class="row">
						<div class="col-md-6">
								<div class="form-group">
									<div class="col-sm-12 mb-3 mb-sm-0">
									<label>NIk Bayi</label>
									<select name="bayi_id" value="{{$editData->bayi_id}}" class="form-control  @error('bayi_id') is-invalid @enderror"
										id="bayi_id" data-live-search="true">
										<option value="">-Pilih NIK Bayi-</option>
										@foreach ($dataBayi as $item)
											<option value="{{ $item->id }}">
												{{ $item->id }}
											</option>
										@endforeach
									</select>
                            @error('nasabah_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
								</div>
							</div>
                            <!--end basic select-->	
                            
                            <!--end colmd6-->
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-sm-12 mb-3 mb-sm-0">
									<label>Nama Posyandu</label>
									<select name="posyandu_id" value="{{$editData->nama_posyandu}}" class="form-control  @error('posyandu_id') is-invalid @enderror"
										id="posyandu_id" data-live-search="true">
										<option value="">-Pilih Nama Posyandu-</option>
										@foreach ($dataPosyandu as $item)
											<option value="{{ $item->id }}">
												{{ $item->nama_posyandu }}
											</option>
										@endforeach
									</select>
                            @error('nasabah_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
								</div>
							</div>
							
							
                            <!--end colmd6-->
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Tinggi Badan <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="tinggi_badan" value="{{$editData->tinggi_badan}}" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
                            <!--end basic select-->	
                            
                            <!--end colmd6-->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Berat Badan <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="berat_badan" value="{{$editData->berat_badan}}" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							
							
                            <!--end colmd6-->
						</div>
                        <!--END row select-->
                        <div class="row">
						<div class="col-md-6">
                            <div class="form-group">
								<h5>Posisi<span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="posisi" id="posisi" value="{{$editData->posisi}}" required class="form-control">
										<option value="">Pilih Posisi Bayi</option>
										<option value="terlentang">Terlentang</option>
										<option value="berdiri">Berdiri</option>

									</select>
								</div>
							</div>
						
							<div class="col-md-6">
								<div class="form-group">
									<h5>Umur <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="umur" value="{{$editData->umur}}" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
                        <!--end row-->
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Tanggal Pemeriksaan <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="date" name="tanggal_pemeriksaan" value="{{$editData->tanggal_pemeriksaan}}" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<script src="{{asset('backend/js/pages/form-validation.js')}}"></script>