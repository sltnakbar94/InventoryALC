<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
	<title>{{@$data->do_number}}</title>

	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p,textarea { font-family:"Calibri"; font-size:small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
		comment { display:none;  }
	</style>

</head>

<body>
    <table cellspacing="0" border="0">
        <tr>
            <td width="260"><img src="{{ public_path('pdf\do\result_htm_312545a060562a73.png')}}" width=144 height=83 hspace=12 vspace=6></td>
            <td width="260" rowspan="3" valign="top">
                <table cellspacing="0" border="1" style="border-style:solid; margin-top: 50px">
                    <tr>
                        <td width="260"><font color="#000000">DELIVERY TO :</font></td>
                    </tr>
                    <tr>
                        <td>
                            <font color="#000000">
                                {{@$data->customer->company}}<br>
                                {{@$data->customer->address}}<br>
                                Att : {{@$data->customer->name}}<br>
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><font face="Arial Black" size=5 color="#000000"><b>DELIVERY ORDER</b></font></td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" border="0">
                    <tr>
                        <td width="50">
                            <font font color="#000000">
                                Date
                            </font>
                        </td>
                        <td>
                            <font font color="#000000">
                                : {{date('d-m-Y', strtotime(@$data->date_out))}}
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font font color="#000000">
                                Number
                            </font>
                        </td>
                        <td>
                            <font font color="#000000">
                                : {{@$data->do_number}}
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font font color="#000000">
                                REF no
                            </font>
                        </td>
                        <td>
                            <font font color="#000000">
                                : {{@$data->ref_no}}
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table cellspacing="0" border="0">
	<tr>
		<td colspan="2" height="21" align="left" valign=bottom><font color="#000000">Daftar Item Barang:</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td width="43" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No Item</font></b></td>
		<td width="150" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Nama Item</font></b></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Jumlah</font></b></td>
		<td width="70" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Unit Satuan</font></b></td>
		<td width="95" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Remark</font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    @foreach ($data->bagOutDetail as $detil)
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">{{@$detil->id}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->serial}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>{{@$detil->item->name}}</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000">{{@$detil->qty}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->unit}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">-</font></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endforeach
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
        <td width="128" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Delivery By</font></td>
		<td width="65" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="128" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Sender By</font></td>
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
