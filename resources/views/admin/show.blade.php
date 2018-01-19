@extends('layouts.admin')
@section('content')

{{-- <div class="section">
	<div class="card-panel purple darken-3 white-text">Article</div>
</div> --}}

<div class="section">
	
	<div class="row">
		<div class="col s12">
            <img src="{{ asset('images/'.$tampilkan->gambar) }}" id="showgambar" style="max-width:600px;max-height:300px;" />
        </div>
		<div class="col s12">
			<h5>{{ $tampilkan->judul }}</h5>

            <div class="divider"></div>
            <p>{!! $tampilkan->isi !!}</p>

            
        </div>
                
		</div>
	</div>

</div>

@endsection