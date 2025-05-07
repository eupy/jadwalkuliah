<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Jadwal Kuliah</title>
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
        .table thead th {
            background-color: #4e73df;
            color: white;
            font-weight: 600;
            border: none;
        }
        .table-bordered {
            border: none;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #e3e6f0;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(78, 115, 223, 0.05);
        }
        .btn-action {
            margin: 0 0.2rem;
        }
        .alert {
            border-radius: 0.5rem;
            border-left: 0.25rem solid;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
        .alert-success {
            border-left-color: #1cc88a;
            background-color: #e6f8f1;
            color: #0f6848;
        }
        .alert-danger {
            border-left-color: #e74a3b;
            background-color: #fce8e6;
            color: #7e2923;
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
        .badge-warning {
            background-color: #f6c23e;
            color: #212529;
        }
        .badge-info {
            background-color: #36b9cc;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header text-center mb-4">
                    <h3><i class="fas fa-calendar-alt me-2"></i>Daftar Jadwal Kuliah</h3>
                </div>

                @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                </div>
                @endif

                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                        <h5 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-list me-2"></i>Data Jadwal Kuliah
                        </h5>
                        <a href="{{ route('jadwalkuliahnama.create') }}" class="btn btn-success">
                            <i class="fas fa-plus-circle me-1"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode MK</th>
                                        <th>Nama MK</th>
                                        <th>Jurusan</th>
                                        <th>Tahun</th>
                                        <th>Semester</th>
                                        <th>Dosen</th>
                                        <th>Ruang</th>
                                        <th>Hari</th>
                                        <th>Jam Kuliah</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataArray as $data)
                                    <tr>
                                        <td><span class="badge badge-primary">{{ $data->kode_mk }}</span></td>
                                        <td><strong>{{ $data->nama_mk }}</strong></td>
                                        <td>{{ $data->jurusan }}</td>
                                        <td>{{ $data->tahun_akademik }}</td>
                                        <td>
                                            <span class="badge {{ $data->semester == 'Ganjil' ? 'badge-success' : 'badge-warning' }}">
                                                {{ $data->semester }}
                                            </span>
                                        </td>
                                        <td>{{ $data->nama_dosen }}</td>
                                        <td>{{ $data->ruang }}</td>
                                        <td>
                                            <span class="badge badge-info">{{ $data->hari }}</span>
                                        </td>
                                        <td>
                                            <i class="fas fa-clock me-1 text-primary"></i>
                                            {{ \Carbon\Carbon::parse($data->jam_mulai)->format('H:i') }} -
                                            {{ \Carbon\Carbon::parse($data->jam_selesai)->format('H:i') }}
                                        </td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('jadwalkuliahnama.destroy', $data->id) }}" method="POST">
                                                <a href="{{ route('jadwalkuliahnama.show', $data->id) }}" class="btn btn-sm btn-info text-white btn-action">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('jadwalkuliahnama.edit', $data->id) }}" class="btn btn-sm btn-primary btn-action">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger btn-action">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="10" class="text-center py-4">
                                            <div class="py-3">
                                                <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                                                <p class="text-muted mb-0">Belum ada data jadwal kuliah tersedia.</p>
                                                <a href="{{ route('jadwalkuliahnama.create') }}" class="btn btn-sm btn-primary mt-3">
                                                    <i class="fas fa-plus-circle me-1"></i> Tambah Data Sekarang
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
