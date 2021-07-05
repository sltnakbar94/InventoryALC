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

    <?php


function rupiah($angka){

	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}


?>

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
		<td colspan="2" width="350" height="50" align="left" valign=bottom><font color="#000000"><p style="font-weight: bolder;font-size:larger">Invoice </p></font></td>
		<td colspan="2" width="350" height="50" align="left" valign=bottom><font color="#000000"><p style="font-weight: bolder;font-size:larger">Customer</p></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
    <tr>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Tanggal  :    {{$invoice->invoice_date}} <br></font></td>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Nama     :    {{@$data->WarehouseOut->pic_customer}}<br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>
    <tr>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Nomer Invoice : {{$invoice->invoice_no}} <br></font></td>
        <td colspan="2" width="350" height="5" align="left" valign=bottom><font color="#000000"><font color="#000000">Alamat        : {{$data->WarehouseOut->destination}} <br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
    </tr>

</table>

<table cellspacing="0" border="0">

	<tr>
		<td colspan="3" height="20" align="left" valign=bottom><font color="#000000">Berikut barang dan harga sesuai dengan pesanan:</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td width="43" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">No.</font></b></td>
		<td width="150" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Nama Item</font></b></td>
		<td width="60" style="border-top: 1px solid #   000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">  QTY  </font></b></td>
		<td width="50" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Netto/Kg</font></b></td>
		<td width="100" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Harga</font></b></td>
        <td width="100" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000;  1px solid #000000" align="center" valign=middle bgcolor="#D9D9D9"><b><font color="#000000">Jumlah Harga</font></b></td>
        <td style="border-left: 1px solid #000000;"></td>
	</tr>
    @foreach ($data->details as $key=>$detil)
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><font color="#000000">{{@$key+1}}</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>{{@$detil->item->name}}</td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{@$detil->qty}}</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="65" sdnum="1033;">
        @php
        $currWeight = $detil->item->netto*$detil->qty ;
         if ($key == 0) {
             $totalWeight = $currWeight ;
         }else{
             $totalWeight += $currWeight ;
         }
        @endphp
        <font color="#000000">{{@$detil->item->netto}}</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
        @php
          if ($detil->item->name == "MPL PRO-2")
            {
                $harga = 9944 ;
            }
            if (@$detil->item->name == "MPL PRO-3")
            {
                $harga = 9829 ;
            }
            if (@$detil->item->name == "MPE-2") {
                $harga = 5486;
            }
            if (@$detil->item->name == "MPE-3") {
                $harga = 5315;
            }
            if (@$detil->item->name == "MPE-4") {
                $harga = 5315 ;
            }
            if (@$detil->item->name == "MPM-3") {
                $harga = 9000;
            }
            if (@$detil->item->name == "MR-01") {
                $harga = 16600;
            }
            if (@$detil->item->name == "MR-03") {
                $harga = 16.100;
            }

        @endphp
        <font color="#000000
             $totalPrice = $c">
            {{ rupiah($harga) }}
        </font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
          @php
        $currPrice = $harga*$detil->qty*$detil->item->netto  ;
         if (@$key == 0) {
             $totalPrice = $currPrice ;
         }else{
            $totalPrice  += $currPrice ;
         }
          @endphp
        <font color="#000000">
            @php
            $jumlahHarga = $harga*$detil->qty*$detil->item->netto ;
            @endphp
            {{ rupiah($jumlahHarga) }}
        </font></td>
        <td style="border-left: 1px solid #000000;"></td>
    </tr>
@endforeach
    <tr>
        <td  align="center" valign=middle><font color="#000000"></font></td>
        <td  align="left" valign=middle></td>
        <td  align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000"></font></td>
        <td  align="center" valign=middle><font color="#000000"></font></td>
        <td  style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font color="#000000">Sub Total</font></td>
        <td  style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000"> {{ rupiah($totalPrice) }} </font></td>
        <td style="border-left: 1px solid #000000;"></td>
    </tr>
    <tr>
        <td  align="center" valign=middle><font color="#000000"></font></td>
        <td  align="left" valign=middle></td>
        <td  align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000"></font></td>
        <td  align="center" valign=middle><font color="#000000"></font></td>
        <td  style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font color="#000000">Discount</font></td>
        <td  style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>

        @php
         if ($totalWeight >= 100 && $totalWeight < 500) {
             $discount = 1/100 ;
             $d = "1%" ;
         }
         if ($totalWeight >= 500 && $totalWeight <= 1000 ) {
             $discount = 2/100;
             $d = "2%" ;
         }
         if ($totalWeight >= 1000 && $totalWeight <= 5000) {
             $discount = 3/100;
             $d = "3%" ;
         }
         if ($totalWeight >= 5000 && $totalWeight < 8000 ) {
             $discount = 4/100 ;
             $d = "4%" ;
         }
         if ($totalWeight >= 8000 ) {
             $discount = 5/100;
             $d = "5%" ;
         }

         $discountHarga = $totalPrice*$discount ;
        @endphp
        <font color="#000000"> {{ rupiah($discountHarga) }} </font></td>
        <td style="border-left: 1px solid #000000;"></td>
    </tr>

    <tr>
        <td  align="center" valign=middle><font color="#000000"></font></td>
        <td  align="left" valign=middle></td>
        <td  align="center" valign=middle sdval="65" sdnum="1033;"><font color="#000000"></font></td>
        <td  align="center" valign=middle><font color="#000000"></font></td>
        <td  style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font color="#000000">Total Keseluruhan</font></td>
        <td  style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">{{ rupiah($totalPrice-$discountHarga) }}</font></td>
        <td style="border-left: 1px solid #000000;"></td>
    </tr>
</table>
<br>

<table cellspacing="0" border="0" style="margin-top:10px">

    <tr>
        <td width="110" style="border-top: 1px solid #000000;" align="center" valign=bottom><font color="#000000">Hormat Kami</font></td>
		<td width="18" align="left" valign=bottom><font color="#000000"><br></font></td>
        <td width="110" style="border-top: 1px solid #000000;" align="center" valign=bottom><font color="#000000">Tanda Terima</font></td>
		<td width="17" align="left" valign=bottom><font color="#000000"><br></font></td>

	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
