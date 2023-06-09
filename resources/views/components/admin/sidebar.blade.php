<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('sumanto-logo/sumanto-website-favicon-black2.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">SUMANTO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Homepage
                        </p>
                    </a>
                </li>
                <li class="nav-header">TRANSACTION SYSTEM</li>
                <li
                    class="nav-item
                    {{-- barang --}}
                    {{ request()->routeIs('barang') ? 'menu-open' : '' }}
                    {{ request()->routeIs('barang.create') ? 'menu-open' : '' }}
                    {{ request()->routeIs('barang.edit') ? 'menu-open' : '' }}
                    {{ request()->routeIs('barang.view') ? 'menu-open' : '' }}
                    {{ request()->routeIs('pembelian.barangbaru') ? 'menu-open' : '' }}
                    {{-- pembelian --}}
                    {{ request()->routeIs('pembelian') ? 'menu-open' : '' }}
                    {{ request()->routeIs('pembelian.kembalian.show') ? 'menu-open' : '' }}
                    {{ request()->routeIs('pembelian.transaksi.show') ? 'menu-open' : '' }}
                    {{ request()->routeIs('pembelian.selesai') ? 'menu-open' : '' }}
                    {{-- penjualan --}}
                    {{ request()->routeIs('penjualan') ? 'menu-open' : '' }}
                    {{ request()->routeIs('penjualan.kembalian.show') ? 'menu-open' : '' }}
                    {{ request()->routeIs('penjualan.transaksi.show') ? 'menu-open' : '' }}
                    {{ request()->routeIs('penjualan.selesai') ? 'menu-open' : '' }}

                    ">
                    <a href="#"
                        class="nav-link
                            {{-- barang --}}
                            {{ request()->routeIs('barang') ? 'active' : '' }}
                            {{ request()->routeIs('barang.create') ? 'active' : '' }}
                            {{ request()->routeIs('barang.edit') ? 'active' : '' }}
                            {{ request()->routeIs('barang.view') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.barangbaru') ? 'active' : '' }}
                            {{-- pembelian --}}
                            {{ request()->routeIs('pembelian') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.kembalian.show') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.transaksi.show') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.selesai') ? 'active' : '' }}
                            {{-- penjualan --}}
                            {{ request()->routeIs('penjualan') ? 'active' : '' }}
                            {{ request()->routeIs('penjualan.kembalian.show') ? 'active' : '' }}
                            {{ request()->routeIs('penjualan.transaksi.show') ? 'active' : '' }}
                            {{ request()->routeIs('penjualan.selesai') ? 'active' : '' }}


                            ">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Transaction
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pembelian') }}"
                                class="nav-link
                            {{ request()->routeIs('pembelian') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.kembalian.show') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.transaksi.show') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.barangbaru') ? 'active' : '' }}
                            {{ request()->routeIs('pembelian.selesai') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi Pembelian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('penjualan') }}"
                                class="nav-link
                            {{ request()->routeIs('penjualan') ? 'active' : '' }}
                            {{ request()->routeIs('penjualan.kembalian.show') ? 'active' : '' }}
                            {{ request()->routeIs('penjualan.transaksi.show') ? 'active' : '' }}
                            {{ request()->routeIs('penjualan.selesai') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi Penjualan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('barang') }}"
                                class="nav-link
                            {{ request()->routeIs('barang') ? 'active' : '' }}
                            {{ request()->routeIs('barang.edit') ? 'active' : '' }}
                            {{ request()->routeIs('barang.view') ? 'active' : '' }}">
                                <i class=" far fa-circle nav-icon"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @can('akses-manajemen')
                    <li class="nav-header">MANAGEMENT SYSTEM</li>

                    <li
                        class="nav-item
                {{ request()->routeIs('mdashboard') ? 'menu-open' : '' }}
                {{ request()->routeIs('apegawai') ? 'menu-open' : '' }}
                {{ request()->routeIs('hpembelian') ? 'menu-open' : '' }}
                {{ request()->routeIs('hpenjualan') ? 'menu-open' : '' }}
                {{ request()->routeIs('lkeuangan') ? 'menu-open' : '' }}
                {{ request()->routeIs('admin.management.apegawai.create') ? 'menu-open' : '' }}">


                        <a href="#"
                            class="nav-link
                            {{ request()->routeIs('mdashboard') ? 'active' : '' }}
                            {{ request()->routeIs('admin.management.apegawai.create') ? 'active' : '' }}
                            {{ request()->routeIs('hpembelian') ? 'active' : '' }}
                            {{ request()->routeIs('hpenjualan') ? 'active' : '' }}
                            {{ request()->routeIs('lkeuangan') ? 'active' : '' }}
                            {{ request()->routeIs('apegawai') ? 'active' : '' }}
                            {{ request()->routeIs('pbarangbaru') ? 'active' : '' }}
                            {{ request()->routeIs('pstokbarang') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Management
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('hpembelian') }}"
                                    class="nav-link {{ request()->routeIs('hpembelian') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>History Pembelian</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('hpenjualan') }}"
                                    class="nav-link {{ request()->routeIs('hpenjualan') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>History Penjualan</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('lkeuangan') }}"
                                    class="nav-link {{ request()->routeIs('lkeuangan') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Laporan Keuangan</p>
                                </a>
                            </li> --}}

                            <li class="nav-item">
                                <a href="{{ route('apegawai') }}"
                                    class="nav-link {{ request()->routeIs('apegawai') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Akun Pegawai</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.management.apegawai.create') }}"
                                    class="nav-link {{ request()->routeIs('admin.management.apegawai.create') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pembuatan Akun</p>
                                </a>
                            </li>
                        </ul>
                    @endcan
                </li>



                <li class="mt-2 nav-item pt-2" style="border-top: 1px solid #4f5962;">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();document.querySelector('#logoutForm').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
