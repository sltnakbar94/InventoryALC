<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
	<title>{{@$data->WarehouseOut->do_number}}</title>

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
                                <b>{{@$data->warehouseOut->customer->company}}</b><br>
                                {{@$data->warehouseOut->customer->address}}<br>
                                Att : {{@$data->warehouseOut->pic_customer}}<br>
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><font face="Arial Black" size=5 color="#000000"><b>SURAT JALAN</b></font></td>
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
                                : {{date('d-m-Y', strtotime(@$data->dn_date))}}
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
                                : {{@$data->dn_number}}
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font font color="#000000">
                                REF no
                            </font>
                        </td>
                        @if ($data->module == 'sales_order')
                            <td>
                                <font font color="#000000">
                                    : {{@$data->warehouseOut->so_number}}
                                </font>
                            </td>
                        @else
                            <td>
                                <font font color="#000000">
                                    : {{@$data->warehouseOut->do_number}}
                                </font>
                            </td>
                        @endif
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table cellspacing="0" border="0">
	<tr>
		<td colspan="6" height="21" align="left" valign=bottom><font color="#000000">Bersama ini kami kirim kan dengan kendaraan no.pol : {{$data->plat_number}} , pengemudi : {{$data->driver}}, Berikut list barang yang kami sertakan :</font></td>
	</tr>
	<tr>
		<td width="43" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No.</font></b></td>
		<td width="100" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No Item</font></b></td>
		<td width="155" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Nama Item</font></b></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Jumlah</font></b></td>
		<td width="70" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Unit Satuan</font></b></td>
		<td width="95" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Remark</font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    @foreach (@$data->warehouseOut->details as $key=>$detil)
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">{{@$key+1}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->serial}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>{{@$detil->item->name}}</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000">{{@$detil->qty}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->item->uom->name}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">-</font></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endforeach
    <tr>
		<td colspan="6" height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
        <td colspan="2" style="" align="left" valign=bottom><font color="#000000">Keterangan : <br></font></td>
		<td style="" align="left" valign=bottom><font color="#000000"><br></font></td>
		<td colspan="2" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td colspan="3" style="" colspan=2 align="left" valign=bottom>
            <font color="#000000">
                <textarea style="border: none; width:auto; height:auto">{{@$data->warehouseOut->description}}</textarea>
            </font>
        </td>
		<td colspan="2" style="" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td colspan="6" height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
</table>
<table cellspacing="0" border="0">
    <tr>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Delivery By</font></td>
		<td width="20" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Sender By</font></td>
		<td width="20" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="160" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Received By</font></td>
		<td width="20" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
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
