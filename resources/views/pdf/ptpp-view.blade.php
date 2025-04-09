<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Detail PTPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            max-width: 900px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 20px;
        }
        .btn-download {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }
        .btn-download:hover {
            background-color: #0056b3;
            color: white;
        }
        .data-row {
            margin-bottom: 15px;
        }
        .data-label {
            font-weight: bold;
            color: #495057;
        }
        .data-value {
            color: #212529;
        }
        .section {
            margin-bottom: 30px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #343a40;
            margin-bottom: 5px;
        }
        .subtitle {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #6c757d;
            text-decoration: none;
        }
        .back-link:hover {
            color: #343a40;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h1 class="title">Detail PTPP</h1>
                <p class="subtitle">Permintaan Tindakan Perbaikan dan Pencegahan</p>
            </div>
            <div>
                <a href="{{ route('ptpp.pdf', $ptpp->id) }}" target="_blank" class="btn-download">
                    <i class="fas fa-file-pdf"></i> Download PDF
                </a>
            </div>
        </div>

        <div class="section">
            <div class="row data-row">
                <div class="col-md-4 data-label">Nomor SOP</div>
                <div class="col-md-8 data-value">{{ $ptpp->nomor_sop }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Bentuk Ketidaksesuaian</div>
                <div class="col-md-8 data-value">{{ $ptpp->ketidaksesuaian }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Lokasi</div>
                <div class="col-md-8 data-value">{{ $ptpp->lokasi }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Tanggal Kejadian</div>
                <div class="col-md-8 data-value">{{ date('d-m-Y', strtotime($ptpp->tgl_kejadian)) }} Jam {{ date('H:i', strtotime($ptpp->jam_kejadian)) }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Tanggal Laporan</div>
                <div class="col-md-8 data-value">{{ date('d-m-Y', strtotime($ptpp->tgl_laporan)) }} Jam {{ date('H:i', strtotime($ptpp->jam_laporan)) }}</div>
            </div>
        </div>

        <div class="section">
            <h4>Informasi Pengamatan</h4>
            <hr>
            <div class="row data-row">
                <div class="col-md-4 data-label">Hasil Pengamatan</div>
                <div class="col-md-8 data-value">{{ $ptpp->hasil_pengamatan }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Tindakan Langsung</div>
                <div class="col-md-8 data-value">{{ $ptpp->tindakan_langsung }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Permintaan Perbaikan</div>
                <div class="col-md-8 data-value">{{ $ptpp->permintaan_perbaikan }}</div>
            </div>
        </div>

        <div class="section">
            <h4>Informasi Pelapor</h4>
            <hr>
            <div class="row data-row">
                <div class="col-md-4 data-label">Nama Pelapor</div>
                <div class="col-md-8 data-value">{{ $ptpp->nama_pelapor }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Bagian</div>
                <div class="col-md-8 data-value">{{ $ptpp->bagian_pelapor }}</div>
            </div>
            <div class="row data-row">
                <div class="col-md-4 data-label">Jabatan</div>
                <div class="col-md-8 data-value">{{ $ptpp->jabatan_pelapor }}</div>
            </div>
        </div>

        <a href="{{ route('filament.admin.resources.lapor-ptpp.index') }}" class="back-link">
            &larr; Kembali ke daftar PTPP
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
