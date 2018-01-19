@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <strong>
            <div class="col-md-3" id="leftCol">
              
                <ul class="nav nav-stacked" id="sidebar">
                  <li>
                    <a href="#sec0">Sejarah</a>
                  </li>
                  <li>
                    <a href="#sec1">Visi dan Misi</a>
                  </li>
                  <li><a href="#sec2">Struktur Organisasi</a></li>
                  <li><a href="#sec3">Komitmen</a></li>
                </ul>
              
            </div>  
            <div class="col-md-9">
                <h2 id="sec0">Sejarah Sinergi</h2>
           
                <p>
                PT. SINERGI MULTI CIPTA (SINERGI) adalah perusahaan yang selalu mengedepankan komitmen memberikan karya yang lebih dari mitra harapkan (More Than Your Expectation). Sinergisitas antara pengetahuan, pengalaman dan kompetensi SDM dari CV. SURYA PRATAMA MANDIRI dan YAYASAN DEWI SARTIKA serta dibangunnya sistem manajemen terstruktur dan terukur menjadikan PT SINERGI sebagai perusahaan terpercaya dalam menjalin kerjasama kemitraan dengan prinsip mutualisme.                    
                </p>


                <img src={{url('/images/sejarahsinergi.png')}} class="img-responsive">

                <p>
                Dalam perjalanannya, PT SINERGI telah dipercaya oleh berbagai pihak oleh karena manajemen selalu berusaha memberikan solusi alternative terbaik melalui analisa dan perencanaan strategis guna meningkatkan efektifitas, efisiensi dan produktifitas baik dalam organisasi, proses produksi, maupun after sales services. 
                </p>


                <hr class="col-md-12">
              
                <h2 id="sec1">Visi Dan Misi</h2>
                
                <h3>Visi</h3> 

                <p>
                   Menjadi perusahaan multinasional yang unggul dalam inovasi dan layanan melalui optimalisasi SDM dan sistem manajemen. 
                </p>
            

                <h3>Misi</h3>

                <p>
                1.  Menjadi business partner yang terpercaya dan terdedikasi dalam komitmen simbiosis mutualisme kemitraan.
                </p>

                <p>
                2.  Selalu melakukan perubahan atas dasar continous improvement dalam upaya pengembangan potensi dan kompetensi SDM dan sistem manajemen. 
                </p>
                

              
                <hr>
              
                <h2 id="sec2">Strukur Organisasi</h2>
            
                <div class="row">
                    <img src={{url('/images/strukturorganisasi.png')}} class="img-responsive">

                </div>
              
                <hr>
              
                <h2 id="sec3">Komitmen</h2>
                 <p>
                Berpegang pada komitmen More Than Your Expectation maka dalam PT. SINERGI secara berkelanjutan membangun kemitraan yang berkualitas, terpercaya dan terdedikasi dengan meningkatkan profesionalisme baik SDM maupun manajemen. 
                Bagi PT. SINERGI MULTI CIPTA kepuasan mitra usaha adalah salah satu indikator keberhasilan suatu kemitraan sehingga diharapkan kerjasama akan terus berlangsung. Dengan prinsip continous improvement dalam pengembangan potensi dan kompetensi SDM serta manajemen perusahaan secara keseluruhan, maka karya terbaiklah yang akan diberikan kepada para mitra strategis perusahaan.

                </p>             
            </div> 
        </strong>
    </div>
</div>
@endsection