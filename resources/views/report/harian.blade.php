<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Rekap Caddy Fee</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:8px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-3wr8{font-weight:bold;font-size:8px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;}
                .tg .tg-rv5w{font-size:8px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .header-right{font-family: "Arial";font-size: 15px}
                .page{}
            </style>

            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Caddy Master Report</h2></center>
                <center><h4>{{$harian}}</h4></center>
            </div>
            <div class="page">
            </div>
            <div class="page">
                <span class="header-right">Golfer AM: {{ $totalam }}</span><br>
                <span class="header-right">Golfer PM: {{ $totalpm }}</span><br>
                <span class="header-right">Total Golfer: </span>
            </div>
            <br>
            <div>
                Morning
                <table class="tg">
                  <tr>
                    <th class="tg-3wr7">No<br></th>
                    <th class="tg-3wr7">Tag<br></th>
                    <th class="tg-3wr7">Players Name<br></th>
                    <th class="tg-3wr7">Caddy Name<br></th>
                    <th class="tg-3wr7">Remarks<br></th>
                  </tr>
                  @foreach ($data_am as $key => $am)
                  <tr>
                    <td class="tg-rv5w" width="3%">{{ $key + 1 }}</td>
                    <td class="tg-rv4w" width="20%">{{$am->no_bagtag}}</td>
                    <td class="tg-rv4w" width="20%">{{$am->nama_golfer}}</td>
                    <td class="tg-rv4w" width="30%">{{ $am->nama_caddy}}</td>
                    <td class="tg-rv4w" width="20%">{{$am->remarks}}</td>
                  </tr>
                  @endforeach
                </table>
            </div>
            <br>
            <div>
                Afternoon
                <table class="tg">
                  <tr>
                    <th class="tg-3wr7">No<br></th>
                    <th class="tg-3wr7">Tag<br></th>
                    <th class="tg-3wr7">Players Name<br></th>
                    <th class="tg-3wr7">Caddy Name<br></th>
                    <th class="tg-3wr7">Remarks<br></th>
                  </tr>
                  @foreach ($data_pm as $key => $pm)
                  <tr>
                    <td class="tg-rv5w" width="3%">{{ $key + 1 }}</td>
                    <td class="tg-rv4w" width="20%">{{$pm->no_bagtag}}</td>
                    <td class="tg-rv4w" width="20%">{{$pm->nama_golfer}}</td>
                    <td class="tg-rv4w" width="30%">{{ $pm->nama_caddy}}</td>
                    <td class="tg-rv4w" width="20%">{{$pm->remarks}}</td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </body>
    </head>
</html>