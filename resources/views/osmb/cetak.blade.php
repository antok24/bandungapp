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
                margin-top: 3cm;
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
                top: 1cm;
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
    <style>
        div.atas {
                text-align: right;
                margin-top: 0.5cm;
                margin-right: 1cm;
                font-family: "Optima, sans-serif";
                font-size: 14px;
            }
    </style>
<body>
    @foreach($result as $a)
<div class="atas">{{$a->no_sertifikat}}</div>
<div id="bg">
    <img src="assets/images/a.png" width="340px" height="400px">
</div> 
   <header>
    <center><img src="assets/images/utlogo.png" width="150" height="120"/></center>
  </header>
  <div class="footer">
    <img src="assets/images/footer.png" width="101%" height="100%" />
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
    <h3>{{$a->nama_kegiatan}}<br>
    Yang diselenggarakan pada tanggal {{$a->tgl_pelaksanaan}} di Universitas Terbuka Bandung </h3><br>
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
    @endforeach	
</body>
</html>
