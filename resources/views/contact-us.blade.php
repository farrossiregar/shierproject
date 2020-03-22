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
    <div class="col-md-8" style="border-right: 1px solid lightgray;">
      <div class="row">
        <div class="col-md-12">
          <br><br><br>
          <div style="padding: 1px 3px; background-color: black; color: white; width: 130px; border-radius: 10px 10px 0px 0px;">
              <h4><b>Kontak Kami</b></h4>
          </div>
          <div style="border: 2px solid black;">
          </div>
          <hr style="color: black;">
          <div class="row">
            <div class="col-md-12">
              <table>
                <tr>
                  <td style="width:10%;"><h4>Alamat</h4></td>
                  <td>:</td>
                  <td><h4>Jalan Melati No 130, Blok C-A, RT/RW 003/006, Perumahan Ciputat Baru, Tangerang Selatan, Banten, 15413.</h4></td>
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
          <div style="padding: 1px 3px; background-color: black; color: white; width: 175px; border-radius: 10px 10px 0px 0px;">
              <h4><b>Pemasangan Iklan</b></h4>
          </div>
          <div style="border: 2px solid black;">
          </div>
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

@endsection
