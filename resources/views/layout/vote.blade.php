@extends('layout/index')

@section('content')
<br>
<br>
@if (session()->has('success'))
    {{ session('success') }}
    <h4></h4>
@endif
@foreach ($pilihan as $pilih)
<section class="content">
    <div class="card">
        <div class="card-body col-d-5">
            <h3>{{ $pilih->pilihan }}</h3>
            <p>{{ $pilih->deskripsi }}</p>
            <button type="submit" class="btn btn-primary"><a href="{{ url('/votting'.$pilih->id) }}" style="color: black">Vote</a></button>
        </div>
    </div>
</section>   
@endforeach
 
@endsection