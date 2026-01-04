<?php
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
    // alihkan ke halaman error 404
    header('location: 404.html');
}
// jika file di include oleh file lain, tampilkan isi file
else { ?>
    <div class="custom-panel-header" style="background: linear-gradient(135deg, #0d6efd, #0a58ca);">
        <div class="custom-page-inner py-4">
            <div class="page-header text-white">
                <h4 class="page-title text-white"><i class="fas fa-cogs mr-2"></i> Tentang Aplikasi Gudamo</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home"><a href="?module=dashboard"><i class="flaticon-home text-white"></i></a></li>
                    <li class="separator"><i class="flaticon-right-arrow"></i></li>
                    <li class="nav-item"><a>Aplikasi</a></li>
                    <li class="separator"><i class="flaticon-right-arrow"></i></li>
                    <li class="nav-item"><a>Tentang Gudamo</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="custom-page-inner mt--5">
        <div class="card">
            <div class="card-body">
                <div class="py-3">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-cogs text-brand mr-2"></i>
                        </div>
                        <div>
                            <h4 class="lh-2 text-dark mb-3">Tentang Gudamo</h4>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Gudamo adalah aplikasi manajemen gudang dan operasional yang dirancang khusus untuk mendukung operasional Cafe Monaco Coffee.</p>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Aplikasi ini memungkinkan pemilik dan staf kafe untuk dengan mudah mengelola stok bahan baku, laporan keuangan, dan pengaturan pengiriman barang secara real-time.</p>
                        </div>
                    </div>
                </div>
                <div class="py-3">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-hammer text-brand mr-2"></i>
                        </div>
                        <div>
                            <h4 class="lh-2 text-dark mb-3">Fitur Utama</h4>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Manajemen Persediaan - Memantau stok bahan baku kafe secara real-time, memastikan bahan tidak habis atau kadaluarsa.</p>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Pengelolaan Gudang - Mengatur barang masuk dan keluar, serta mengurangi pemborosan dengan pengelolaan yang lebih terstruktur.</p>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Laporan Keuangan Otomatis - Menyediakan laporan keuangan dan analisis kinerja kafe secara otomatis, yang memudahkan pengambilan keputusan.</p>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Notifikasi Pengingat - Sistem pemberitahuan untuk mengingatkan pengguna tentang kekurangan stok atau kebutuhan pengisian ulang bahan baku.</p>
                        </div>
                    </div>
                </div>
                <div class="py-3">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-shield-alt text-brand mr-2"></i>
                        </div>
                        <div>
                            <h4 class="lh-2 text-dark mb-3">Keamanan dan Keandalan</h4>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Keamanan Data Terjamin - Gudamo menggunakan enkripsi data dan backup otomatis untuk memastikan keamanan informasi bisnis Anda.</p>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Akses Terkontrol - Pengaturan hak akses untuk berbagai level pengguna, sehingga hanya pihak yang berwenang yang dapat mengakses data sensitif.</p>
                        </div>
                    </div>
                </div>
                <div class="py-3">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-cogs text-brand mr-2"></i>
                        </div>
                        <div>
                            <h4 class="lh-2 text-dark mb-3">Manfaat Gudamo</h4>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Efisiensi Operasional - Dengan otomatisasi dan pemantauan real-time, Gudamo membantu meningkatkan efisiensi operasional kafe Anda.</p>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Penghematan Waktu - Proses yang lebih cepat dalam pengelolaan barang, stok, dan laporan keuangan, memungkinkan staf fokus pada pelayanan pelanggan.</p>
                            <p><i class="far fa-circle fa-xs text-brand mr-2"></i> Peningkatan Pengelolaan Keuangan - Gudamo menyediakan laporan keuangan yang mudah dipahami, sehingga Anda dapat membuat keputusan finansial yang lebih baik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
