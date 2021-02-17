<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
	<title>{{@$data->po_number}}</title>

	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p,textarea { font-family:"Calibri"; font-size:small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
		comment { display:none;  }
	</style>

</head>

<body>{{dd($data)}}
<table cellspacing="0" border="0">
	<colgroup width="43"></colgroup>
	<colgroup width="124"></colgroup>
	<colgroup width="321"></colgroup>
	<colgroup width="84"></colgroup>
	<colgroup width="85"></colgroup>
	<colgroup width="156"></colgroup>
	<colgroup width="12"></colgroup>
	<tr>
		<td colspan=2 rowspan=5 height="91" align="left" valign=bottom><font color="#000000"><br><img src="{{ public_path('pdf\do\result_htm_312545a060562a73.png')}}" width=144 height=83 hspace=12 vspace=6>
		</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td colspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><font color="#000000">DELIVERY TO :</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td colspan="2" style="border-left: 1px solid #000000" align="left" valign=bottom><font color="#000000">PT. xxxxxxxxxxx</font></td>
		<td style="border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td colspan="2" style="border-left: 1px solid #000000" align="left" valign=bottom><font color="#000000">Jl Almat Kantorf</font></td>
		<td style="border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=bottom><font color="#000000">Kota</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="35" colspan="3" align="left" valign=bottom><font face="Arial Black" size=5 color="#000000"><b>PURCHASE ORDER</b></font></td>
		<td colspan="2" style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=2 align="left" valign=bottom><font color="#000000">Att : {{@$data->supplier->name}}</font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td width="40" align="left" valign=bottom><font color="#000000">Date</font></td>
		<td width="100" align="left" valign=bottom><font color="#000000">: {{@$data->date_in}}</font></td>
		<td width="150" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td width="50" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td width="75"align="center" valign=bottom><font color="#000000"><br></font></td>
		<td width="100"align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="10" align="left" valign=bottom><font color="#000000">Number</font></td>
		<td colspan="2" align="left" valign=bottom><font color="#000000">: {{@$data->po_number}}</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="10" align="left" valign=bottom><font color="#000000">REF No</font></td>
		<td align="left" valign=bottom><font color="#000000">:</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td colspan="2" height="21" align="left" valign=bottom><font color="#000000">Daftar Item Barang:</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
</table>
<table cellspacing="0" border="0">
	<tr>
		<td width="15" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No.</font></b></td>
		<td width="90" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No Item</font></b></td>
		<td width="130" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Nama Item</font></b></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Jumlah</font></b></td>
		<td width="40" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Satuan</font></b></td>
		<td width="85" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Harga Satuan</font></b></td>
		<td width="100" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Total</font></b></td>
        <td width="40" style="border-left: 1px solid #000000;"></td>
	</tr>
    @foreach ($data->bagInDetail as $detil)
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">{{@$detil->id}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->serial}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>{{@$detil->item->name}}</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000">{{@$detil->qty}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->unit}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">-</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">-</font></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endforeach
    <tr>
		<td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Sub Total</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    <tr>
		<td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">PPN {{@$data->ppn}}%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    <tr>
		<td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Grand Total</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    <tr>
		<td colspan="4" height="21" align="left" valign=bottom><font color="#000000">Terbilang:</font></td>
		<td colspan="3" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td colspan="6" height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
        <td colspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><font color="#000000">Keterangan :</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td colspan="2" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td colspan="3" style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=2 align="left" valign=bottom>
            <font color="#000000">
                <textarea style="border: none; width:auto; height:auto">{{@$data->description}}</textarea>
                @if (!empty(@$data->supplier_id))
                **Delivery To:<br>
                @if (!empty(@$data->supplier->company))
                    {{@$data->supplier->company}}<br>
                @endif
                @if (!empty(@$data->supplier->address))
                    {{@$data->supplier->address}}<br>
                @endif
                Att : {{@$data->supplier->name}}<br>
                @endif
            </font>
        </td>
		<td colspan="2" style="border-left: 1px solid #000000;" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td colspan="6" height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
</table>
<table cellspacing="0" border="0">
    <tr>
        <td width="128" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Issued By</font></td>
		<td width="65" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="128" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Approve By</font></td>
		<td width="65" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="128" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Received By</font></td>
		<td width="65" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
        <td height="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
