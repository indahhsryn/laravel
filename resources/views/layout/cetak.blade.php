<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body  onload="window.print()" >
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Pilihan</th>
                        <th>Hasil Suara</th>
                        <th>Action</th>
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr>
                        <td>{{ $dt->id_pilihan }}</td>
                        <td>{{ $hasil  }} %</td>
                        <td>
                            <form action="{{ url('delete' .$dt->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger"><i class="fas fa-trash">Hapus</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>  
      </body>   
</html>

