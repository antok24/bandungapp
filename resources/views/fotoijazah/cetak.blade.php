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
                margin-top: 2cm;
                margin-left: 2.5cm;
                margin-right: 2.5cm;
                margin-bottom: 0cm;
                color: #000;
                font-family: "Times New Roman", Times, serif;
                font-size: 14px;
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
                top: 2cm;
                left: 3cm;
                right: 0.5cm;
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
            #foto{
                float: right;
            }
            #ttd{
                float: right;
            }
            tr td{
                text-align: left;
                vertical-align: top;
            }
            tr td:first-child{
                width: 10mm;
                height: 3mm;
            }
            tr td:last-child{
                width: 43mm;
            }
            img{
                height: 130px;
                width: 230px;
            }
        </style>
    </head>
    
<body>
    @foreach($result as $a)
   <div class="content">
    <center>
    <h2><u>FORMULIR PENYERAHAN PASFOTO UNTUK IJAZAH</u></h2></center>
    <center>No. Ijazah: {{$a->no_ijazah_d}}</p>
    </center><br/>
    
        <b>Kepada Yth. Kepala UPBJJ-UT Bandung<br/>
        Mohon diteruskan ke Bagian Administrasi Akademik dan Kelulusan BAKP-UT.</b><br/>
    <table>
        <tr>
            <td>Nomor SK Kelulusan</td><td>: {{$a->nomor_sk_rektor}} (isi Nomor dan Tahun SK Rektor)</td><br/>
        </tr>
        <tr>
            <td>Nama</td><td>: {{$a->nama_mahasiswa}}</td><br/>
        </tr>
        <tr>
            <td>NIM</td><td>: {{$a->nim}}</td>
        </tr>
        <tr>
            <td>NIK</td><td>: {{$a->nik}}</td>
        </tr>
        <tr>
            <td>Tempat dan Tanggal Lahir</td><td>: {{$a->tempat_lahir}},{{$a->tgl_lahir}}</td>
        </tr>
        <tr>
            <td>Fakultas</td><td>: {{$a->nama_fakultas}}</td>
        </tr>
        <tr>
            <td>Program Studi</td><td>: Kode {{$a->kode_program_studi}} / {{$a->nama_program_studi}}</td>
        </tr>
        <tr>
            <td>UPBJJ-UT</td><td>: Kode 24 / Bandung</td>
        </tr>
        <tr>
            <td>Alamat</td><td>: {{$a->alamat_mahasiswa}}</td>
        </tr>
    </table>
        <br/>

        <u>Persyaratan Pasphoto:</u><br/><img src="assets/images/pasphoto.png" style="float:right;" />
        a. Hitam Putih dof ukuran 3x4 sebanyak 2 lembar.<br/>
        b. Posisi muka menghadap kedepan.<br/>
        c. Memakai Pakaian Resmi (bukan Kaos atau T-shirt).<br/>
        d. Lampirkan photocopy Kartu Tanda Mahasiswa<br/> &nbsp;&nbsp;&nbsp; (KTM) dan Kartu Tanda Penduduk (KTP).<br/>
        e. Tuliskan NIM dan nama pada belakang pasphoto.<br/>
        f. Tempel foto setengah bagian atas pada kolom<br/> &nbsp;&nbsp;&nbsp; disamping agar mudah dilepas.<br/>
        <br/>
        Demikian kami sampaikan, mohon Ijazah diproses sesuai ketentuan.
    <br/>
    <br/>
    <div id="ttd" class="row">
        <div class="col-md-12">
            Bandung, {{$hariini}} <br/>
            Pengirim,
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            ( <u>{{$a->nama_mahasiswa}}</u> )<br>
        </div>
    </div>
    </br>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <b><u><i>Catatan :</i></u></b>
    <br/>
    1. <i>Semua lulusan wajib mengirimkan pasphoto paling lambat 2 (dua) minggu sebelum pelaksanaan wisuda di UT-Pusat, bagi lulusan yang tidak ikut wisuda ijazah akan dikirim ke UPBJJ-UT.</i><br/>
    2. <i>UT Pusat tidak bertanggungjawab atas kerusakan atau hilangnya ijazah apabila sampai batas waktu 5 (lima) bulan sejak tanggal penetapan kelulusan belum dilengkapi pasphoto.</i><br/>
    3. <i>NIK (Nomor Induk Kependudukan) WAJIB diisi untuk kelengkapan data PDDIKTI</i><br/>
    
    @endforeach
    </div>	
</body>
</html>
