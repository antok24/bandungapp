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
                left: 35%; 
                width: 100px; 
                height: 300px;
                color: invert;
            }
            #stempel {
                position: absolute;
                z-index: -1; 
                top: 12.7cm; 
                left: 33%; 
                width: 100px; 
                height: 300px;
                color: invert;
            }
            #ttd {
                position: absolute;
                z-index: -1; 
                top: 13.3cm; 
                left: 44%; 
                width: 100px; 
                height: 300px;
                color: invert;
            }
            #ttd2{
                position: absolute;
                z-index: -1; 
                top: 13cm; 
                left: 60%;
            }
            #ttdbawah {
                position: absolute;
                z-index: -1; 
                top: 14cm; 
                left: 60%; 
                width: 100px; 
                height: 300px;
                color: invert;
            }
            #stempel2 {
                position: absolute;
                z-index: -1; 
                top: 13.5cm; 
                left: 51%; 
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
            .table1 {
                font-family: sans-serif;
                color: black;
                border-collapse: collapse;
                left: 0cm;
            }
 
            .table1, th, td {
                border: 1px solid #999;
                padding: 8px 20px;
            }
        </style>
    </head>
<body>
    @foreach($result as $a)
  <div id="bg">
    <img src="assets/images/a.png" width="340px" height="400px">
  </div>
   <header>
    <center><img src="assets/images/utlogo.png" width="150" height="120"></center>
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
    <img src="assets/images/foo.png" width="101%" height="100%">
  </div>
   <div class="content">
    <center>
    <p style="line-height: 1px;">
    <b>
    <h1>SERTIFIKAT</h1></b>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    diberikan kepada :<br/>
    <h2><b>{{$a->nama}}</b></h2>
    <h4><b>NIM : {{$a->nim}}</b></h4>
    <p>sebagai</p><br>
    <h2><b>{{$a->sebagai}}</b></h2>
    <h3>{{$a->nama_kegiatan}} bagi mahasiswa Program Diploma/Sarjana Universitas Terbuka<br>
    yang diselenggarakan pada tanggal {{$a->tgl_pelaksanaan}} oleh Universitas Terbuka Bandung </h3><br>
    <h3>Bandung, {{$a->tgl_sertifikat}} <br>
      Direktur,
      <br>
      <br>
      <br>
      <br>
      Drs. Enang Rusyana, M.Pd<br>
    NIP  196310211988031003</h3>
    </p>
    </center>
    </div>
    <p></p><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
      <h3>Materi Kegiatan <br>
      Pelatihan Keterampilan Belajar Jarak Jauh Program Diploma / Sarjana<br/>
      Tanggal {{$a->tgl_sertifikat}}</h3>
    </center>
    <table class="table1" align="center">
        <tr>
            <th bgcolor="yellow">No</th>
            <th bgcolor="yellow" align="center">TOPIK</th>
            <th bgcolor="yellow" align="center">JAM PELATIHAN</th>
            <th bgcolor="yellow" align="center">PRODUK PELATIHAN</th>
        </tr>
        <tr>
            <td align="center">1</td>
            <td>Keterampilan Mengelola Waktu</td>
            <td align="center">1</td>
            <td align="center">Rencana Belajar</td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td>Keterampilan Membaca Efektif dan Merekam Hasil Baca</td>
            <td align="center">2</td>
            <td align="center">Resume</td>
        </tr>
        <tr>
            <td align="center">3</td>
            <td>Pemanfaatan Layanan UT Online dan Ragam Sumber Belajar</td>
            <td align="center">2</td>
            <td align="center">Pemanfaatan Layanan UT Online</td>
        </tr>
        <tr>
            <td align="center">4</td>
            <td>Kiat Mengikuti Tutorial Online</td>
            <td align="center">2</td>
            <td align="center">-</td>
        </tr>
        <tr>
            <td align="center">5</td>
            <td>Kiat Sukses Menghadapi UAS</td>
            <td align="center">1</td>
            <td align="center">-</td>
        </tr>
        <tr>
            <td></td>
            <td align="right">TOTAL JAM PELATIHAN</td>
            <td align="center">8</td>
            <td></td>
        </tr>
    </table>
    <div id="ttd2">
        <h3>Bandung, {{$a->tgl_sertifikat}} <br>
          Direktur,
          <br>
          <br>
          <br>
          <br>
          Drs. Enang Rusyana, M.Pd<br>
          NIP  196310211988031003</h3>
    </div>
    <div id="stempel2">
        <img src="assets/images/stempel.png" width="100" height="133">
    </div>
    <div id="ttdbawah">
        <img src="assets/images/ttd.png" width="100" height="80">
    </div>
    @endforeach 
</body>
</html>
