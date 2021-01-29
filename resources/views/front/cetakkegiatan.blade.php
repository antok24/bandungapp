<!DOCTYPE html>
<html>
<head>
  <title>Sertifikat</title>
        <style>
            @page {
                margin: 0cm 0cm;
            }
            div{
                line-height: normal;
            }
            body {
                margin-top: 0.5cm;
                margin-left: 0cm;
                margin-right: 0cm;
                margin-bottom: 0cm;
                color: #000;
                font-family: "Times New Roman", Times, serif;
                font-size: 14px;

            }
            div.content{
                margin-top: 3.2cm;
                margin-left: 0cm;
                margin-right: 0cm;
                margin-bottom: 0cm;
                color: #000;
                font-family: "Times New Roman", Times, serif;
                font-size: 14px;
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
            header {
                position: fixed;
                top: 0.7cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
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
                left: 32%; 
                width: 130px; 
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
                top: 4.4cm; 
                left: 37%;
                color: invert;
                font-family: "Optima, sans-serif";
                font-size: 14px;
            }
        </style>
    </head>
<body>
    @foreach($result as $a)
  <div id="bg">
    <img src="assets/images/a.png" width="410px" height="400px">
  </div>
  <div id="qr">
    <img src="assets/images/qrcode.png" width="100px">
  </div>
   <header>
    <center><img src="assets/images/logo3.png" width="370" height="110"></center>
  </header>
  <div id="nomor">
      Nomor: {{$a->no_sertifikat}}
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
   <div class="content">
    <center>
    <p style="line-height: 1px;">
    <b>
    <h1>SERTIFIKAT</h1></b>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    diberikan kepada :<br/>
    <h2><b>{{$a->nama}}</b></h2>
    <h4><b>Nim : {{$a->nim}}</b></h4>
    <p>sebagai</p>
    <h2><b>{{$a->sebagai}}</b></h2>
    <h3>kegiatan {{$a->nama_kegiatan}} yang diselenggarakan oleh Universitas Terbuka Bandung<br>
    dengan topik<br>
    <i>"{{$a->tema}}"</i><br>
    Narasumber <i>{{$a->narasumber}}</i><br>
    pada tanggal {{$a->tgl_pelaksanaan}} di {{$a->lokasi}}
    <br>
    <br>
    Bandung, {{$a->tgl_sertifikat}} <br>
      Direktur,
      <br>
      <br>
      <br>
      <br>
      {{$a->nama_pegawai}}<br>
    NIP  {{$a->nip}}</h3>
    </p>
    </center>
    </div>
    @endforeach 
</body>
</html>
