<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item" style="text-align: center;">
                <br>
                <div class="image-cropper" >
                    <a href="{{ route('admin.pegawai.lihat', $pengguna['id']) }}"><img src="{{ url('/upload/gambar/'.json_decode($pengguna['foto_pegawai'])[0]) }}" width="40%" alt="avatar" ></a>
                </div>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" style="text-align:center;">
                    {{ $pengguna['nama_pegawai'] }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('absensi_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-user nav-icon">

                        </i>
                        Absensi Pegawai
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.absensi.index") }}" class="nav-link {{ request()->is('admin/absensi') || request()->is('admin/absensi/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                Absensi Harian
                            </a>
                        </li>
                        @can('absensi_delete_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.absensi.total") }}" class="nav-link {{ request()->is('admin/total') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    Absensi Total
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('users_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fas fa-fw fa-pencil-square-o nav-icon">
                        </i>
                        Konten
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('profil_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.profil.index") }}" class="nav-link {{ request()->is('admin/profil') || request()->is('admin/profil/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-file-text">

                                    </i>
                                    {{ trans('cruds.profil.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('kegiatan_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.kegiatan.index") }}" class="nav-link {{ request()->is('admin/kegiatan') || request()->is('admin/kegiatan/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-fw fa-file-text">
                                    </i>
                                    {{ trans('cruds.kegiatan.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('berita_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.berita.index") }}" class="nav-link {{ request()->is('admin/berita') || request()->is('admin/berita/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-file-text">
                                    </i>
                                    {{ trans('cruds.berita.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('tag_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.tag.index") }}" class="nav-link {{ request()->is('admin/tag') || request()->is('admin/tag/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-tags">

                                    </i>
                                    {{ trans('cruds.tag.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('users_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-folder-open nav-icon">
                        </i>
                        Master File
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('video_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.video.index") }}" class="nav-link {{ request()->is('admin/video') || request()->is('admin/video/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-folder-open">

                                    </i>
                                    Video
                                </a>
                            </li>
                        @endcan
                        @can('gambar_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.gambar.index") }}" class="nav-link {{ request()->is('admin/gambar') || request()->is('admin/gambar/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-folder-open">

                                    </i>
                                    {{ trans('cruds.gambar.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('arsip_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.arsip.index") }}" class="nav-link {{ request()->is('admin/arsip') || request()->is('admin/arsip/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-folder-open">

                                    </i>
                                    {{ trans('cruds.arsip.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-handshake-o nav-icon">
                        </i>
                        Layanan
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('gambar_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.pengaduan.index") }}" class="nav-link {{ request()->is('admin/pengaduan') || request()->is('admin/pengaduan/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-gears">

                                    </i>
                                    Pengaduan
                                </a>
                            </li>
                        @endcan
                        @can('wbs_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.wbs.index") }}" class="nav-link {{ request()->is('admin/wbs') || request()->is('admin/wbs/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-gears">

                                    </i>
                                    WBS
                                </a>
                            </li>
                        @endcan
                        @can('arsip_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.arsip.index") }}" class="nav-link {{ request()->is('admin/arsip') || request()->is('admin/arsip/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-gears">

                                    </i>
                                    Survey
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @can('sakip_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-address-book nav-icon">
                        </i>
                        Sakip
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('dashboard_sakip_manage')
                            <li class="nav-item">
                                <a href="{{ route('admin.sakipp.dash', date("Y")) }}" class="nav-link {{ request()->is('admin/sakipp/dash ') || request()->is('admin/sakipp/dash/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-id-badge">

                                    </i>
                                    Dashboard Sakip
                                </a>
                            </li>
                        @endcan
                        @can('sakip_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.sakip.index") }}" class="nav-link {{ request()->is('admin/sakip ') || request()->is('admin/sakip/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-id-badge">

                                    </i>
                                    Pihak Pertama
                                </a>
                            </li>
                        @endcan
                        @can('sakip_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.sakipp.index") }}" class="nav-link {{ request()->is('admin/sakipp') || request()->is('admin/sakipp/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-id-badge">

                                    </i>
                                    Atasan Langsung
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('surat_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-fw fa-inbox nav-icon">
                        </i>
                        Surat
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('surat_masuk_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.surat_masuk.index") }}" class="nav-link {{ request()->is('admin/suratmasuk') || request()->is('admin/suratmasuk/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    Surat Masuk
                                </a>
                            </li>
                        @endcan
                        @can('surat_keluar_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.surat_keluar.index") }}" class="nav-link {{ request()->is('admin/suratkeluar') || request()->is('admin/suratkeluar/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    Surat Keluar
                                </a>
                            </li>
                        @endcan
                        @can('tugas_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.surattugas.index") }}" class="nav-link {{ request()->is('admin/surattugas') || request()->is('admin/surattugas/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    Surat Tugas
                                </a>
                            </li>
                        @endcan
                        @can('cuti_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.suratcuti.index") }}" class="nav-link {{ request()->is('admin/suratcuti') || request()->is('admin/suratcuti/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    Surat Cuti
                                </a>
                            </li>
                        @endcan
                        @can('undangan_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.undangan.index") }}" class="nav-link {{ request()->is('admin/undangan') || request()->is('admin/undangan/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    Undangan
                                </a>
                            </li>
                        @endcan
                        @can('sk_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.sk.index") }}" class="nav-link {{ request()->is('admin/sk') || request()->is('admin/sk/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    Arsip SK
                                </a>
                            </li>
                        @endcan
                        @can('suratkepegawaiaan_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.suratkepegawaiaan.index") }}" class="nav-link {{ request()->is('admin/suratkepegawaiaan') || request()->is('admin/suratkepegawaiaan/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    Arsip Kepegawaian
                                </a>
                            </li>
                        @endcan
                        @can('disposisi_manage')
                            <li class="nav-item">
                                <a href="{{ route("admin.disposisi.index") }}" class="nav-link {{ request()->is('admin/disposisi') || request()->is('admin/disposisi/*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-fw fa-inbox">

                                    </i>
                                    {{ trans('cruds.disposisi.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan


            @can('pegawai_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-user nav-icon">

                        </i>
                        Data Pegawai
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.jabatan.index") }}" class="nav-link {{ request()->is('admin/jabatan') || request()->is('admin/jabatan/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                Jabatan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.golongan.index") }}" class="nav-link {{ request()->is('admin/golongan') || request()->is('admin/golongan/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                Golongan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.status.index") }}" class="nav-link {{ request()->is('admin/status') || request()->is('admin/status/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.pegawai.index") }}" class="nav-link {{ request()->is('admin/pegawai') || request()->is('admin/pegawai/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.pegawai.title') }}
                            </a>
                        </li>
                    </ul>
                </li>

            @endcan
            @can('inventaris_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-archive nav-icon">

                        </i>
                        Inventaris
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.transaksi.index") }}" class="nav-link {{ request()->is('admin/transaksi') || request()->is('admin/transaksi/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-inbox nav-icon">

                                </i>
                                Transaksi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.barang.index") }}" class="nav-link {{ request()->is('admin/barang') || request()->is('admin/barang/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-inbox nav-icon">

                                </i>
                                Barang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.satuan.index") }}" class="nav-link {{ request()->is('admin/satuan') || request()->is('admin/satuan/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-inbox nav-icon">

                                </i>
                                Satuan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.jenisbarang.index") }}" class="nav-link {{ request()->is('admin/jenisbarang') || request()->is('admin/jenisbarang/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-inbox nav-icon">

                                </i>
                                Jenis Barang
                            </a>
                        </li>
                    </ul>
                </li>

            @endcan
            @can('users_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    </ul>
                </li>

            @endcan

            <li class="nav-item">
                <a href="{{ route('auth.change_password') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key">

                    </i>
                    Change password
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
