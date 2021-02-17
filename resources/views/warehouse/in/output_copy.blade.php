<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DOC Sementara</title>
</head>
<style>
body,
html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    margin: 1cm;
    /* -webkit-print-color-adjust: exact; */
}

@page {
    /*size: 8.27in 11.69in;*/
    size: 8.5in 13in;
    margin: 0;
}

p {
    margin-top: 8px;
    margin-bottom: 8px;
}

h5 {
    font-weight: normal;
}

@media print {
    @page {
        size: portrait;
        size: 8.27in 11.69in;
    }

    html {
        height: auto;
        -webkit-print-color-adjust: exact;
    }

    .header {
        page-break-before: always;
    }

    .footer {
        page-break-after: always;
    }
}

body {
    margin: 0;
}

.wrapper {
    padding-top: .25em;
    padding-bottom: .25em;
    display: table;
    width: 100%;
}

.wrapper div {
    padding-left: 1rem;
    padding-right: 1rem;
}

.col-1 {
    display: table-cell;
    width: 8.33333333333%;
}

.col-2 {
    display: table-cell;
    width: 16.6666666667%;
}

.col-3 {
    display: table-cell;
    width: 25%;
}

.col-4 {
    display: table-cell;
    width: 33.3333333333%;
}

.col-5 {
    display: table-cell;
    width: 41.6666666667%;
}

.col-6 {
    display: table-cell;
    width: 50%;
}

.col-7 {
    display: table-cell;
    width: 58.3333333333%;
}

.col-8 {
    display: table-cell;
    width: 66.6666666667%;
}

.col-9 {
    display: table-cell;
    width: 75%;
}

.col-10 {
    display: table-cell;
    width: 83.3333333333%;
}

.col-11 {
    display: table-cell;
    width: 91.6666666667%;
}

.col-12 {
    display: table-cell;
    width: 100%;
}

.text-justify {
    text-align: justify;
}

.top-wrapper {
    margin-top: 100px;
}

.text-center {
    text-align: center;
}

.bolder p {
    font-weight: 900;
}

.nomargin {
    margin: 0;
}

.notopmargin {
    margin-top: 0;
}

.nobottommargin {
    margin-bottom: 0;
}

.lgtopmargin {
    margin-top: 40px;
}

.mdtopmargin {
    margin-top: 20px;
}

.smtopmargin {
    margin-top: 10px;
}

.xstopmargin {
    margin-top: 5px;
}

.smbottommargin {
    margin-bottom: 10px;
}

.lgbottommargin {
    margin-bottom: 40px;
}

