<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Permintaan Tindakan Perbaikan dan Pencegahan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table.main-table {
            border: 1px solid #000;
        }
        td {
            padding: 5px;
            vertical-align: top;
        }
        td.header {
            text-align: center;
            font-weight: bold;
            padding: 10px 0;
            border-bottom: 1px solid #000;
        }
        .logo {
            width: 100px;
            text-align: center;
        }
        .title {
            font-size: 16px;
            font-weight: bold;
        }
        .subtitle {
            font-size: 14px;
            font-weight: bold;
        }
        .info-table td {
            padding: 5px;
        }
        .dotted-line {
            border-bottom: 1px dotted #000;
            height: 20px;
            margin-bottom: 5px;
        }
        .content-field {
            border-bottom: 1px dotted #000;
            padding: 5px 0;
            min-height: 20px;
        }
        .multiple-dotted-lines {
            min-height: 80px;
        }
        .text-field {
            margin-bottom: 10px;
        }
        .signature-section {
            margin-top: 20px;
        }
        .signature-box {
            border: 1px solid #000;
            height: 80px;
            width: 150px;
            margin: 0 auto;
        }
        .signature-line {
            border-top: 1px solid #000;
            width: 300px;
            margin: 30px auto 0;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .page-info {
            text-align: right;
            margin-top: 0;
        }
        .nama-pelapor {
            text-align: center;
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <table class="main-table">
        <tr>
            <td width="20%" class="logo" style="border-right: 1px solid #000;">
                <img src="{{ public_path('assets/img/logo-udinus.png') }}" width="80" height="80">
            </td>
            <td width="80%" class="header">
                <div class="title">LABORATORIUM KOMPUTER UDINUS</div>
                <div class="subtitle">PERMINTAAN TINDAKAN PERBAIKAN DAN PENCEGAHAN (SEKRETARIS)</div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table class="page-info">
                    <tr>
                        <td width="150">Nomor</td>
                        <td width="10">:</td>
                        <td>F-LAB.KOM.UDINUS-SKT.12.01</td>
                    </tr>
                    <tr>
                        <td>Revisi</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Tanggal Berlaku</td>
                        <td>:</td>
                        <td>19 September 2022</td>
                    </tr>
                    <tr>
                        <td>Halaman</td>
                        <td>:</td>
                        <td>2 dari 2</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table class="info-table">
                    <tr>
                        <td width="150">Nomor SOP</td>
                        <td width="10">:</td>
                        <td class="content-field">{{ $ptpp->nomor_sop ?? '' }}</td>
                    </tr>
                    <tr>
                        <td width="150">Bentuk Ketidaksesuaian</td>
                        <td width="10">:</td>
                        <td class="content-field">{{ $ptpp->ketidaksesuaian ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td class="content-field">{{ $ptpp->lokasi ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Kejadian</td>
                        <td>:</td>
                        <td>
                            <table width="100%">
                                <tr>
                                    <td class="content-field" width="50%">{{ $ptpp->tgl_kejadian ? date('d-m-Y', strtotime($ptpp->tgl_kejadian)) : '' }}</td>
                                    <td width="50px">Jam :</td>
                                    <td class="content-field">{{ $ptpp->jam_kejadian ?? '' }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Laporan</td>
                        <td>:</td>
                        <td>
                            <table width="100%">
                                <tr>
                                    <td class="content-field" width="50%">{{ $ptpp->tgl_laporan ? date('d-m-Y', strtotime($ptpp->tgl_laporan)) : '' }}</td>
                                    <td width="50px">Jam :</td>
                                    <td class="content-field">{{ $ptpp->jam_laporan ?? '' }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <p>Hasil / Uraian Pengamatan Ketidaksesuaian / Potensi Ketidaksesuaian:</p>
                <div class="multiple-dotted-lines text-field">
                    {{ $ptpp->hasil_pengamatan ?? '' }}
                </div>

                <p>Tindakan Langsung:</p>
                <div class="multiple-dotted-lines text-field">
                    {{ $ptpp->tindakan_langsung ?? '' }}
                </div>

                <p>Permintaan Tindakan Perbaikan dan Pencegahan:</p>
                <div class="multiple-dotted-lines text-field">
                    {{ $ptpp->permintaan_perbaikan ?? '' }}
                </div>

                <table class="signature-section" width="100%">
                    <tr>
                        <td width="50%" class="text-center">Pelapor</td>
                        <td width="50%" class="text-center">Disetujui</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="signature-box"></div>
                        </td>
                        <td class="text-center">
                            <div class="signature-box"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="nama-pelapor">{{ $ptpp->nama_pelapor ?? '' }}</div>
                            <div>{{ $ptpp->bagian_pelapor ?? '' }} - {{ $ptpp->jabatan_pelapor ?? '' }}</div>
                            <div class="signature-line"></div>
                        </td>
                        <td class="text-center">
                            <p>TTD Disetujui Oleh</p>
                            <div class="signature-line"></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
