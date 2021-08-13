<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
	<title>{{@$invoice->invoice_no}}</title>

	<style type="text/css">
        @page {
            size: 22cm 14cm;
            margin: 0mm 5mm 0mm 5mm;
        },
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Trebuchet MS"; font-size:x-small },
        font {
            font-size: 12px;
        }
	</style>

</head>

<body>
<?php
    function rupiah($angka){

        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;

    }
?>


<table width="100%" cellspacing="0" border="0">
	<tr>
		<td colspan=5 rowspan=3 height="42" align="center" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><img src="{{ public_path('logo/ALA.jpeg')}}" style="width: 25%"></font></td>
		<td align="left" width="70" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td colspan=5 align="left" valign=bottom><b><font style="font-size: 15px" face="Trebuchet MS" size=1 color="#000000">PT. ANOMALI LUMBUNG ARTHA</font></b></td>
		</tr>
	<tr>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td colspan=5 align="left" valign=top><font face="Trebuchet MS" size=1 color="#000000"> {{ $invoice->dn->WarehouseOut->warehouse->address }}  </font></td>
		</tr>
	<tr>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td colspan=5 align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"> Phone / Fax: {{ $invoice->dn->WarehouseOut->warehouse->telephone }} </font></td>
		</tr>
	<tr>
		<td colspan=11 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><hr>
            </div>
            <hr></font></td>
		</tr>
</table>
<table width="100%" cellspacing="0" border="0">
	<tr>
		<td colspan=5 align="left" valign=middle bgcolor="#FFFFFF"><b><i><font style="font-size: 15px;" face="Trebuchet MS" color="#000000">INVOICE</font></i></b></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td colspan=5 align="left" valign=middle bgcolor="#FFFFFF"><b><i><font style="font-size: 15px;" face="Trebuchet MS" color="#000000">Customer</font></i></b></td>
		</tr>
	<tr>
		<td width="55" align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">Tanggal</font></td>
		<td width="1" align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">:</font></td>
		<td width="100" colspan=3 valign=middle bgcolor="#FFFFFF" style="text-align: left"><font face="Trebuchet MS" color="#000000">{{date('d-m-Y', strtotime($invoice->invoice_date))}}</font></td>
		<td width="70" align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td width="55" align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">Nama</font></td>
		<td width="1" align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">:</font></td>
		<td width="100" colspan=3 valign=middle bgcolor="#FFFFFF" style="text-align: left"><font face="Trebuchet MS" color="#000000">{{@$invoice->dn->WarehouseOut->pic_customer}}</font></td>
		</tr>
	<tr>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">Nomor Invoice</font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">:</font></td>
		<td colspan=3 valign=middle bgcolor="#FFFFFF" style="text-align: left"><font face="Trebuchet MS" color="#000000">{{$invoice->invoice_no}}</font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">Alamat</font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">:</font></td>
		<td colspan=3 valign=middle bgcolor="#FFFFFF" style="text-align: left"><font face="Trebuchet MS" color="#000000">{{@$invoice->dn->WarehouseOut->destination}}</font></td>
		</tr>
