<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Jadwal Kuliah</title>
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
        .form-label {
            font-weight: 600;
            color: #4e73df;
            margin-bottom: 0.5rem;
        }
        .form-control, .form-select {
            border-radius: 0.35rem;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d3e2;
            font-size: 0.85rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: #bac8f3;
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
            outline: 0;
        }
        .form-control.is-invalid, .form-select.is-invalid {
            border-color: #e74a3b;
        }
        .invalid-feedback {
            color: #e74a3b;
            font-size: 0.8rem;
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
        .btn-secondary {
            background-color: #858796;
            border-color: #858796;
        }
        .btn-secondary:hover {
            background-color: #717384;
            border-color: #717384;
        }
    </style>
</head>

<body>
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header text-center mb-4">
                    <h3><i class="fas fa-edit me-2"></i>Edit Jadwal Kuliah</h3>
                </div>

                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                        <h5 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-edit me-2"></i>Form Edit Data
                        </h5>
                        <a href="{{ route('crud.index') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-list me-1"></i> Kembali ke Daftar
                        </a>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('crud.update', $jadwalkuliah->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="kode_mk" class="form-label">
                                            <i class="fas fa-hashtag me-1"></i>Kode MK
                                        </label>
                                        <input type="text" class="form-control @error('kode_mk') is-invalid @enderror"
                                            name="kode_mk" value="{{ old('kode_mk', $jadwalkuliah->kode_mk) }}" placeholder="Masukkan Kode MK">
                                        @error('kode_mk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nama_mk" class="form-label">
                                            <i class="fas fa-book me-1"></i>Nama MK
                                        </label>
                                        <input type="text" class="form-control @error('nama_mk') is-invalid @enderror"
                                            name="nama_mk" value="{{ old('nama_mk', $jadwalkuliah->nama_mk) }}" placeholder="Masukkan Nama MK">
                                        @error('nama_mk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="jurusan" class="form-label">
                                            <i class="fas fa-university me-1"></i>Jurusan
                                        </label>
                                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror"
                                            name="jurusan" value="{{ old('jurusan', $jadwalkuliah->jurusan) }}" placeholder="Masukkan Jurusan">
                                        @error('jurusan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="tahun_akademik" class="form-label">
                                            <i class="fas fa-calendar-alt me-1"></i>Tahun Akademik
                                        </label>
                                        <input type="text" class="form-control @error('tahun_akademik') is-invalid @enderror"
                                            name="tahun_akademik" value="{{ old('tahun_akademik', $jadwalkuliah->tahun_akademik) }}"
                                            placeholder="Masukkan Tahun Akademik (contoh: 2023/2024)">
                                        @error('tahun_akademik')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="semester" class="form-label">
                                            <i class="fas fa-bookmark me-1"></i>Semester
                                        </label>
                                        <select class="form-select @error('semester') is-invalid @enderror" name="semester">
                                            <option value="" disabled>Pilih Semester</option>
                                            <option value="Ganjil" {{ (old('semester', $jadwalkuliah->semester) == 'Ganjil') ? 'selected' : '' }}>Ganjil</option>
                                            <option value="Genap" {{ (old('semester', $jadwalkuliah->semester) == 'Genap') ? 'selected' : '' }}>Genap</option>
                                        </select>
                                        @error('semester')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nama_dosen" class="form-label">
                                            <i class="fas fa-user-tie me-1"></i>Nama Dosen
                                        </label>
                                        <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror"
                                            name="nama_dosen" value="{{ old('nama_dosen', $jadwalkuliah->nama_dosen) }}" placeholder="Masukkan Nama Dosen">
                                        @error('nama_dosen')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ruang" class="form-label">
                                            <i class="fas fa-door-open me-1"></i>Ruang
                                        </label>
                                        <input type="text" class="form-control @error('ruang') is-invalid @enderror"
                                            name="ruang" value="{{ old('ruang', $jadwalkuliah->ruang) }}" placeholder="Masukkan Ruang">
                                        @error('ruang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="hari" class="form-label">
                                            <i class="fas fa-calendar-day me-1"></i>Hari
                                        </label>
                                        <select class="form-select @error('hari') is-invalid @enderror" name="hari">
                                            <option value="" disabled>Pilih Hari</option>
                                            <option value="Senin" {{ (old('hari', $jadwalkuliah->hari) == 'Senin') ? 'selected' : '' }}>Senin</option>
                                            <option value="Selasa" {{ (old('hari', $jadwalkuliah->hari) == 'Selasa') ? 'selected' : '' }}>Selasa</option>
                                            <option value="Rabu" {{ (old('hari', $jadwalkuliah->hari) == 'Rabu') ? 'selected' : '' }}>Rabu</option>
                                            <option value="Kamis" {{ (old('hari', $jadwalkuliah->hari) == 'Kamis') ? 'selected' : '' }}>Kamis</option>
                                            <option value="Jumat" {{ (old('hari', $jadwalkuliah->hari) == 'Jumat') ? 'selected' : '' }}>Jumat</option>
                                            <option value="Sabtu" {{ (old('hari', $jadwalkuliah->hari) == 'Sabtu') ? 'selected' : '' }}>Sabtu</option>
                                            <option value="Minggu" {{ (old('hari', $jadwalkuliah->hari) == 'Minggu') ? 'selected' : '' }}>Minggu</option>
                                        </select>
                                        @error('hari')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="jam_mulai" class="form-label">
                                            <i class="fas fa-clock me-1"></i>Jam Mulai
                                        </label>
                                        <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror"
                                            name="jam_mulai" value="{{ old('jam_mulai', \Carbon\Carbon::parse($jadwalkuliah->jam_mulai)->format('H:i')) }}">
                                        @error('jam_mulai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="jam_selesai" class="form-label">
                                            <i class="fas fa-clock me-1"></i>Jam Selesai
                                        </label>
                                        <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror"
                                            name="jam_selesai" value="{{ old('jam_selesai', \Carbon\Carbon::parse($jadwalkuliah->jam_selesai)->format('H:i')) }}">
                                        @error('jam_selesai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('crud.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Update Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
