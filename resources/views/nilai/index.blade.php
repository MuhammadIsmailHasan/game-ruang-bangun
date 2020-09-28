@extends('layouts.frontend')

@section('content')
    <section id="profile" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>DAFTAR NILAI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-card">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="header-title m-t-0 m-b-10">Daftar Nilai Siswa</h4>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('nilai-export') }}" type="button" class="btn btn-success" style="float: right">
                                    <i class="fa fa-print"></i>  Export Excel
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap ">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No.</th>
                                        <th style="width: 35%;">Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Sekolah</th>
                                        <th>Nilai</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th style="width: 2%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $value)
                                        @if ($value->user->status == 1)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->user->name }}</td>
                                                <td>{{ $value->user->kelas }}</td>
                                                <td>{{ $value->user->sekolah }}</td>
                                                <td>{{ $value->skor }}</td>
                                                <td>{{ $value->tanggal }}</td>
                                                <td>
                                                    @if ($value->status == 1)
                                                        <span class="badge badge-success">Aktif</span>
                                                    @else
                                                        <span>Non Aktif</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($value->status == 1)
                                                        <a href="{{ route('nilai-delete', $value->id) }}" class="btn btn-danger btn-sm tombol-hapus" title="Nonaktifkan nilai">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    @else
                                                        <form action="{{ route('nilai.update', $value->id) }}" method="POST" >
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="1">
                                                            <button class="btn btn-primary btn-sm" type="submit" title="Aktifkan nilai"><i class="fa fa-check"></i></button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    @if (Session::has('success'))
        <script type="text/javascript">
            Swal.fire(
                'Berhasil',
                "{{ Session::get('success') }}",
                'success'
                )
        </script>
    @endif
    @if (Session::has('error'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ Html::ul($errors->all()) }}',
                })
        </script>
    @endif

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        });
        
    </script>
@endsection