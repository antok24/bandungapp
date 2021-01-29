<!DOCTYPE html>
<html>
<head>
  <title>Surat Keterangan Mahasiswa</title>
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

            }
            body {
                font-size: 12px;
            }
            div.content{
                margin-top: 3cm;
                margin-left: 2.5cm;
                margin-right: 2.5cm;
                margin-bottom: 0cm;
                color: #000;
                font-family: "Times New Roman", Times, serif;
                font-size: 17px;
            }
            h2 {
            font-size: 18px;
            }
			p {
  			font-size: 15px;
  			line-height: : 12px;
			}
            a {
            font-size: 20px;
            line-height: : 12px;
            }
            header {
                position: fixed;
                top: 0.5cm;
                left: 0.5cm;
                right: 0.5cm;
                height: 3cm;
            }
            div.footer {
                position: absolute; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 3cm;
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
            #ttd{
                float: right;
            }
            tr td{
                text-align: justify;
                vertical-align: top;
            }
            tr td:first-child{
                width: 10mm;
                height: 8mm;
            }
            tr td:last-child{
                width: 43mm;
            }
        </style>
    </head>
    
<body>
    @foreach($result as $a)

<header>
    <img src="assets/images/KOP SURAT.png" width="100%" height="100%"><hr />
</header> 
  <div class="footer">
    <img src="assets/images/footer.png" width="101%" height="100%" />
  </div>
   <div class="content">
    <br/>
    <br/>
    <center>
    <p style="line-height: 2px;">
    <h2><u>S U R A T &nbsp; K E T E R A N G A N </u><br/>
        Nomor: {{$a->no_surat}}</h2></p></center><br/>
    
        Kepala Unit Program Belajar Jarak Jauh Universitas Terbuka Bandung, dengan ini menerangkan bahwa:
        <br/>
        <br/>
    <table>
        <tr>
            <td>Nama</td><td>: {{$a->nama_mahasiswa}}</td><br/>
        </tr>
        <tr>
            <td>NIM</td><td>: {{$a->nim}}</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td><td>: {{$a->tempat_lahir_mahasiswa}}, {{$a->tgl_lahir}}</td>
        </tr>
        <tr>
            <td>Program Studi</td><td>: {{$a->nama_program_studi}}</td>
        </tr>
        <tr>
            <td>Fakultas</td><td>: {{$a->nama_fakultas}}</td>
        </tr>
        <tr>
            <td>Alamat</td><td>: {{$a->alamat_mahasiswa}}</td>
        </tr>
    </table>
        terdaftar sebagai mahasiswa Universitas Terbuka di wilayah kerja UPBJJ-UT Bandung
        mulai Masa Registrasi Awal {{$a->mr_awal}} sampai dengan Masa Registrasi Akhir {{$a->mr_akhir}}.
        <br/>
        <br/>
        Demikian surat keterangan ini kami buat untuk dipergunakan sebagaimana mestinya.
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div id="ttd" class="row">
        <div class="col-md-12">
            Bandung, {{$hariini}} <br/>
            {{$a->jabatan}},<br/>
            {{$a->sub_bagian}} 
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            {{$a->nama_pegawai}}<br>
            NIP. {{$a->nip}}
        </div>
    </div>
    
    @endforeach	
</body>
</html>
