<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            {{-- <a href="#">Skripsi POS-DG</a> --}}
            <a href="{{ route('home') }}">KEDAI H5</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            {{-- @if (Auth::check() && Auth::user()->role != 'employee') --}}
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-th-large"></i><span>Dashboard</span></a>
            </li>
            {{-- <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link"><i
                            class="fas fa-file-alt"></i><span>Product</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link"><i
                            class="fas fa-file-alt"></i><span>Category</span></a>
                </li> --}}
            <li class="nav-item">
                <a href="{{ route('employee.index') }}" class="nav-link"><i
                        class="fas fa-file-alt"></i><span>Apoteker</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('penjualan.index') }}" class="nav-link"><i
                        class="fas fa-file-alt"></i><span>Penjualan</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('obat.index') }}" class="nav-link"><i
                        class="fas fa-file-alt"></i><span>Obat</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('suplier.index') }}" class="nav-link"><i
                        class="fas fa-file-alt"></i><span>Suplier</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pelanggan.index') }}" class="nav-link"><i
                        class="fas fa-file-alt"></i><span>Pelanggan</span></a>
            </li>
            {{-- @else
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-file-alt"></i><span>Product</span></a>
                </li>
            @endif --}}
        </ul>
    </aside>
</div>
