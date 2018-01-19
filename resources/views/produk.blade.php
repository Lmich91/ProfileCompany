@extends('layouts.app')

@section('content')
    
      <div class="container">
        
         <div class="row">
          <strong>
              
              <h3>Produk dan Layanan Kami</h3>
              
              <!--begin tabs going in wide content -->
               <ul class="nav nav-tabs content-tabs" id="maincontent" role="tablist">
                  <li class="active"><a href="#ictsolusion" role="tab" data-toggle="tab">ICT Solution</a></li>
                  <li><a href="#eo" role="tab" data-toggle="tab">EO and Cosultant</a></li>
                  <li><a href="#Chivil" role="tab" data-toggle="tab">CME</a></li>
                  <li class="dropdown">
                     <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Creative Media <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                        <li><a href="#Animasi" tabindex="-1" role="tab" data-toggle="tab">Animasi</a></li>
                        <li><a href="#game" tabindex="-1" role="tab" data-toggle="tab">Games</a></li>
                        <li><a href="#komik" tabindex="-1" role="tab" data-toggle="tab">Komik</a></li>
                        <li><a href="#Multimedia" tabindex="-1" role="tab" data-toggle="tab">Multimedia</a></li>
                     </ul>
                  </li>
               </ul><!--/.nav-tabs.content-tabs -->
              
          
               <div class="tab-content">
                 
                  <div class="tab-pane fade in active" id="ictsolusion">
                    - Aplikasi Multiplatform <br>
                    - Aplikasi Web Responsip <br>
                    - Mobile Aplication <br>
                    - Desktop Aplication <br>
                    - Online Aplication <br>
                    - Aplikasi Keuangan <br>
                    - Aplikasi Perkantoran <br>
                    - Aplikasi Mobile <br>
                    - Web & Social Media Management <br>
                    - Mobile Application Development <br>
                    - Information System Management <br>

                  </div><!--/.tab-pane -->
                 
                  <div class="tab-pane fade" id="eo">
                     <p>
                        -  ICT & Multimedia Training <br>
                        -   Leadership & Motivation  <br>
                        -   Psychology & Assesment test <br>
                        -   Organisation & Education Management Consultant <br>
                        -   Riset Bidang Soisial, Ekonomi, Hukum, Teknik dan TIK <br>

                     </p>
                  </div><!--/.tab-pane -->

                  <div class="tab-pane fade" id="Chivil">
                     <p>
                        -   Up grade & Downgrade TRx <br>
                        -   Install & Deinstallation Repeater <br>
                        -   Install & Deinstallation BSS & Transmision <br>
                        -   Pembuatan access road site Parangtritis Yogyakarta <br> 
                        -   Perbaikan shelter dan paving BTS Sumpiuh Banyumas <br>
                        -   Instalasi Expand base frame area Semarang dan Purwokerto <br>
                        -   Instalasi Expand cable tray area Jawa Tengah <br>

                     </p>
                  </div><!--/.tab-pane -->
                 
                  <div class="tab-pane fade" id="Animasi">
                     <p>
                        -   Architectural Visualization <br>
                        -   Model Karakter 3D<br>
                        -   Asset Game 3D<br>
                        -   Motion Graphich<br>
                        -   Animasi pendek<br>
                        -   Animasi Iklan TV<br>
                        -   Animasi Edukasi<br>
                        -   Animasi Iklan layanan masyarakat<br>
                        -   Animasi serial TV<br>

                     </p>
                  </div><!--/.tab-pane -->
                 
                  <div class="tab-pane fade" id="game">
                     <p>
                        -   Mobile Game<br>
                        -   Browser Game<br>
                        -   PC Game<br>
                        -   Online Game<br>
                        -   Game Edukasi<br>
                         
                     </p>
                  </div><!--/.tab-pane -->

                  <div class="tab-pane fade" id="komik">
                     <p>
                        - Komik <br>
                        - Illustrasi <br>
                        - Karakter Desain  <br>

                     </p>
                  </div><!--/.tab-pane -->
                 
                  <div class="tab-pane fade" id="Multimedia">
                     <p>
                        - Company Profile <br>
                        - Video Profile <br>
                         
                     </p>
                  </div><!--/.tab-pane -->
                 
                 
               </div><!--/.tab-content -->
              
            {{-- </div>/.col-sm-8  --}}
           
         </div><!--/.row -->
       </strong> 
      </div><!--/.container -->

    </div>
  
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="//raw.githubusercontent.com/flatlogic/bootstrap-tabcollapse/master/bootstrap-tabcollapse.js"></script>  
@endsection