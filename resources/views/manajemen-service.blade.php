<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Kelola Layanan Service</h6>
                                    <p class="text-sm mb-sm-0">Daftar lengkap layanan service yang tersedia</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <div class="input-group input-group-sm ms-auto me-2">
                                        <span class="input-group-text text-body">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Search">
                                    </div>
                                    <button type="button"
                                        class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                                        <span class="btn-inner--icon">
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="d-block me-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Download</span>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary btn-icon d-flex align-items-center mb-0">
                                        <span class="btn-inner--icon me-2">
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Tambah Layanan</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Kode</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Nama</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Kategori</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Durasi Estimasi</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Deskripsi</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Harga Standar</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Gambar</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Status Service</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">SV-001</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Ganti Oli Mesin</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Perawatan</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">30 menit</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0 text-truncate" style="max-width: 150px;">Layanan ganti oli mesin termasuk pemeriksaan dasar</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Rp 150.000</p>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                                    <img src="../assets/img/services/service1.jpg" class="w-80" alt="service">
                                                </div>
                                            </td>
                                            <td>
                                                <select class="form-select form-select-sm" aria-label="Status Service">
                                                    <option value="aktif" selected>Aktif</option>
                                                    <option value="tidak">Tidak Aktif</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-warning me-2" onclick="alert('Fitur edit belum tersedia')">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="if(confirm('Yakin ingin menghapus data ini?')){ alert('Data berhasil dihapus (simulasi)'); }">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">SV-002</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Service Rem</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Ringan</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">1 jam</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0 text-truncate" style="max-width: 150px;">Pemeriksaan dan perbaikan sistem rem termasuk ganti kampas rem</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Rp 250.000</p>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                                    <img src="../assets/img/services/service2.jpg" class="w-80" alt="service">
                                                </div>
                                            </td>
                                            <td>
                                                <select class="form-select form-select-sm" aria-label="Status Service">
                                                    <option value="aktif" selected>Aktif</option>
                                                    <option value="tidak">Tidak Aktif</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-warning me-2" onclick="alert('Fitur edit belum tersedia')">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="if(confirm('Yakin ingin menghapus data ini?')){ alert('Data berhasil dihapus (simulasi)'); }">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">SV-003</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Overhaul Mesin</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Berat</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">3 hari</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0 text-truncate" style="max-width: 150px;">Service berat termasuk pembongkaran dan perakitan mesin</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">Rp 1.500.000</p>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                                    <img src="../assets/img/services/service3.jpg" class="w-80" alt="service">
                                                </div>
                                            </td>
                                            <td>
                                                <select class="form-select form-select-sm" aria-label="Status Service">
                                                    <option value="aktif">Aktif</option>
                                                    <option value="tidak" selected>Tidak Aktif</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm btn-warning me-2" onclick="alert('Fitur edit belum tersedia')">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="if(confirm('Yakin ingin menghapus data ini?')){ alert('Data berhasil dihapus (simulasi)'); }">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-top py-3 px-3 d-flex align-items-center">
                                <button class="btn btn-sm btn-white d-sm-block d-none mb-0">Previous</button>
                                <nav aria-label="..." class="ms-auto">
                                    <ul class="pagination pagination-light mb-0">
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link font-weight-bold">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                                href="javascript:;">2</a></li>
                                        <li class="page-item"><a
                                                class="page-link border-0 font-weight-bold d-sm-inline-flex d-none"
                                                href="javascript:;">3</a></li>
                                        <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                                href="javascript:;">...</a></li>
                                        <li class="page-item"><a
                                                class="page-link border-0 font-weight-bold d-sm-inline-flex d-none"
                                                href="javascript:;">8</a></li>
                                        <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                                href="javascript:;">9</a></li>
                                        <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                                href="javascript:;">10</a></li>
                                    </ul>
                                </nav>
                                <button class="btn btn-sm btn-white d-sm-block d-none mb-0 ms-auto">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>
</x-app-layout>