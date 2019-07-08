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
                    <h5 class="card-header">Data Tables<a href="{{ route('kategori.create') }}"
                     class="float-right la la-plus-circle btn btn-primary btn-rounded btn-floating btn-outline">&nbsp;Tambah
                     Data</a></h5>
                    <br><br>
					<div class="card-body">
						<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th style="text-align: center;">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($kategori as $data)
                             <tr>
                            <td>{{$data->nama_kategori}}</td>
                            <td>{{$data->slug}}</td>
                            <td style="text-align: center;">
                                <form action="{{route('kategori.destroy', $data->id)}}" method="post">
                                    {{csrf_field()}}
                                    <a href="{{route('kategori.edit', $data->id)}}"
                                        class="zmdi zmdi-edit btn btn-success btn-rounded btn-floating btn-outline">
                                        Edit
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        										<th>Nama Kategori</th>
                                                <th>Slug</th>
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