</table>
<table width="100%" cellspacing="0" border="0">
	<tr>
		<td colspan=6 align="left" valign=middle bgcolor="#FFFFFF"><font face="Trebuchet MS" size=1 color="#000000">Berikut barang dan harga sesuai dengan pesanan:</font></td>
		</tr>
	<tr>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Trebuchet MS" size=1 color="#000000">no</font></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=middle><font face="Trebuchet MS" size=1 color="#000000">Nama Item</font></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Trebuchet MS" size=1 color="#000000">qty</font></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Trebuchet MS" size=1 color="#000000">Netto/Kg</font></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Trebuchet MS" size=1 color="#000000">harga</font></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Trebuchet MS" size=1 color="#000000">Jumlah Harga</font></td>
		</tr>
	@foreach ($data as $key=>$detil)
		@php
			$currWeight = $detil->item->netto*$detil->qty ;
			if ($key == 0) {
				$totalWeight = $currWeight ;
			}else{
				$totalWeight += $currWeight ;
			}
			if (!empty($detil->price)) {
				$harga = $detil->price;
			} else {
				$harga = 0;
			}
			$currPrice = $harga*$detil->qty*$detil->item->netto  ;
			if (@$key == 0) {
				$totalPrice = $currPrice ;
			}else{
				$totalPrice  += $currPrice ;
			}
			$jumlahHarga = $harga*$detil->qty*$detil->item->netto ;
		@endphp
		<tr>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" sdnum="1033;"><font face="Trebuchet MS" size=1 color="#000000">{{@$key+1}}</font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">{{@$detil->item->name}}</font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="10" sdnum="1033;0;0"><font face="Trebuchet MS" size=1 color="#000000">{{@$detil->qty}}</font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="right" valign=bottom sdval="30" sdnum="1033;0;0"><font face="Trebuchet MS" size=1 color="#000000">{{@$detil->item->netto}}</font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="right" valign=bottom sdval="5315" sdnum="1033;0;_-[$Rp-3809]* #,##0.00_-;-[$Rp-3809]* #,##0.00_-;_-[$Rp-3809]* -??_-;_-@_-"><font face="Trebuchet MS" size=1 color="#000000"> {{ rupiah($harga) }} </font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="right" valign=bottom sdval="194500" sdnum="1033;0;_-&quot;Rp&quot;* #,##0.00_-;&quot;-Rp&quot;* #,##0.00_-;_-&quot;Rp&quot;* -_-;_-@_-"><font face="Trebuchet MS" size=1 color="#000000"> {{ rupiah($jumlahHarga) }} </font></td>
		</tr>
	@endforeach
	<tr>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Sub Total</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="right" valign=bottom sdval="194500" sdnum="1033;0;_-&quot;Rp&quot;* #,##0.00_-;&quot;-Rp&quot;* #,##0.00_-;_-&quot;Rp&quot;* -_-;_-@_-"><font face="Trebuchet MS" size=1 color="#000000"> {{ rupiah($totalPrice) }} </font></td>
		</tr>
	<tr>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Discount</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="right" valign=bottom sdval="194500" sdnum="1033;0;_-&quot;Rp&quot;* #,##0.00_-;&quot;-Rp&quot;* #,##0.00_-;_-&quot;Rp&quot;* -_-;_-@_-"><font face="Trebuchet MS" size=1 color="#000000"> {{ rupiah($totalPrice-$data->sum('price_after_discount')) }} </font></td>
		</tr>
	<tr>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Total Keseluruhan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="right" valign=bottom sdval="194500" sdnum="1033;0;_-&quot;Rp&quot;* #,##0.00_-;&quot;-Rp&quot;* #,##0.00_-;_-&quot;Rp&quot;* -_-;_-@_-"><font face="Trebuchet MS" size=1 color="#000000"> {{ rupiah($data->sum('price_after_discount')) }} </font></td>
	</tr>
	@if (!empty($pay_of))
		<tr>
			<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
			<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
			<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
			<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
			<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
			<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
			<td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Dibayarkan/ {{date('d-m-Y', strtotime(@$due_date))}}</font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="right" valign=bottom sdval="194500" sdnum="1033;0;_-&quot;Rp&quot;* #,##0.00_-;&quot;-Rp&quot;* #,##0.00_-;_-&quot;Rp&quot;* -_-;_-@_-"><font face="Trebuchet MS" size=1 color="#000000"> {{ rupiah(@$pay_of) }} </font></td>
		</tr>
	@endif
	<tr>
		<td colspan=11 height="65" align="left" valign=top><font face="Trebuchet MS" size=1 color="#000000">Keterangan:<br>&bull;Pembayaran melalui rekening PT. Anomali Lumbung Artha<br>&bull;Nomor rekening Mandiri KCP JKT Gedung Patra Jasa No.</font><font style="font-size: 14px" face="Trebuchet MS" size=1 color="#000000"> 0700009916839 </font> . A/n: Anomali Lumbung Artha<br>&bull;Nomor NPWP : 92.920.041.8-067.000</font></td>
		</tr>
	<tr>
		<td height="15" align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
	</tr>
</table>
@if ($invoice->dn->WarehouseOut->warehouse->id = 1)
    <table cellspacing="0" border="0" width="100%">
        <tr>
            <td width="70" style="border-top: 1px solid #000000" colspan=2 align="center" valign=bottom><u><font face="Trebuchet MS" size=1 color="#000000">Agus Saepuloh</font></u></td>
            <td width="20" align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td width="70" style="border-top: 1px solid #000000" colspan=2 align="center" valign=bottom><u><font face="Trebuchet MS" size=1 color="#000000">Trisha Aulia</font></u></td>
            <td width="20" align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td width="70" style="border-top: 1px solid #000000" colspan=2 align="center" valign=bottom><u><font face="Trebuchet MS" size=1 color="#000000">{{@$invoice->dn->WarehouseOut->pic_customer}}</font></u></td>
            </tr>
        <tr>
            <td colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Kepala Cabang</font></td>
            <td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Accounting</font></td>
            <td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Penerima</font></td>
            </tr>
    </table>
@else
    <table cellspacing="0" border="0" width="100%">
        <tr>
            <td width="70" style="border-top: 1px solid #000000" colspan=2 align="center" valign=bottom><u><font face="Trebuchet MS" size=1 color="#000000">Agus Saepuloh</font></u></td>
            <td width="20" align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td width="70" style="border-top: 1px solid #000000" colspan=2 align="center" valign=bottom><u><font face="Trebuchet MS" size=1 color="#000000">Mudasir</font></u></td>
            <td width="20" align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td width="70" style="border-top: 1px solid #000000" colspan=2 align="center" valign=bottom><u><font face="Trebuchet MS" size=1 color="#000000">{{@$invoice->dn->WarehouseOut->pic_customer}}</font></u></td>
            </tr>
        <tr>
            <td colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Kepala Cabang</font></td>
            <td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Staff Gudang</font></td>
            <td align="left" valign=bottom><font face="Trebuchet MS" size=1 color="#000000"><br></font></td>
            <td colspan=2 align="center" valign=bottom><font face="Trebuchet MS" size=1 color="#000000">Penerima</font></td>
            </tr>
    </table>
@endif
<!-- ************************************************************************** -->
</body>

</html>
