@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}"><body>
@endsection

@section('js')
<script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">


                    </form> --}}
                    <div class="form-group">
                        <label>masukan nama</label>
                        <input type="text" name="nama_tag" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>

                    <div class="content">
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<h5 class="card-header">Data Tables</h5>
									<div class="card-body">
										<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
											<thead>
												<tr>
													 <th>Nama</th>
                                                     <th>Slug</th>
                                                     <th>Aksi</th>
												</tr>
											</thead>
											<tbody  class="data-tag">
                                                {{-- isi js tag --}}
											</tbody>
											<tfoot>
												<tr>
													<th>Nama</th>
													<th>Slug</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
