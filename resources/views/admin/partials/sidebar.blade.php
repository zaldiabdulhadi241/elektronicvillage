@extends('admin.layouts.main')

@section('container')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Produk</div>
                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Produk
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/admin/produk/">List Produk</a>
                                <a class="nav-link" href="/admin/produk/tambah">Tambah Produk</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Kategori
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    List Kategori
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Tambah Kategori
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Users</div>
                        <a class="nav-link" href="/admin/users/">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Users
                        </a>
                        <div class="sb-sidenav-menu-heading">Transaksi</div>
                        <a class="nav-link" href="/admin/transaksi/">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Transaksi
                        </a>
                        <div class="sb-sidenav-menu-heading">Brands</div>
                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsTwo"
                            aria-expanded="false" aria-controls="collapseLayoutsTwo">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Brands
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutsTwo" aria-labelledby="headingThree"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/admin/brands/">List Brands</a>
                                <a class="nav-link" href="/admin/brands/tambah">Tambah Brands</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Masuk Sebagai :</div>
                    {{ Auth::user()->role }}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            @yield('dashboard.content')
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
