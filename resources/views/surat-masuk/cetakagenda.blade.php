<!DOCTYPE html>
<html>
<head>
  <title>Buku Agenda</title>
        <style>
            @page {
                margin: 0cm 0cm;
            }
            div{
            	line-height: normal;
            }
            body {
                margin-top: 0.5cm;
                margin-left: 1cm;
                margin-right: 1cm;
                margin-bottom: 0.5cm;
    			color: #000;
    			font-family: "Times New Roman", Times, serif;

            }
            body {
                font-size: 12px;
            }
            div.content{
                margin-top: 1cm;
                margin-left: 1cm;
                margin-right: 1cm;
                margin-bottom: 0.5cm;
                color: #000;
                font-family: "Times New Roman", Times, serif;
                font-size: 12px;
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
   <div class="content">
    <center>
    <p style="line-height: 2px;">
    <h2><u>B U K U &nbsp; A G E N D A &nbsp; S U R A T &nbsp; M A S U K </u></h2></p></center><br/>
    <table width="115%" rules="all" cellpadding="5" style="font-size: 12px; font-family:times new roman;">
        <thead>
            <tr>
            <th style="background-color:#66ccff" width="20%"><center>Nomor Agenda</center></th>
            <th style="background-color:#66ccff" width="25%"><center>Nomor Surat</center></th>
            <th style="background-color:#66ccff" width="5%"><center>Tanggal Surat</center></th>
            <th style="background-color:#66ccff" width="25%"><center>Asal Surat</center></th>
            <th style="background-color:#66ccff" width="30%"><center>Perihal</center></th>
            <th style="background-color:#66ccff" width="5%"><center>Sifat</center></th>
            <th style="background-color:#66ccff" width="5%"><center>Tanggal Agenda</center></th>
            </tr>
        </thead>
        @foreach ($agenda as $a)
        <tbody>
            <tr>
                <td>{{$a->no_agenda}}</td>
                <td>{{$a->no_surat}}</td>
                <td>{{$a->tgl_surat}}</td>
                <td>{{$a->asal_surat}}</td>
                <td>{{$a->perihal}}</td>
                <td>{{$a->sifat_surat}}</td>
                <td>{{$a->tgl_agenda}}</td>
            </tr>
        </tbody>
        @endforeach       
    </table>
    </div>
</body>
</html>