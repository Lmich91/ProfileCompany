@extends('layouts.app')

@section('content')
<!-- Begin Body -->
<div class="container">
    <div class="row">
        <strong>
            <div class="col-md-3" id="leftCol">
                <h2>Our Pruduct</h2>
                <ul class="nav nav-stacked" id="sidebar">
                  <li>
                    <a href="/produk">ICT Solution</a>
                  </li>
                  <li>
                    <a href="/produk">Creative Media</a>
                    <ul class="nav">
                      <li class=""><a href="/produk">- Animasi</a></li>
                      <li class=""><a href="/produk">- Games</a></li>
                      <li class=""><a href="/produk">- Komik</a></li>
                      <li class=""><a href="/produk">- Multimedia</a></li>
                    </ul>
                  </li>
                  <li><a href="/produk">EO and Cosultant</a></li>
                  <li><a href="/produk">Civil Mecanical Electrical (CME)</a></li>
                </ul>
            </div>  
            <div class="col-md-9">
                @foreach($datas as $data)

                <div class="row">
                  <div class="col s12">
                 <h3>{{ $data->judul }}</h3>

                          <div class="divider"></div>
                           <img src="{{ asset('images/'.$data->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                 
                          <p>{!!substr($data->isi,0,200)!!}...</p>
                              
                          <a href="{{ url('admin/show', $data->id) }}" class="btn btn-primary ">Readmore</a> <hr>
                  </div>
                </div>
                @endforeach

                {{ $datas->render() }}
                 
            </div>
        </strong> 
    </div>
</div>
@endsection
