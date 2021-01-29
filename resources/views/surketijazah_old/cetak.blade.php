<!DOCTYPE html>
<html>
<head>
  <title>Surat Keterangan Ijazah</title>
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
                text-align: justify;
                font-size: 16px;
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
                height: 5mm;
            }
            table.table2 tr td:first-child{
                width: 1px;
            }
            table.table2 tr td:last-child{
                width: 60px;
            }
        </style>
    </head>
    
<body>
    @foreach($result as $a)

<header>
    <img src="assets/images/KOP SURAT.png" width="95%" height="95%"><hr />
</header> 
  <div class="footer">
    <img src="assets/images/footer.png" width="101%" height="100%" />
  </div>
   <div class="content">
        <br/>
    <table>
        <tr>
            <td>Nomor</td><td>: {{$a->no_surat}}</td>
        </tr>
        <tr>
            <td>Lampiran</td><td>: Dua Lembar</td>
        </tr>
        <tr>
            <td>Hal</td><td>: Konfirmasi Ijazah <br/> a.n {{$a->nama_mahasiswa}}</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>Yth.</td><td>{{$a->nama_instansi}}<br/>{{$a->kota_instansi}}</td>
    </table>
    <br/>
        Memenuhi permohonan klarifikasi/konfirmasi Badan Kegepagawaian Daerah Kabupaten Bandung untuk kelengkapan berkas kenaikan pangkat tentang ijazah atas nama {{$a->nama_mahasiswa}} yang mengikuti pendidikan pada Universitas Terbuka di Wilayah Kerja UPBJJ-UT Bandung, <br/>dengan ini kami beritahukan dengan hormat bahwa:
        <br/>
    <table class="table2">
        <tr>
            <td>a.</td><td> Universitas Terbuka (UT) adalah Perguruan Tinggi Negeri (PTN) ke-45 yang didirikan berdasarkan Keputusan Presiden RI Nomor: 41 Tahun 1984. Karena UT Perguruan Tinggi Negeri maka prosedur pembelajaran ditetapkan sesuai dengan peraturan yang dikeluarkan oleh Universitas Terbuka.</td>
        </tr>
        <tr>
            <td>b.</td><td> Status penyelenggaraan perkuliahan Program {{$a->nama_program_studi}} pada {{$a->nama_fakultas}} telah diakreditasi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) Nomor: {{$a->nomor_sk_ban_pt}} tanggal {{$a->tgl_mulai_sk}} Akreditasi Nilai Peringkat: {{$a->peringkat}}</td>
        </tr>
        <tr>
            <td>c.</td><td> Nomor Ijazah dan akta Nomor {{$a->no_ijazah_d}} dan {{$a->no_ijazah_a}} a.n {{$a->nama_mahasiswa}} NIM {{$a->nim}} adalah benar-benar asli dan sah dikeluarkan oleh Universitas Terbuka Nomor {{$a->nomor_sk_rektor}} tanggal {{$a->tanggal_sk}}. </td>
        </tr>
        <tr>
            <td>d.</td><td> Lulusan yang dimaksud merupakan mahasiswa masukan dari {{$a->nama_pendidikan_akhir}} bukan pindahan dari perguruan tinggi lain.
            </td>
        </tr>
        <tr>
            <td>e.</td><td> Lulusan tersebut terdaftar sebagai mahasiswa Universitas Terbuka di wilayah kerja UPBJJ - UT Bandung program studi {{$a->nama_program_studi}} ({{$a->kode_program_studi}}) masa registrasi awal {{$a->masa_registrasi_awal}} dan masa registrasi akhir {{$a->masa_registrasi_akhir}}.
            </td>
        </tr>
        <tr>
            <td>f.</td><td> Lulusan tersebut telah menyelesaikan {{$a->sks_yudisium}} sks sesuai dengan kurikulum yang ditetapkan Universitas Terbuka.
            </td>
        </tr>
    </table>
    <br/>
        Demikian informasi yang dapat kami sampaikan. Atas perhatian Bapak, kami ucapkan terima kasih.
    <br/>
    <br/>
    <div id="ttd" class="row">
        <div class="col-md-12">
            Bandung, {{$hariini}} <br/>
            Kepala,<br/> 
            <br/>
            <br/>
            <br/>
            Drs. Enang Rusyana, M.Pd.<br>
            NIP. 196310211988031003
        </div>
    </div>
    @endforeach 
</body>
</html>
