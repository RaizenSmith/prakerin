@extends('layouts.backend')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col">
            <div class="tab-content">
                <div class="tab-pane fadeIn active" id="tab-1">
                    <div class="card">
                        <div class="card-header">
                                <h1 class="font-weight-bold font-italic col-md-6 " >
                                    <i class="la la-book smdi-hc-fw"></i>
                                    {{$artikel->judul}} <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penulis : 
                                    {{$artikel->user->name}}
                                </h1>
                        </div>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/artikel/' .$artikel->foto.'') }}" 
                                class="float-left rounded m-r-30 m-b-30" style="width:250px; height:250px;">
                                <h1 class="font-weight-bold">{{$artikel->judul}}</h1><br>
                                <p>{!!$artikel->konten!!}</p>
                                <br>
                                <p>
                                    Kategori :
                                    <button class="btn btn-sm btn-rounded btn-info">
                                        {{$artikel->kategori->nama_kategori}}
                                    </button>
                                </p>
                                <p>
                                    Tag :
                                    @foreach ($artikel->tag as $data)
                                        <button class="btn btn-sm btn-rounded btn-success">
                                            #{{$data->nama_tag}}
                                        </button>
                                    @endforeach
                                </p>
                                <p>
                                    Tanggal : {{$artikel->created_at->format('d M Y H:i:s')}}
                                </p>
                                <p>
                                    <a href="#" class="btn btn-outline btn-block btn-rounded btn-info">
                                        <i class="la la-paper-plane"></i> Lihat Artikel <i
                                        class="zmdi zmdi-airplane zmdi-hc-fw"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection