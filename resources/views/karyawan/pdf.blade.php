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
                .tg .tg-rv4w{font-size:8px;font-family:"Arial", Helvetica, sans-serif !important;;}
                .tg .tg-rv5w{font-size:8px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
            </style>

            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Rekap Caddy Fee</h2></center>
            </div>
            <br>
            <div style="font-family:Arial; font-size:12px;">Edelewis A</div>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">No<br></th>
                <th class="tg-3wr7">Nama Caddy<br></th>
                <th class="tg-3wr7">Grade<br></th>
                <th class="tg-3wr7">Jumlah Turun<br></th>
              </tr>
              @foreach ($customer as $key => $data)
              <tr>
                <td class="tg-rv5w" width="3%">{{ $key + 1 }}</td>
                <td class="tg-rv4w" width="20%">{{$data->nama}}</td>
                @if($data->rating >= 4.5)
                <td class="tg-rv5w" width="3%">A</td>
                @elseif($data->rating >= 3.5)
                <td class="tg-rv5w" width="3%">B</td>
                @elseif($data->rating >= 2.5)
                <td class="tg-rv5w" width="3%">C</td>
                @elseif($data->rating >= 1.5)
                <td class="tg-rv5w" width="3%">D</td>
                @else
                <td class="tg-rv5w" width="3%">E</td>
                @endif
                <td class="tg-rv4w" width="30%">{{ $data->performance}}</td>
              </tr>
              @endforeach
            </table>
            <br>
            <div style="font-family:Arial; font-size:12px;">Edelewis B</div>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">No<br></th>
                <th class="tg-3wr7">Nama Caddy<br></th>
                <th class="tg-3wr7">Grade<br></th>
                <th class="tg-3wr7">Jumlah Turun<br></th>
              </tr>
              @foreach ($customer as $key => $data)
              <tr>
                <td class="tg-rv5w" width="3%">{{ $key + 1 }}</td>
                <td class="tg-rv4w" width="20%">{{$data->nama}}</td>
                @if($data->rating >= 4.5)
                <td class="tg-rv5w" width="3%">A</td>
                @elseif($data->rating >= 3.5)
                <td class="tg-rv5w" width="3%">B</td>
                @elseif($data->rating >= 2.5)
                <td class="tg-rv5w" width="3%">C</td>
                @elseif($data->rating >= 1.5)
                <td class="tg-rv5w" width="3%">D</td>
                @else
                <td class="tg-rv5w" width="3%">E</td>
                @endif
                <td class="tg-rv4w" width="30%">{{ $data->performance}}</td>
              </tr>
              @endforeach
            </table>
        </body>
    </head>
</html>
