@extends('layout/index')

@section('content')
<br><br>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 style="text-align: right"> <button class="btn btn-success"><a href="/cetak" style="color: black">Cetak</a> </button></h3>
        </div>
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
</div>
</section>   
@endsection