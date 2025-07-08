<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />

        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Profil Bengkel</h6>
                                    <p class="text-sm">Informasi lengkap tentang bengkel</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Alamat</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Telepon</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Profil</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Kontak Sosmed</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-0 text-sm font-weight-semibold">Bengkel Jaya Motor</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-dark font-weight-semibold mb-0">Jl. Merdeka No. 123, Jakarta</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-dark font-weight-semibold mb-0">0812-3456-7890</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-secondary mb-0">
                                                    Bengkel spesialis mobil dan motor dengan layanan lengkap dan teknisi berpengalaman.
                                                </p>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="text-sm mb-1">
                                                        <strong>IG:</strong> <a href="https://instagram.com/jayamotor" target="_blank">@jayamotor</a>
                                                    </span>
                                                    <span class="text-sm mb-1">
                                                        <strong>WA:</strong> <a href="https://wa.me/6281234567890" target="_blank">0812-3456-7890</a>
                                                    </span>
                                                    <span class="text-sm mb-1">
                                                        <strong>Email:</strong> <a href="mailto:info@jayamotor.com">info@jayamotor.com</a>
                                                    </span>
                                                    <span class="text-sm">
                                                        <strong>Facebook:</strong> <a href="https://facebook.com/jayamotor" target="_blank">jayamotor</a>
                                                    </span>
                                                </div>
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
                        </div>

                    </div>
                </div>
            </div>

            <x-app.footer />
        </div>
    </main>
</x-app-layout>
