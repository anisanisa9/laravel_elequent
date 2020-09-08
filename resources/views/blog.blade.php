<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>
 
<h1>Data Pegawai</h1>
<h3>www.malasngoding.com</h3>
 
<ul>
	@foreach($blog as $b)
        <li>
            {{"No : ". $b->id .' | Deskripsi :' . $b->isi}}
        </li>
    @endforeach
</ul>
 
</body>
</html>