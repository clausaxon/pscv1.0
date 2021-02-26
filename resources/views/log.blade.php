<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <a href="{{ url('suratkeluar') }}" class="btn btn-md btn-success  mb-3">Surat Keluar PSC</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nomor Surat</th>
                                <th scope="col">Nama Pengirim</th>
                                <th scope="col">Fungsi Jabatan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Surat</th>
                                <th scope="col">Perihal</th>
                                <th>Download</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($logs as $log)
                                <tr>
                                <td>{{ $log->id }}</td>
                                    <td>{{ $log->nama_pengirim }}</td>
                                    <td>{{$log->fungsi_jabatan}}</td>
                                    <td>{{$log->created_at}}</td>
                                    <td>{{$log->jenis}}</td>
                                    <td>{{$log->perihal}}</td>
                                    <td><a href="{{ url('') }}" class="btn btn-md btn-success  mb-3">Download</a></td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $logs->links() }}
                          </br>
                          <a href="{{ url('suratkeluar') }}" class="btn btn-md btn-success  mb-3">Pedoman STK</a>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nomor Surat</th>
                                <th scope="col">Nama Pengirim</th>
                                <th scope="col">Fungsi Jabatan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Surat</th>
                                <th scope="col">Perihal</th>
                                <th scope="col">Judul STK</th>
                                <th>Download</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($logs as $log)
                                <tr>
                                <td>{{ $log->id }}</td>
                                    <td>{{ $log->nama_pengirim }}</td>
                                    <td>{{$log->fungsi_jabatan}}</td>
                                    <td>{{$log->created_at}}</td>
                                    <td>{{$log->jenis}}</td>
                                    <td>{{$log->perihal}}</td>
                                    <td>{{$log->judul}}</td>
                                    <td><a href="{{ url('') }}" class="btn btn-md btn-success  mb-3">Download</a></td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $logs->links() }}
                          </br>
                          <a href="{{ url('suratkeluar') }}" class="btn btn-md btn-success  mb-3">Registrasi Pedoman STK</a>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nomor Surat</th>
                                <th scope="col">Jenis Surat</th>
                                
                                <th>Durasi</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($logs as $log)
                                <tr>
                                <td>{{ $log->id }}</td>
                                    <td>{{$log->nomorsurat}}</td>
                                    <td>{{$log->jenissurat}}</td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $logs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <a href="{{ url('suratkeluar') }}" class="btn btn-md btn-success  mb-3">Tambah Surat Keluar PSC</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama Pengirim</th>
                                <th scope="col">Fungsi Jabatan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Surat</th>
                                <th scope="col">Perihal</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($logs as $log)
                                <tr>
                                    <td>{{ $log->nama_pengirim }}</td>
                                    <td>{{$log->fungsi_jabatan}}</td>
                                    <td>{{$log->created_at}}</td>
                                    <td>{{$log->jenis}}</td>
                                    <td>{{$log->perihal}}
                                    
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $logs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <a href="{{ url('suratkeluar') }}" class="btn btn-md btn-success  mb-3">Tambah Surat Keluar PSC</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama Pengirim</th>
                                <th scope="col">Fungsi Jabatan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Surat</th>
                                <th scope="col">Perihal</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($logs as $log)
                                <tr>
                                    <td>{{ $log->nama_pengirim }}</td>
                                    <td>{{$log->fungsi_jabatan}}</td>
                                    <td>{{$log->created_at}}</td>
                                    <td>{{$log->jenis}}</td>
                                    <td>{{$log->perihal}}
                                    
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $logs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    

</body>
</html>