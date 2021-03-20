<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3 class="text-secondary"><u>Menu</u></h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"> <i data-feather="home"></i></a>
                    </li>
                    @if(request()->is('dashboard'))
                        <li class="breadcrumb-item">Dashboard</li>
                    @endif
                    @if(request()->is('profile/setting'))
                        <li class="breadcrumb-item">My Profile</li>
                    @endif
                    @if(request()->is('account/password'))
                        <li class="breadcrumb-item">Account</li>
                        <li class="breadcrumb-item">Change Password</li>
                    @endif
                    @if(request()->is('admin/account/register'))
                        <li class="breadcrumb-item">Kelola Akun</li>
                        <li class="breadcrumb-item">Daftar</li>
                    @endif
                    @if(request()->is('admin/account/admin'))
                        <li class="breadcrumb-item">Kelola Akun</li>
                        <li class="breadcrumb-item">Admin</li>
                    @endif
                    @if(request()->is('admin/account/'))
                        <li class="breadcrumb-item">Kelola Akun</li>
                        <li class="breadcrumb-item">Admin</li>
                    @endif
                    @if(request()->is('admin/account/user'))
                        <li class="breadcrumb-item">Kelola Akun</li>
                        <li class="breadcrumb-item">User</li>
                    @endif
                    @if(request()->is('admin/pangkat'))
                        <li class="breadcrumb-item">Kelola Akun</li>
                        <li class="breadcrumb-item">Pangkat</li>
                    @endif
                    @if(request()->is('admin/account/verifikasi'))
                        <li class="breadcrumb-item">Kelola Akun</li>
                        <li class="breadcrumb-item">Verifikasi</li>
                    @endif
                    @if(request()->is('admin/rekapdata/Bulan'))
                        <li class="breadcrumb-item">Rekap Data</li>
                        <li class="breadcrumb-item">Bulan</li>
                    @endif
                    @if(request()->is('admin/rekapdata/Tahun'))
                        <li class="breadcrumb-item">Rekap Data</li>
                        <li class="breadcrumb-item">Tahun</li>
                    @endif
                    @if(request()->is('admin/detaildata/AngsuranKe'))
                        <li class="breadcrumb-item">Detail Data</li>
                        <li class="breadcrumb-item">Angsuran Ke</li>
                    @endif
                    @if(request()->is('admin/detaildata/Pokok'))
                        <li class="breadcrumb-item">Detail Data</li>
                        <li class="breadcrumb-item">Pokok</li>
                    @endif
                    @if(request()->is('admin/detaildata/Bunga'))
                        <li class="breadcrumb-item">Detail Data</li>
                        <li class="breadcrumb-item">Bunga</li>
                    @endif
                    @if(request()->is('admin/detaildata/SisaAngsuran'))
                        <li class="breadcrumb-item">Detail Data</li>
                        <li class="breadcrumb-item">Siswa Angsuran</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
</div>
