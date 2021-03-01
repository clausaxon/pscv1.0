<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body style="background: lightgray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class ="card">
                    <div class="card-header">
                        File Upload
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/lib/upload" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Choose File</label>
                                <input type="file" class="form-control" name="file" id="file"/>
                            </div>
                            <button type="submit" class="btn-btn-success">Upload</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="my-5">Data</h4>
 
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">File</th>
                                <th width="1%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($libs as $f)

                            <tr>
                                <td><a class="btn" href="/lib/download/{{ $f->id }}">{{($f->namafile) }}</a></td>
                                <td><a class="btn btn-danger" href="/lib/hapus/{{ $f->id }}">HAPUS</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>