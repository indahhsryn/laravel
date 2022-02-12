@extends('layout/index')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="pull-right" style="text-align: right"><button class="btn btn-primary">
                    <a href="/create" style="color: black"> Add Data</a>
                   </button>
                </h3>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pemilihan</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     use App\Models\Pilihan;
                     $pilihan = Pilihan::all();    
                    ?>
                    @foreach ($pilihan as $data)
                    <tr>
                        <td>{{ $data->judul; }}</td>
                        <td>{{ $data->pilihan; }}</td>
                        <td>{{ $data->deskripsi; }}</td>
                        <td>
                            <form action="{{ url('/deleted'.$data->id) }}" method="POST">
                                @csrf
                                <button type="button" class="btn btn-primary btn-xs"><i class="fa fas-pencil"><a href="{{ url('/edit' .$data->id) }}" style="color: black">Update</a> </i></button>
                                <button class="btn btn-danger btn-xs">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>

    </section>
@endsection