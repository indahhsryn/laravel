@extends('layout/index')

@section('content')
<section class="content">
    <form action="{{ url('/edit'.$pilihan->id) }}" method="POST">
        @csrf
        <div class="card-body">
         <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" value="{{ $pilihan->judul }}" id="judul" name="judul" required>
        </div>
         <div class="form-group">
            <label for="pilihan">Pilihan</label>
            <input type="text" class="form-control" value="{{ $pilihan->pilihan }}" id="pilihan" name="pilihan" required>
        </div>
         <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" value="{{ $pilihan->deskripsi }}" id="deskripsi" name="deskripsi" required>
        </div>
         <div class="form-group">
          <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
        </div>
    </form>
</section>         
@endsection