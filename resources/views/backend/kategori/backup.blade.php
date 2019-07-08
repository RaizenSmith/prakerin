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
	<section class="page-content container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
                   <h5 class="card-header">Data Tables<a href="{{ route('artikel.create') }}"
                            class="float-right la la-plus-circle btn btn-primary btn-rounded btn-floating btn-outline">&nbsp;Tambah
                            Data</a></h5>
                    <br><br>
					<div class="card-body">
						<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>Judul</th>
                                    <th>Slug</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Foto</th>
                                    <th style="text-align: center;">Aksi</th>
								</tr>
							</thead>
							<tbody>
								  @foreach ($artikel as $data)
                                <tr>
                                    <td>{{$data->judul}}</td>
                                    <td>{{$data->slug}}</td>
                                    <td>{{$data->kategori->nama_kategori}}</td>
                                    <td>{{$data->user->name}}</td>
                                    <td><img src="{{asset('assets/img/artikel/' .$data->foto. '')}}"
                                            style="width:250px; height:250px;" alt="Foto"></td>

                                    <td style="text-align: center;">
                                        <form action="{{route('artikel.destroy', $data->id)}}" method="post">
                                            {{csrf_field()}}
                                            <a href="{{route('artikel.edit', $data->id)}}"
                                                class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline">
                                                Edit
                                            </a>
                                            <a href="{{route('artikel.show', $data->id)}}"
                                                class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline">
                                                Show
                                            </a>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit"
                                                class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline">
                                                Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
        								<tfoot>
        									<tr>
        										<th>Judul</th>
                                                <th>Slug</th>
                                                <th>Kategori</th>
                                                <th>Penulis</th>
                                                <th>Foto</th>
        									</tr>
        								</tfoot>
        							</table>
        						</div>
        					</div>
        				</div>
        			</div>
        		</section>
        	</div>
				<!-- SIDEBAR QUICK PANNEL WRAPPER -->
				<!-- END SIDEBAR QUICK PANNEL WRAPPER -->
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
		<script src="{{ asset('assets/backend/assets/vendor/modernizr/modernizr.custom.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/js-storage/js.storage.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/js-cookie/src/js.cookie.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/pace/pace.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/switchery-npm/index.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
		<script src="{{ asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
		<script src="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script src="{{ asset('assets/backend/assets/js/global/app.js')}}"></script>
		<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
		<script src="{{ asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
	</body>


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo1/tables.data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 02:57:43 GMT -->
</html>
@endsection
