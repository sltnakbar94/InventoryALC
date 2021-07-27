<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
	<title>{{@$data->do_number}}</title>

	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p,textarea {  font-family:"Calibri"; font-size:small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
		comment { display:none;  }
	</style>

</head>

<body>

    <table cellspacing="0">
        <tr>
            <td width="100%"><img src="{{ public_path('logo/logoiti.png')}}" style="width: 40%; margin-right:40px"></td>
            <td>
                <table cellspacing="0" style="margin-left: 50%" >
                    <tr>
                        <td width="260"><font color="#000000"></font></td>
                    </tr>
                    <tr>
                        <td>
                            <font color="#000000">
								<strong style="font-size: x-large"> PT. Inovasi Teknologi Informasi</strong><br>
                                Grand Soepomo Jl. Prof Dr Soepomo No 73 B <br>
                                Menteng Dalem, Tebet, Jakarta Selatan 12810 <br>
								Web : www.inovtech-in.com<br>
								Telp. 021-83706200
								<br>
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
</table>

<hr>
<hr>
<h3 style="text-align:center">Delivery Note</h3>

<table cellspacing="0" border="0">
    <tr>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; {{$data->etd}} <br></font></td>
        <td colspan="2" style="border-top:1px solid black;border-right:1px solid black;border-left:1px solid black" width="350" height="5" align="Center" valign=bottom><font color="#000000"><font color="#000000"><strong> Penerima </strong> <br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">No. SJ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&ensp;: &nbsp; {{$data->dn_number}} <br></font></td>
        <td colspan="2" style="border-right:1px solid black;border-left:1px solid black" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Nama&emsp;&nbsp;: &nbsp; {{@$data->WarehouseOut->pic_customer}} <br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">No. PO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;: <br></font></td>
        <td colspan="2"  style="border-right:1px solid black;border-left:1px solid black" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000"> No.Hp :   <br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2"  width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Kendaraan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <br></font></td>
        <td colspan="2" style="border-right:1px solid black;border-left:1px solid black" width="350" height="5" align="left" valign=bottom><font color="#000000">Alamat        : &nbsp; {{$data->WarehouseOut->destination}}</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2"   width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">No. Pol. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; {{ $data->plat_number }} <br></font></td>
        <td colspan="2" style="border-right:1px solid black;border-left:1px solid black" width="350" height="5" align="left" valign=bottom><font color="#000000"></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2"   width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Driver &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;: &nbsp; {{$data->driver}} <br></font></td>
        <td colspan="2" style="border-right:1px solid black;border-left:1px solid black" width="350" height="5" align="left" valign=bottom><font color="#000000"></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2"   width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">No.HP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; {{ $data->driver_phone }} <br></font></td>
        <td colspan="2" width="350" height="5" align="left" style="border-right:1px solid black;border-left:1px solid black;border-bottom: 1px solid black" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
</table>
    <table cellspacing="0" border="0" style="margin-top:10px">
	<tr>
		<td colspan="2" height="21" align="left" valign=bottom><font color="#000000">Dikirimkan barang-barang sebagai berikut :</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td width="43" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#2B3F93"><b><font color="white">No.</font></b></td>
		<td width="210" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#2B3F93"><b><font color="white">Nama Item</font></b></td>
		<td width="60" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#2B3F93"><b><font color="white">  Kode </font></b></td>
        <td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#2B3F93"><b><font color="white">QTY</font></b></td>
        <td width="150" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#2B3F93"><b><font color="white">Jumlah</font></b></td>
		
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    @foreach ($data->details as $key=>$detil)
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">{{@$key+1}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>{{@$detil->item->name}}</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->serial}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000">{{@$detil->qty}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->uoms->name}}</font></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endforeach
</table>
<br>
<p>Dengan ini menyatakan bahwa barang diterima dalam keadaan baik,</p>
<table cellspacing="0" border="0">
    <tr>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=top><font color="#000000">Dikeluarkan Oleh</font></td>
		<td width="18" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Dikirim Oleh</font></td>
		<td width="17" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Diterima Oleh</font></td>
        <td width="17" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td height="75" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=top></td>
		<td width="18" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom></td>
		<td width="17" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom></td>
        <td width="17" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
    </tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
