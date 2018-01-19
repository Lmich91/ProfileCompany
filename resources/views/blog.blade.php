@extends('layouts.app')

@section('content')
<!-- Begin Body -->
<div class="container">
    <div class="row">
    	@foreach($datas as $data)

    	<div class="row">
            <strong>    		
               <h5>{{ $data->judul }}</h5>

                        <div class="divider"></div>
                         <img src="{{ asset('images/'.$data->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
               
                        <p>{!!substr($data->isi,0,200)!!}...</p>
                            
                        <a href="{{ url('admin/show', $data->id) }}" class="btn btn-primary ">Readmore </a>
            	</div>
            	@endforeach

                {{ $datas->render() }}
             </strong> 
        </div>
    </div>
@endsection