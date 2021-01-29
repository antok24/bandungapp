<!DOCTYPE html>
<html>
<head>
  <title>Sertifikat</title>
        <style>
            @page {
                margin: 0cm 0cm;
            }
            body {
                margin-top: 0.5cm;
                margin-left: 0cm;
                margin-right: 0cm;
                margin-bottom: 0cm;
                color:#0073e6;
                font-family: "Optima, sans-serif";
            }
            div.content{
                margin-top: 3cm;
            }
            h1 {
            font-size: 40px;
            word-spacing: 1px;
            }

            h2 {
            font-size: 30px;
            word-spacing: 1px;
            }
            p {
            font-size: 15px;
            line-height: : 12px;
            }
            div.footer {
                position: absolute; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 5cm;
                background-repeat: no-repeat;
            }
             #bg {
                position: absolute;
                z-index: -1; 
                top: 3.5cm; 
                left: 37%; 
                width: 170px; 
                height: 300px;
                color: invert;
            }
            #stempel {
                position: absolute;
                z-index: -1; 
                top: 13.3cm; 
                left: 33%; 
                width: 100px; 
                height: 300px;
                color: invert;
            }
            #ttd {
                position: absolute;
                z-index: -1; 
                top: 14cm; 
                left: 44%; 
                width: 100px; 
                height: 300px;
                color: invert;
            }
            #qr {
                position: absolute;
                z-index: -1; 
                top: 13.5cm; 
                left: 60%; 
                width: 100px; 
                height: 300px;
                color: invert;
            }
            #nomor{
                position: absolute;
                z-index: -1; 
                top: 4.2cm; 
                left: 38%;
                color: invert;
                font-family: "Optima, sans-serif";
                font-size: 14px;
            }
            #sertifikat{
                position: absolute;
                z-index: -1; 
                top: 2.3cm; 
                left: 35%;
                color: invert;
                font-family: "Optima, sans-serif";
            }
        </style>
    </head>
<body>
    <table style="margin-left: auto;margin-right:auto">
      <tr>
        <td>
          <img src="assets/images/kemendikbud.png" width="100px">
        </td>
        <td>
          <img src="assets/images/utlogo.png" width="100px">
        </td>
        <td>
          <img src="assets/images/blu-promise.png" width="100px">
        </td>
        <td>
          <img src="assets/images/disporseni.png" width="100px">
        </td>
      </tr>
    </table>
    @foreach($result as $a)
  <div id="bg">
    <img src="assets/images/disporseni-bg.png" width="600px" height="400px">
  </div>
  <div id="qr">
    <img src="data:image/png;base64, {!! $qrcode !!}">
  </div>
  <div id="sertifikat">
    <span style="font-size:60px; font-weight:bold">SERTIFIKAT</span>
  </div>
  <div id="nomor">
      Nomor: {{$a->no_sertifikat}}
  </div>
  <div style="margin-top:3cm; text-align:center">
    <span>Diberikan kepada</span><br/><br/>
    <span style="font-size:25px; font-weight:bold; color:#005ce6">
      {{ $a->nama_mahasiswa }}
    </span><br/>
    <span>Sebagai</span><br/>
    <span style="font-size:25px; font-weight:bold;">
      {{ $a->sebagai }}
    </span><br/>
    <span style="font-size:20px; font-weight:bold; color:#005ce6">
      {{ $a->jenis_lomba }}
    </span><br/>
    <span>Dalam kegiatan Disporseni Nasional Universitas Terbuka Tahun 2020 <br/>
    Yang diselenggarakan Secara Daring (Dalam Jaringan) dan Luring (Luar Jaringan), 03 - 31 Agustus 2020</span>
  </div>
  <div id="stempel">
    <img src="assets/images/stempel.png" width="100" height="133">
  </div>
  <div id="ttd">
    <img src="assets/images/ttd.png" width="100" height="80">
  </div>
  <div class="footer">
    <img src="assets/images/footer.png" width="101%" height="100%">
  </div>
    @endforeach	
</body>
</html>
