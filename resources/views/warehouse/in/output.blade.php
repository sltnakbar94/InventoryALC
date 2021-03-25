@php
    //sub total
    $sub_total = $sum;

    //discount
    if (!empty($data->discount)) {
        $discount = ($data->discount/100)*$sub_total;
    }

    //ppn
    if ($data->ppn == 1) {
        if (!empty($discount)) {
            $ppn = (10/100)*($sub_total-$discount);
        }else {
            $ppn = (10/100)*($sub_total);
        }
    }

    //grand total
    if (!empty($discount)) {
        if (!empty($ppn)) {
            $grand_total = ($sub_total-$discount)+$ppn;
        } else {
            $grand_total = $sub_total-$discount;
        }
    }else {
        if (!empty($ppn)) {
            $grand_total = $sub_total+$ppn;
        }else {
            $grand_total = $sub_total;
        }
    }

    //pennyebut
    function penyebut($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " ". $huruf[$nilai];
        } else if ($nilai <20) {
            $temp = penyebut($nilai - 10). " belas";
        } else if ($nilai < 100) {
            $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
        }
        return $temp;
    }

    function terbilang($nilai) {
        if($nilai<0) {
            $hasil = "minus ". trim(penyebut($nilai));
        } else {
            $hasil = trim(penyebut($nilai));
        }
        return $hasil;
    }

    $terbilang = ucwords(terbilang($grand_total))." Rupiah";
@endphp
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
                            {{@$data->supplier->company}}<br>
                            {{@$data->supplier->address}}<br>
                            Att : {{@$data->pic_supplier}}<br>
                        </font>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td><font face="Arial Black" size=5 color="#000000"><b>PURCHASE ORDER</b></font></td>
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
                            : {{date('d-m-Y', strtotime(@$data->po_date))}}
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
                            : {{@$data->po_number}}
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
		<td width="15" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No.</font></b></td>
		<td width="80" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No Item</font></b></td>
		<td width="110" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Nama Item</font></b></td>
		<td width="38" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Jumlah</font></b></td>
		<td width="35" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Satuan</font></b></td>
		<td width="85" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Harga Satuan</font></b></td>
		<td width="15" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Discount</font></b></td>
		<td width="100" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Total</font></b></td>
        <td width="40" style="border-left: 1px solid #000000;"></td>
	</tr>
    @foreach ($data->details as $key=>$detail)
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">{{@$key+1}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detail->item->serial}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>{{@$detail->item->name}}</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000">{{@$detail->qty}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detail->item->uoms->name}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle><font color="#000000">Rp. {{number_format(@$detail->price)}} </font></td>
            @if (!empty($detail->discount) || $detail->discount != 0)
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle><font color="#000000">{{number_format(@$detail->discount)}}% </font></td>
            @else
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">-</font></td>
            @endif
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle><font color="#000000">Rp. {{number_format(@$detail->sub_total)}} </font></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endforeach
    <tr>
		<td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
		<td colspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Sub Total</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Rp. {{number_format(@$sub_total)}} </font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    @if (!empty($discount))
        <tr>
            <td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
            <td colspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Discount {{$data->discount}}%</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">- Rp. {{number_format(@$discount)}} </font></b></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endif
    @if (!empty($ppn))
        <tr>
            <td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
            <td colspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">PPN 10%</font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Rp. {{number_format(@$ppn)}} </font></b></td>
            <td style="border-left: 1px solid #000000;"></td>
        </tr>
    @endif
    <tr>
		<td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000"><br></font></b></td>
		<td colspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Grand Total</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Rp. {{number_format(@$grand_total)}} </font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    <tr>
		<td colspan="7" height="21" align="left" valign=bottom><font color="#000000">Terbilang : <b>{{$terbilang}}</b></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
		<td colspan="7" height="21" align="left" valign=bottom><font color="#000000"><br></font></td>
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
                @if (!empty(@$data->term_of_payment))
                    <textarea style="border: none; width:auto; height:auto">{{@$data->term_of_payment}}</textarea>
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
        <td width="150" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Issued By</font></td>
		<td width="65" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="150" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Approve By</font></td>
		<td width="65" align="left" style="border-left: 1px solid #000000" valign=bottom><font color="#000000"><br></font></td>
        <td width="150" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font color="#000000">Received By</font></td>
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