.nopadding {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

.mdpadding {
    padding-left: 2rem;
    padding-right: 2rem;
}

.smtoppadding {
    padding-top: 10px;
}

p,
ul li,
ol li {
    font-size: 9pt;
}

table {
    border-collapse: collapse;
}

table th,
table td {
    border: 1px solid #000;
    text-align: center;
    font-size: 9pt;
}

.sub-eng {
    font-size: 8pt;
    font-style: italic;
    font-weight: normal;
}

/*.header-table {*/
/*letter-spacing: 3px;*/
/*}*/

ul {
    list-style-type: none;
}

.with-border {
    border: solid 2px #000000;
    padding-left: 0.25rem;
    padding-right: 0.25rem;
    font-weight: bold;
}

.allborder {
    border: solid 1px #000000;
}

.bottomborder {
    border-bottom: solid 1px #000000;
}

.keterangan:before {
    content: "";
    position: absolute;
    left: 2rem;
    height: 1px;
    width: 15%;
    /* or 100px */
    border-top: 3px solid black;
}

.keterangan p {
    font-size: 7pt;
    margin: 0;
}

ol.nomargin {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
}

.print:last-child {
    page-break-after: auto;
}

p.tab>span {
    display: inline-block;
    min-width: 20px;
}

p.form>span {
    display: inline-block;
    min-width: 275px;
}

p.subform:after {
    content: "";
    position: absolute;
    right: 5rem;
    height: 1px;
    width: 15%;
    /* or 100px */
    border-top: 1px solid black;
}

.box {
    border: solid 1px #000000;
    padding-top: 5px;
    padding-bottom: 5px;
}

strike {
    background: url('http://dummyimage.com/20x2/000/000') repeat-x left 0.72em;
}

.rowsingle td {
    padding-top: 20px;
    padding-bottom: 20px;
}
</style>

<body>
    <div class="print">
        <!-- <div class="top-wrapper"></div> -->
        <div class="wrapper">
            <div class="col-8 text-center">
                <p class="nomargin"><strong>DOKUMEN PENYESUAIAN</strong></p>
                <p class="nomargin"><strong>MANAJEMEN KESELAMATAN SEMENTARA</strong></p>
                <p class="notopmargin"><i>INTERIM DOCUMENT OF COMPLIANCE</i></p>
                <h5 class="nomargin">NO. : {{@$data->cert_number}}</h5>
                <p style="margin-top:1%;" class="nomargin"><strong>Diterbitkan berdasarkan ketentuan KONVENSI
                        INTERNASIONAL TENTANG KESELAMATAN JIWA DI LAUT, 1974, sebagaimana telah diamandemen</strong></p>
                <p class="sub-eng notopmargin">Issued under the provisions of the INTERNATIONAL CONVENTION FOR THE
                    SAFETY OF LIFE AT SEA, 1974, as amended</p>
                <p class="nobottommargin"><strong>berdasarkan wewenang PEMERINTAH REPUBLIK INDONESIA</strong></p>
                <p class="sub-eng notopmargin">under the authority of the GOVERNMENT OF THE REPUBLIC OF INDONESIA</p>
                <p class="nobottommargin"><strong>oleh DIREKTORAT JENDERAL PERHUBUNGAN LAUT</strong></p>
                <p class="sub-eng notopmargin">by DIRECTORATE GENERAL OF SEA TRANSPORTATION</p>
            </div>
        </div>
        <div class="mdpadding">
            <table width="100%">
                <tr>
                    <th>
                        <div class="header-table">NAMA PERUSAHAAN</div>
                        <div class="sub-eng">Company Name</div>
                    </th>
                    <th>
                        <div class="header-table">ALAMAT PERUSAHAAN</div>
                        <div class="sub-eng">Company Address</div>
                    </th>
                    <th>
                        <div class="header-table">NOMOR IDENTIFIKASI PERUSAHAAN</div>
                        <div class="sub-eng">Company Identification Number</div>
                    </th>
                </tr>
                <tr class="rowsingle">
                    <td><strong>{{ !empty(@$data->user->company_name) ? strtoupper(@$data->user->company_name) : strtoupper(@$data->company_name) }}</strong>
                    </td>
                    <td><strong>{{ !empty(@$data->user->alamat) ? strtoupper(@$data->user->alamat) : strtoupper(@$data->company_address) }}</strong>
                    </td>
                    <td><strong>{{strtoupper(@$data->nomor_identifikasi_perusahaan)}}</strong></td>
                </tr>
            </table>
        </div>
        <div style="padding-left: 15px; padding-right: 15px;">
            <div class="wrapper text-justify">
                <div class="col-10">
                    <p class="nobottommargin"><strong>DENGAN INI DINYATAKAN BAHWA Sistem Manajemen Keselamatan
                            Perusahaan telah memenuhi tujuan dari paragraf 1.2.3 ketentuan Koda Manajemen Internasional
                            untuk Keselamatan Pengoperasian Kapal dan Pencegahan Pencemaran <i>(ISM Code)</i>, untuk
                            tipe
                            kapal tersebut di bawah ini (coret yang tidak perlu).</strong></p>
                    <p class="sub-eng nomargin">THIS IS TO CERTIFY THAT the Safety Management System of the Company has
                        been recognized as meeting the objectives of paragraph 1.2.3 of the International Management
                        Code for the Safe Operation of Ships and for Pollution Prevention (ISM-Code), for the types of
                        ships listed below (deleted as appropriate)</p>
                </div>
            </div>
            <div class="wrapper nomargin" style="padding-top: -5px;">
                <div class="col-4"></div>
                <div class="col-8">
                    <ul class="nomargin">
                        @php
                        $jenis_kapal = explode(',', @$data->jenis_kapal_doc);
                        @endphp

                        @if(in_array("Kapal penumpang", $jenis_kapal))
                        <li><strong>Kapal penumpang</strong></li>
                        <li class="sub-eng">Passenger ship</li>
                        @else
                        <li><strong><strike> Kapal penumpang</strike></strong></li>
                        <li class="sub-eng"><strike>Passenger ship</strike></li>
                        @endif

                        @if(in_array("Kapal penumpang dengan kecepatan tinggi", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Kapal penumpang dengan kecepatan tinggi</strong></li>
                        <li class="sub-eng">Passenger high speed craft</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Kapal penumpang dengan kecepatan
                                    tinggi</strike></strong></li>
                        <li class="sub-eng"><strike>Passenger high speed craft</strike></li>
                        @endif

                        @if(in_array("Kapal barang dengan kecepatan tinggi", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Kapal barang dengan kecepatan tinggi</strong></li>
                        <li class="sub-eng">Cargo high speed craft</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Kapal barang dengan kecepatan
                                    tinggi</strike></strong></li>
                        <li class="sub-eng"><strike>Cargo high speed craft</strike></li>
                        @endif

                        @if(in_array("Kapal pengangkut muatan curah", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Kapal pengangkut muatan curah</strong></li>
                        <li class="sub-eng">Bulk Carrier</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Kapal pengangkut muatan curah</strike></strong>
                        </li>
                        <li class="sub-eng"><strike>Bulk Carrier</strike></li>
                        @endif

                        @if(in_array("Kapal tangki minyak", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Kapal tangki minyak</strong></li>
                        <li class="sub-eng">Oil tanker</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Kapal tangki minyak</strike></strong></li>
                        <li class="sub-eng"><strike>Oil tanker</strike></li>
                        @endif

                        @if(in_array("Kapal tangki pengangkut bahan kimia", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Kapal tangki pengangkut bahan kimia</strong></li>
                        <li class="sub-eng">Chemical tanker</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Kapal tangki pengangkut bahan
                                    kimia</strike></strong></li>
                        <li class="sub-eng"><strike>Chemical tanker</strike></li>
                        @endif

                        @if(in_array("Kapal tangki pengangkut gas", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Kapal tangki pengangkut gas</strong></li>
                        <li class="sub-eng">Gas carrier</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Kapal tangki pengangkut gas</strike></strong></li>
                        <li class="sub-eng"><strike>Gas carrier</strike></li>
                        @endif

                        @if(in_array("Unit pengeboran lepas pantai berpindah", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Unit pengeboran lepas pantai berpindah</strong></li>
                        <li class="sub-eng">Mobile offshore drilling unit</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Unit pengeboran lepas pantai
                                    berpindah</strike></strong></li>
                        <li class="sub-eng"><strike>Mobile offshore drilling unit</strike></li>
                        @endif

                        @if(in_array("Kapal barang lainnya", $jenis_kapal))
                        <li style="margin-top: 5px;"><strong>Kapal barang lainnya</strong></li>
                        <li class="sub-eng">Other cargo ship</li>
                        @else
                        <li style="margin-top: 5px;"><strong><strike>Kapal barang lainnya</strike></strong></li>
                        <li class="sub-eng"><strike>Other cargo ship</strike></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="wrapper" style="padding-top: -5px;">
                <div class="col-6">
                    <p class="nobottommargin"><strong>Dokumen Sementara ini berlaku sampai dengan : </strong></p>
                    <p class="sub-eng nomargin">This Document of Compliance is valid until <span
                            style="margin-left: 70px"> : </span></p>
                </div>
                <div class="col-3" style="padding-left: -130">
                    <p class="nobottommargin">
                        <strong>{{$data->expired_at ? strtoupper(Carbon\Carbon::parse($data->expired_at)->formatLocalized('%d %B %Y')) : ''}}.</strong>
                    </p>
                    <p class="sub-eng nomargin">
                        {{$data->expired_at ? strtoupper(date('F d, Y', strtotime($data->expired_at))) : ''}}.
                    </p>
                </div>
            </div>
            <div class="wrapper" style="padding-top: -5px;">
                <div class="col-6">
                    <p class="nobottommargin"><strong>Diterbitkan di {{@$data->upt->pelabuhan}}</strong></p>
                    <p class="sub-eng nomargin">Issued at</p>
                </div>
                <div class="col-2">
                    <p class="nobottommargin"><strong>Tanggal</strong></p>
                    <p class="sub-eng nomargin">Date of issue</p>
                </div>
                <div class="col-4" style="padding-left: -30px;">
                    <p class="nobottommargin">
                        <strong>{{$data->sign_date ? strtoupper(Carbon\Carbon::parse($data->sign_date)->formatLocalized('%d %B %Y')) : ''}}</strong>
                    </p>
                    <p class="sub-eng nomargin">
                        {{$data->sign_date ? strtoupper(date('F d, Y', strtotime($data->sign_date))) : ''}}</p>
                </div>
            </div>
            <div class="wrapper" style="padding-top: -5px;">
                <div class="col-5"></div>
                <div class="col-6 text-center">
                    <p class="nobottommargin"><strong>A.n. MENTERI PERHUBUNGAN</strong></p>
                    <p class="sub-eng nomargin"><strong>O.b. MINISTER OF TRANSPORTATION</strong></p>
                    <p class="nomargin" style="margin-top: 2px;"><strong>DIREKTUR JENDERAL PERHUBUNGAN LAUT</strong></p>
                    <p class="sub-eng nomargin"><strong>DIRECTOR GENERAL OF SEA TRANSPORTATION</strong></p>
                    <p class="nomargin" style="margin-top: 2px;"><strong>DIREKTUR PERKAPALAN DAN KEPELAUTAN</strong></p>
                    <p class="sub-eng nomargin"><strong>DIRECTOR OF SHIPPING AND SEAFARERS</strong></p>
                    <p class="nomargin" style="margin-top: 2px;"><strong>U.b.</strong></p>
                    <p class="sub-eng nomargin"><strong>For</strong></p>
                    <p class="nomargin" style="margin-top: 2px;"><strong>KEPALA SUBDIREKTORAT</strong></p>
                    <p class="nomargin"><strong>PENCEGAHAN PENCEMARAN DAN</strong></p>
                    <p class="nomargin"><strong>MANAJEMEN KESELAMATAN KAPAL DAN</strong></p>
                    <p class="nomargin"><strong>PERLINDUNGAN LINGKUNGAN DI PERAIRAN</strong></p>
                    <p class="sub-eng nomargin"><strong>DEPUTY DIRECTOR FOR MARINE POLLUTION PREVENTION AND SHIP SAFETY
                            MANAGEMENT AND ENVIRONMENT PROTECTION</strong></p>
                    @if(@$data->is_ph == 1)
                    <p class="nomargin" style="margin-top: 2px;"><strong>Pelaksana Harian</strong></p>
                    <p class="sub-eng nomargin"><strong>Acting/Official in Charge</strong></p>
                    @endif
                    @if(@$data->is_ph == 2)
                    <p class="nomargin" style="margin-top: 2px;"><strong>Pelaksana Tugas</strong></p>
                    <p class="sub-eng nomargin"><strong>Acting/Official in Charge</strong></p>
                    @endif
                </div>
            </div>
            <div class="wrapper lgtopmargin footer">
                <div class="col-5"></div>
                <div class="col-6 text-center">
                    <p class="nobottommargin"><strong><u>{{@$data->signname}}</u></strong></p>
                    <p class="nomargin"><strong>{{@$data->golongan}}</strong></p>
                    <!-- <p class="nomargin"><strong></strong></p> -->
                    <p class="nomargin"><strong>NIP. {{@$data->nip}}</strong></p>
                </div>
            </div>
            <div class="wrapper">
                <div style="width: 15%">
                    <div class="text-center with-border">
                        <p>DKP. II - 31a</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
