@extends('layout.app')

@section('title', 'Contact Us')

@section('content')

<div style="height: 30vh; width: 104vw; overflow: hidden;" class="row">
<?php
    use Jenssegers\Agent\Agent;
    $agent = new Agent();
    if(!$agent->isPhone()){
?>
<?php
    }else{
?>
  <div class="col-md-12" style="background-image: url('{{ asset('image/shierproject-logo-black.jpg') }}'); background-size: cover; width: 110vw; height: 100%; background-repeat: no-repeat; background-position: center;"></div>
<?php
    }
?>
  <div class="col-md-12" style="background-image: url('{{ asset('image/shierproject-logo-black.jpg') }}'); background-size: cover; width: 100vw; height: 100%; background-repeat: no-repeat; background-position: center;"></div>
</div>


<!--    END MAIN    -->

<div class="container" style="background-color: white; padding-bottom: 15vh;">
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-12">

          <br><br>
          <h3 style="color: black;">Tentang <b><i>KAMI</i></b></h3>
          <hr style="color: black;">
          <div class="row">
            <div class="col-md-12">
            <br><br>
              <h4>
                Shierproject.com membagikan konten berisi informasi yang menarik mengenai Jalan-jalan, Tokoh Berpengaruh, Tekno, 
                Hiburan dan Lifestyle yang ringan namun juga padat dan berusaha mengambil sudut pandang yang berbeda dari yang lain.
              </h4>
            </div>
          </div>

          <br><br><br>
          <h3 style="color: black;">Kontak <b><i>KAMI</i></b></h3>

          <hr style="color: black;">
          <div class="row">
            <div class="col-md-12">
              <table>
                <tr>
                  <td style="width:10%;"><h4>Alamat</h4></td>
                  <td>:</td>
                  <td><h4>Jakarta, Indonesia</h4></td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td style="width:10%;"><h4>Email</h4></td>
                  <td>:</td>
                  <td>
                    <h4><a href="https://mail.google.com/mail/?subject=Pemasangan Iklan / Kerjasama&view=cm&fs=1&tf=1&to=shier.projectapp@gmail.com
                        &cc=farrosashiddiq@gmail.com
                        &body=Dear Marketing Shier Project,%0D%0ASaya tertarik memasang iklan / bekerjasama dengan Shierproject.com." target="_blank" 
                        style="color: white; background-color: #cf3f30; text-decoration: none; padding: 4px; border-radius: 5px;">
                          <i class="fa fa-envelope"></i> shier.projectapp@gmail.com
                    </a></h4>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td style="width:10%;"><h4>Telepon</h4></td>
                  <td>:</td>
                  <td>
                    <h4><a href="https://api.whatsapp.com/send?phone=6287871200923&text=Saya tertarik memasang iklan / bekerjasama dengan Shierproject.com." target="_blank" style="color: white; background-color: #32a852; text-decoration: none; padding: 4px; border-radius: 5px;">
                            <i class="fa fa-whatsapp"></i> 087871200923
                    </a></h4>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td style="width:10%;"><h4>Instagram</h4></td>
                  <td>:</td>
                  <td>
                    <h4><a href="https://www.instagram.com/shierproject" target="_blank" style="color: white; background-color: #cf0ec8; text-decoration: none; padding: 4px; border-radius: 5px;">
                      <i class="fa fa-instagram"></i> Shier Project
                    </a></h4>
                  </td>
                  <br>
                </tr>
              </table>
            </div>
          </div>

          <br><br>
          <h3 style="color: black;">Pemasangan <b><i>IKLAN</i></b></h3>
          <hr style="color: black;">
          <div class="row">
            <div class="col-md-12">
            <br><br>
              <h4>Shierproject.com terbuka untuk pemasangan iklan produk maupun jasa.
              Untuk pemasangan, silakan kontak kami.</h4>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  @include('layout.footer')
</div>

@endsection
