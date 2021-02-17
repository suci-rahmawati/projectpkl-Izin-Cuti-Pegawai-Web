<!DOCTYPE html>
<html>
<head>
<style>

.tdth {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.align{
  text-align: center;
}

.font
{
  font-family: arial, sans-serif;
  text-align: center;
  font-size: 13pt;
  font-style: bold;
}

.size{
  font-size:11pt;
}

</style>
</head>
<body>

<table width="100%" border="0">
  <tbody>
    <tr>
      <td  class="tdth" style="text-align:right">
        <img src="{{public_path('img/logo.png')}}"  width="70" height="70">
      </td>
      <td class="align tdth" valign="top" width="430">
        <font size="12pt">KEJAKSAAN REPUBLIK INDONESIA</font> <br> 
        <font size="15pt"><b>KEJAKSAAN TINGGI KALIMANTAN SELATAN</b></font> <br> 
        <font size="9pt">Jl. D.I. Panjaitan No. 26 Kel. Antasan Besar Kec. Banjarmasin Tengah Kota Banjarmasin (70114) <br>
          Telp. (0511) 6741001 Fax. (0511) 4366274</font> <br>              
      </td>
      <td class="tdth"></td>
    </tr>
    <tr>
      <hr width="100%" noshade="1">
    </tr>
  </tbody>
</table>

<table border="0" width="100%" class="size">
  <tbody>
    <tr>
      <td class="tdth" width="1">Cetak</td>
      <td class="tdth" width="1" >:</td>
      <td class="tdth d-block" width="330" >{{auth()->user()->level}}</td>
      <td class="tdth" style="text-align: left" width="60">Tanggal Cetak</td>
      <td class="tdth" style="text-align: left" width="1">:</td>
      <td class="tdth" style="text-align: left" width="78" >{{ Carbon\Carbon::parse()->translatedFormat('d F Y') }}</td>
    </tr>

    <tr style="background-color: white">
      <td class="tdth">Halaman</td>
      <td class="tdth">:</td>
      <td class="tdth">1</td>
      <td class="tdth"></td>
      <td class="tdth"></td>
      <td class="tdth"></td>
    </tr>

    <tr>
      <td class="tdth">Filter</td>
      <td class="tdth">:</td>
      <td class="tdth"></td>
      <td class="tdth"></td>
      <td class="tdth"></td>
      <td class="tdth"></td>
    </tr>
  </tbody>
</table>

<p class="font">LAPORAN IZIN CUTI PENTING</p>

<table class="size">
  <tr>
    <th class="align">No.</th>
    <th class="align">Tanggal Surat</th>
    <th class="align">No. Surat</th>
    <th class="align">NIP</th>
    <th class="align">Nama Pegawai</th>
    <th class="align">Tanggal Mulai</th>
    <th class="align">Tanggal Akhir</th>
    <th class="align">Selama</th>
    <th class="align">Jenis Cuti</th>
  </tr>
  @php $no=1; @endphp
  @foreach ($izinpenting as $item)
  <tr>
    <td class="align">{{ $no++ }}</td>
    <td class="align">{{ $item->tglsurat }}</td>
    <td class="align">{{ $item->no_surat}}</td>
    <td class="align">{{ $item->pegawaiptg->nip }}</td>
    <td>{{ $item->pegawaiptg->nama_pegawai }}</td>
    <td class="align">{{ $item->tglmulai }}</td>
    <td class="align">{{ $item->tglakhir }}</td>
    <td class="align">{{ $item->selama }}</td>
    <td class="align">{{ $item->jenis_cuti }}</td>
  </tr>
  @endforeach
</table>
<br><br>

<table width="100%">
  <tbody>
    <tr>
      <td class="tdth" width="50%"></td>
      <td class="align tdth">
        <font size="10pt">Banjarmasin, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Carbon\Carbon::parse()->translatedFormat('F Y') }} <br><br>
          <b>KEPALA KEJAKSAAN TINGGI KALIMANTAN SELATAN</b></u>
          <br><br><br><br><br>
          <b><u>ARIE ARIFIN, SH., MH</b></u><br>Jaksa Utama Madya NIP. 19601201 198503 1 004
        </font>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
