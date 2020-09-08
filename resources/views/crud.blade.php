<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Crud_elequent</title>
</head>

<style>
    th{
        text-align:center;
    }
</style>
<body>
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data - 
                </div>

                <br>
                
                @if(session()->has('pesen'))
                    <div class="alert alert-success">{{ session()->get('pesen')}}</div>
                @endif

                @if(session()->has('delete'))
                    <div class="alert alert-danger">{{ session()->get('delete')}}</div>
                @endif

                @if(session()->has('update'))
                    <div class="alert alert-info">{{ session()->get('update')}}</div>
                @endif
           
                <div class="card-body">
                    <a href="/blog/tambah" class="btn btn-primary">Input Blog Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped ">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Penulis</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $b)
                            <tr>
                                <td>{{ $b->judul }}</td>
                                <td>{{ $b->isi }}</td>
                                <td>{{ $b->penulis }}</td>
                                <td>
                                    <div class="div">
                                        <a href="/blog/edit/{{ $b->id }}" class="btn btn-warning" style="width:100%;">Edit</a>
                                    </div>
                                    <br>
                                    <div class="div">
                                        <a href="/blog/delete/{{ $b->id }}" class="btn btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>