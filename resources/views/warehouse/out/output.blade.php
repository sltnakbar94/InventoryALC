<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

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
 {{-- {{dd($data)}} --}}
    <table cellspacing="0">
        <tr>
            <td width="100%"><img src="{{ public_path('logo/ALA.jpeg')}}" style="width: 50%; margin-right:50px"></td>
            <td>
                <table cellspacing="0" style="margin-left: 50%" >
                    <tr>
                        <td width="260"><font color="#000000"></font></td>
                    </tr>
                    <tr>
                        <td>
                            <font color="#000000">
								<strong> PT. ANOMALI LUMBUNG ARTHA </strong><br>
                                Jln. Siliwangi km 3 kp Ciroyom <br>
                                Rt 31 Rw 08, Desa Pada Asih, 
								Kec. Cisaat, Kab. Sukabumi, Jawa Barat <br>
								Phone / Fax: +62 266 - 2485989
								<br>
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
</table>

<hr>
<div style="width:100%;height:1;border-bottom:10px solid blue;">
</div>  
<hr>

<table cellspacing="0" border="0">
	<tr>
		<td colspan="2" width="350" height="50" align="left" valign=bottom><font color="#000000"><p style="font-weight: bolder;font-size:larger">Delivery Order </p></font></td>
		<td colspan="2" width="350" height="50" align="left" valign=bottom><font color="#000000"><p style="font-weight: bolder;font-size:larger">Konsumen </p></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Tanggal  :    {{$data->do_date}} <br></font></td>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Nama     :     {{$data->pic_customer}} <br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">No. DO    :  {{$data->do_number}}<br></font></td>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Alamat        : {{$data->destination}} <br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        
        <td align="left" valign=bottom><font color="#000000"><br></font></td>
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
		<td width="43" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No.</font></b></td>
		<td width="200" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Nama Item</font></b></td>
		<td width="60" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">  Kode Item  </font></b></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">QTY</font></b></td>
		<td width="150" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000;  1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Jumlah/Kg
            (Netto)
            </font></b></td>
	
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    @foreach ($data->details as $key=>$detil)
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">{{@$key+1}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>{{@$detil->item->name}}</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->serial}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000">{{@$detil->qty}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->netto}}</font></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endforeach
</table>
<br>
<p>Dengan ini menyatakan bahwa barang diterima dalam keadaan baik,</p>
<table cellspacing="0" border="0">
    <tr>
       
        <td height="75" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
        <td width="110" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Penerima Barang</font></td>
		<td width="18" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="110" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Tanda Tangan Pengirim</font></td>
		<td width="17" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="110" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Bag. Pengeluaran Barang </font></td>
		<td width="17" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="110" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Bag. Penjualan</font></td>
		<td width="17" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
