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
                                    <td><a href="/log/downloadsk/{{$log->id}}" class="btn btn-md btn-success  mb-3">Download</a></td>
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
                          <a href="{{ url('suratstk') }}" class="btn btn-md btn-success  mb-3">Pedoman STK</a>
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
                              @forelse ($logs2 as $log2)
                                <tr>
                                <td>{{ $log2->id }}</td>
                                    <td>{{ $log2->nama_pengirim }}</td>
                                    <td>{{$log2->fungsi_jabatan}}</td>
                                    <td>{{$log2->created_at}}</td>
                                    <td>{{$log2->jenis}}</td>
                                    <td>{{$log2->perihal}}</td>
                                    <td>{{$log2->judul_stk}}</td>
                                    <td><a href="/log/downloadstk/{{$log2->id}}" class="btn btn-md btn-success  mb-3">Download</a></td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $logs2->links() }}
                          </br>
                          <a href="{{ url('pendaftaranstk') }}" class="btn btn-md btn-success  mb-3">Registrasi Pedoman STK</a>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nomor Surat</th>
                                
                                <th>Jenis Surat</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($logs3 as $log3)
                                <tr>
                                <td>{{ $log3->id }}</td>
                                    <td>{{$log3->nomorsurat}}</td>
                                    <td>{{$log3->jenissurat}}</td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $logs3->links() }}
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