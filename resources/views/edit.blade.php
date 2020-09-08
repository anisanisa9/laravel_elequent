<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai - <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/blog" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/blog/update/{{ $blog->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul Blog..." value=" {{ $blog->judul }}">
 
                            @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Isi Blog</label>
                            <textarea name="isi" class="form-control" placeholder="Alamat pegawai .."> {{ $blog->isi }} </textarea>
 
                             @if($errors->has('isi'))
                                <div class="text-danger">
                                    {{ $errors->first('isi')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control" placeholder="penulis Blog..." value=" {{ $blog->penulis }}">
 
                             @if($errors->has('penulis'))
                                <div class="text-danger">
                                    {{ $errors->first('penulis')}}
                                </div>
                            @endif
                        </div>
                        
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</body>
</html>