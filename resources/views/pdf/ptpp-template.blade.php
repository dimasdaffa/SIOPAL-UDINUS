<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permintaan Tindakan Perbaikan dan Pencegahan (PTPP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            font-size: 12px;
            color: #000;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            border: 1px solid #000;
            padding: 10px 0;
            margin-bottom: 10px;
        }
        .title {
            font-size: 16px;
            font-weight: bold;
        }
        .subtitle {
            font-size: 14px;
        }
        .main-form {
            width: 100%;
            border-collapse: collapse;
        }
        .main-form td {
            border: 1px solid #000;
            padding: 8px;
            vertical-align: top;
        }
        .field-label {
            font-weight: normal;
            width: 200px;
        }
        .multi-row {
            min-height: 80px;
        }
        .verification-section {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }
        .verification-section td {
            border: 1px solid #000;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">LABORATORIUM KOMPUTER UDINUS</div>
            <div class="subtitle">PERMINTAAN TINDAKAN PERBAIKAN DAN PENCEGAHAN (SEKRETARIS)</div>
        </div>

        <table class="main-form">
            <tr>
                <td class="field-label">Bentuk Ketidaksesuaian</td>
                <td>: {{ $ptpp->ketidaksesuaian }}</td>
            </tr>
            <tr>
                <td class="field-label">Lokasi</td>
                <td>: {{ $ptpp->lokasi }}</td>
            </tr>
            <tr>
                <td class="field-label">Tanggal Kejadian</td>
                <td>: {{ date('d-m-Y', strtotime($ptpp->tgl_kejadian)) }} Jam: {{ date('H:i', strtotime($ptpp->jam_kejadian)) }}</td>
            </tr>
            <tr>
                <td class="field-label">Tanggal Laporan</td>
                <td>: {{ date('d-m-Y', strtotime($ptpp->tgl_laporan)) }} Jam: {{ date('H:i', strtotime($ptpp->jam_laporan)) }}</td>
            </tr>
            <tr>
                <td class="field-label">Hasil / Uraian Pengamatan Ketidaksesuaian</td>
                <td class="multi-row">{{ $ptpp->hasil_pengamatan }}</td>
            </tr>
            <tr>
                <td class="field-label">Tindakan Langsung</td>
                <td class="multi-row">{{ $ptpp->tindakan_langsung }}</td>
            </tr>
            <tr>
                <td class="field-label">Permintaan Tindakan Perbaikan dan Pencegahan</td>
                <td class="multi-row">{{ $ptpp->permintaan_perbaikan }}</td>
            </tr>
        </table>

        <div style="margin-top: 30px;">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%; text-align: center;">
                        <div>Pelapor</div>
                        <div style="height: 50px;"></div>
                        <div>{{ $ptpp->nama_pelapor }}</div>
                        <div>Bagian: {{ $ptpp->bagian_pelapor }}</div>
                        <div>Jabatan: {{ $ptpp->jabatan_pelapor }}</div>
                    </td>
                    <td style="width: 50%; text-align: center;">
                        <div>Disetujui</div>
                        <div style="height: 50px;"></div>
                        <div>TTD Disetujui Oleh</div>
                    </td>
                </tr>
            </table>
        </div>

        <hr style="margin-top: 30px; border-top: 1px solid #000;">

        <table class="verification-section">
            <tr>
                <td style="width: 30%;">Verifikasi Hasil Tindakan:</td>
                <td>
                    <div>Diterima [ ] Ditolak [ ]</div>
                </td>
                <td style="width: 20%;">Tanggal</td>
                <td style="width: 30%;">Tanda Tangan Verifikator (MR)</td>
            </tr>
            <tr>
                <td>Evaluasi & Efektivitas Hasil Tindakan:</td>
                <td colspan="3" style="height: 50px;"></td>
            </tr>
        </table>

        <div style="margin-top: 10px; text-align: right;">
            <div>Status: Closed / Follow Up</div>
        </div>
    </div>
</body>
</html>
