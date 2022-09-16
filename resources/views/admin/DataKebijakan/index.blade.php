@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA ARSIP SURAT
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <a href="{{url('admin/surat/create_page')}}" class="btn btn-primary waves-effect" type="button">Arsipkan Surat</a>
                           @if($message=Session::get('success'))
                        <div class="alert bg-teal" role="alert">
                           
                           <p align="center" style="color: white;">  <em class="fa fa-lg fa-close">&nbsp;</em>  {{$message}}

                        @endif
                        </h2>
                    </div>
                    <div class="body">

                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $d)
                                        <tr>
                                            <td>{{$d->nomor}}</td>
                                            <td>{{$d->kategori}}</td>
                                            <td>{{$d->judul}}</td>
                                            <td>{{$d->created_at}}</td>
                                            <td>
                                                 <a
                                                 onclick="return confirm('Apakah anda yakin untuk menghapus data?')"
                                                 href="{{url('admin/surat/delete/'.$d->id)}}"><i class="material-icons">delete</i> </a>
                                                  &nbsp;
                                                  <a href="{{url('admin/surat/download/'.$d->id)}}" target="_blank"><i class="material-icons">download</i></a>
                                                  &nbsp;
                                                  <a href="{{url('admin/surat/detail/'.$d->id)}}">
                                                    <i class="material-icons">visibility</i> </a>
                                                
                                            </td>
                                        </tr>
                                   @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
<script type="text/javascript">
@if (Session::has('messages')) 
    alert("{{ Session::get('messages') }}");
@endif
</script>
@endsection

