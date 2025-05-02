<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulir PTPP SKT</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .container { border: 1px solid black; padding: 20px; }
        .header { text-align: center; font-weight: bold; }
        .section { margin-top: 20px; }
        .row { display: flex; justify-content: space-between; }
        .field-label { width: 30%; font-weight: bold; }
        .field-value { width: 70%; border-bottom: 1px dotted #000; }
        .signature { height: 80px; border: 1px solid #000; margin-top: 10px; }
        .line { border-bottom: 1px dotted #000; margin: 4px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('logo-udinus.png') }}" style="height: 60px; float: left;">
            <div>LABORATORIUM KOMPUTER UDINUS</div>
            <div>PERMINTAAN TINDAKAN PERBAIKAN DAN PENCEGAHAN (SEKRETARIS)</div>
        </div>

        <div class="row">
            <div>Nomor: {{ $data->nomor_sop }}</div>
            <div>Revisi: 0</div>
        </div>
        <div class="row">
            <div>Tanggal Berlaku: 19 September 2022</div>
            <div>Halaman: 2 dari 2</div>
        </div>

        <div class="section">
            <div>Bentuk Ketidaksesuaian: <div class="line">{{ $data->ketidaksesuaian }}</div></div>
            <div>Lokasi: <div class="line">{{ $data->lokasi }}</div></div>
            <div>Tanggal Kejadian: <div class="line">{{ $data->tgl_kejadian }}</div> Jam: {{ $data->jam_kejadian }}</div>
            <div>Tanggal Laporan: <div class="line">{{ $data->tgl_laporan }}</div> Jam: {{ $data->jam_laporan }}</div>
        </div>

        <div class="section">
            <div>Hasil / Uraian Pengamatan Ketidaksesuaian / Potensi Ketidaksesuaian:</div>
            <div class="line">{{ $data->hasil_pengamatan }}</div>
        </div>

        <div class="section">
            <div>Tindakan Langsung:</div>
            <div class="line">{{ $data->tindakan_langsung }}</div>
        </div>

        <div class="section">
            <div>Permintaan Tindakan Perbaikan dan Pencegahan:</div>
            <div class="line">{{ $data->permintaan_perbaikan }}</div>
        </div>

        <div class="section row">
            <div>
                <div>Pelapor:</div>
                <div class="signature">
                    <strong>{{ $data->nama_pelapor }}</strong><br>
                    {{ $data->bagian_pelapor }} - {{ $data->jabatan_pelapor }}
                </div>
            </div>
            <div>
                <div>Disetujui</div>
                <div class="signature">TTD Disetujui Oleh</div>
            </div>
        </div>
    </div>
</body>
</html>
