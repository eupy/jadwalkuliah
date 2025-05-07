<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Jadwal Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .page-header {
            background-color: #4e73df;
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }
        .page-header h3 {
            margin: 0;
            font-weight: 700;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            margin-bottom: 2rem;
        }
        .detail-item {
            padding: 15px;
            border-bottom: 1px solid #e3e6f0;
            transition: background-color 0.3s ease;
        }
        .detail-item:hover {
            background-color: rgba(78, 115, 223, 0.05);
        }
        .detail-label {
            font-weight: 600;
            color: #4e73df;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .detail-value {
            font-size: 16px;
            color: #5a5c69;
        }
        .info-box {
            background-color: #f8f9fc;
            border-left: 4px solid #4e73df;
            padding: 15px;
            border-radius: 0.5rem;
            margin-top: 20px;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
        }
        .info-box h5 {
            color: #4e73df;
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .btn {
            border-radius: 0.35rem;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            transition: all 0.2s ease-in-out;
        }
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }
        .btn-danger {
            background-color: #e74a3b;
            border-color: #e74a3b;
        }
        .btn-danger:hover {
            background-color: #be3c2e;
            border-color: #be3c2e;
        }
        .btn-secondary {
            background-color: #858796;
            border-color: #858796;
        }
        .btn-secondary:hover {
            background-color: #717384;
            border-color: #717384;
        }
        .badge {
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            border-radius: 0.35rem;
        }
        .badge-primary {
            background-color: #4e73df;
            color: white;
        }
        .badge-success {
            background-color: #1cc88a;
            color: white;
        }
        .badge-info {
            background-color: #36b9cc;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-4 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="page-header text-center mb-4">
                    <h3><i class="fas fa-info-circle me-2"></i>Detail Jadwal Kuliah</h3>
                </div>

                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                        <h5 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-calendar-alt me-2"></i>Informasi Jadwal
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-hashtag me-1"></i> Kode MK</div>
                                    <div class="detail-value">
                                        <span class="badge badge-primary">{{ $jadwalkuliah->kode_mk }}</span>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-book me-1"></i> Nama MK</div>
                                    <div class="detail-value fs-5">{{ $jadwalkuliah->nama_mk }}</div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-university me-1"></i> Jurusan</div>
                                    <div class="detail-value">{{ $jadwalkuliah->jurusan }}</div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-calendar-alt me-1"></i> Tahun Akademik</div>
                                    <div class="detail-value">{{ $jadwalkuliah->tahun_akademik }}</div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-bookmark me-1"></i> Semester</div>
                                    <div class="detail-value">
                                        <span class="badge {{ $jadwalkuliah->semester == 'Ganjil' ? 'badge-success' : 'badge-warning' }}">
                                            {{ $jadwalkuliah->semester }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-user-tie me-1"></i> Nama Dosen</div>
                                    <div class="detail-value">{{ $jadwalkuliah->nama_dosen }}</div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-door-open me-1"></i> Ruang</div>
                                    <div class="detail-value">{{ $jadwalkuliah->ruang }}</div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-calendar-day me-1"></i> Hari</div>
                                    <div class="detail-value">
                                        <span class="badge badge-info">{{ $jadwalkuliah->hari }}</span>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-label"><i class="fas fa-clock me-1"></i> Jam Kuliah</div>
                                    <div class="detail-value">
                                        <i class="fas fa-clock me-1 text-primary"></i>
                                        {{ \Carbon\Carbon::parse($jadwalkuliah->jam_mulai)->format('H:i') }} -
                                        {{ \Carbon\Carbon::parse($jadwalkuliah->jam_selesai)->format('H:i') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info-box">
                            <h5><i class="fas fa-info-circle me-2"></i>Informasi Tambahan</h5>
                            <p class="mb-0">
                                Jadwal kuliah untuk mata kuliah <strong>{{ $jadwalkuliah->nama_mk }}</strong>
                                dengan dosen <strong>{{ $jadwalkuliah->nama_dosen }}</strong>
                                berlangsung setiap hari <strong>{{ $jadwalkuliah->hari }}</strong>
                                pukul <strong>{{ \Carbon\Carbon::parse($jadwalkuliah->jam_mulai)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($jadwalkuliah->jam_selesai)->format('H:i') }}</strong>
                                di ruang <strong>{{ $jadwalkuliah->ruang }}</strong>.
                            </p>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                action="{{ route('crud.destroy', $jadwalkuliah->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash me-1"></i> Hapus Data
                                </button>
                            </form>

                            <div>
                                <a href="{{ route('crud.edit', $jadwalkuliah->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit me-1"></i> Edit Data
                                </a>
                                <a href="{{ route('crud.index') }}" class="btn btn-secondary ms-2">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
