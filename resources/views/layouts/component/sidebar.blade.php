<!-- Sidebar Start-->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}"><img style="width:50%" class="img-fluid" src="{{ asset('img/promethee-logo.png') }}" alt="Logo Promethee"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}"><img style="width:40%" class="img-fluid" src="{{ asset('img/indo.png') }}" alt="Logo"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ (request()->is('home')) ? "active" : '' }}"><a class="nav-link" href="{{route('home')}}"><i class="fas fa-fire"></i> <span>Home</span></a>
            </li>
            <li>
            <li class="nav-item {{ (request()->is('admin/semarang')) ? "active" : '' }}"><a class="nav-link" href="{{route('semarang.read')}}"><i class="fas fa-map-marker-alt"></i> <span>Peta
                        Semarang</span></a>
            </li>
            <li class="menu-header">Processing</li>
            <li class="dropdown {{ (request()->is('admin/data*')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item {{ (request()->is('admin/data/alternatif')) ? "active" : '' }}"><a class="nav-link" href="{{route('alternatif.read')}}">Alternatif</a></li>
                    <li class="nav-item {{ (request()->is('admin/data/kriteria')) ? "active" : '' }}"><a class="nav-link" href="{{route('kriteria.read')}}">Kriteria</a></li>
                    <li class="nav-item {{ (request()->is('admin/data/preferensi')) ? "active" : '' }}"><a class="nav-link" href="{{route('preferensi.read')}}">Preferensi</a></li>
                </ul>
            </li>
            <li class="dropdown {{ (request()->is('admin/kriteria*')) ? 'active' : '' }}"">
                <a href=" #" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list-ul"></i>
                <span>Kriteria</span></a>
                <ul class="dropdown-menu">
                    @php
                    $sidebar = Kustom::MenuKriteria();
                    @endphp
                    @foreach ($sidebar as $kriteria)
                    <li class="nav-item {{ (request()->is('admin/kriteria/view/'. $kriteria->id)) ? 'active' : '' }}">
                        <a href="{{route('kriteria.view', $kriteria->id)}}" class="nav-link">{{$kriteria->nama}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item {{ (request()->is('admin/klasifikasi')) ? "active" : '' }}"><a class="nav-link" href="{{route('klasifikasi.read')}}"><i class="fas fa-plug"></i>
                    <span>Klasifikasi</span></a></li>
            <li class="menu-header">Step by Step</li>
            <li class="nav-item dropdown {{ (request()->is('admin/pro*')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-award"></i> <span>PROMETHEE</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item {{ (request()->is('admin/pro/alternatif')) ? 'active' : '' }}">
                        <a href="{{route('pro.alternatif')}}" class="nav-link">Data Alternatif</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/deviasi')) ? 'active' : '' }}">
                        <a href="{{route('pro.deviasi')}}" class="nav-link">Deviasi</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/indekspref')) ? 'active' : '' }}">
                        <a href="{{route('pro.preferensi')}}" class="nav-link">Indeks Preferensi</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/leflow')) ? 'active' : '' }}">
                        <a href="{{route('pro.leavingentering')}}" class="nav-link">Leaving & Entering Flow</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/net')) ? 'active' : '' }}">
                        <a href="{{route('pro.net')}}" class="nav-link">Net Flow</a>
                    </li>
                </ul>
            </li>
            <!-- <li class="menu-header">Step by Step</li>
            <li class="nav-item dropdown {{ (request()->is('admin/pro*')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-award"></i> <span>Fuzzy PROMETHEE</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item {{ (request()->is('admin/pro/alternatif')) ? 'active' : '' }}">
                        <a href="{{route('pro.alternatif')}}" class="nav-link">Fuzzy Nilai Kriteria</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/deviasi')) ? 'active' : '' }}">
                        <a href="{{route('pro.deviasi')}}" class="nav-link">Fuzzy Bobot Kriteria</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/indekspref')) ? 'active' : '' }}">
                        <a href="{{route('pro.preferensi')}}" class="nav-link">Decision Matrix</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/leflow')) ? 'active' : '' }}">
                        <a href="{{route('pro.leavingentering')}}" class="nav-link">Normalized Matrix</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/leflow')) ? 'active' : '' }}">
                        <a href="{{route('pro.leavingentering')}}" class="nav-link">Weighted Normalized Matrix</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/pro/net')) ? 'active' : '' }}">
                        <a href="{{route('pro.net')}}" class="nav-link">Net Flow</a>
                    </li>
                </ul>
            </li> -->
            @if (Auth::user()->role == "Administrator")
            <li class="menu-header">Options</li>
            <li class="nav-item {{ Request::is('admin/user*') ? "active" : null }}"><a href="{{route('pengguna.read')}}" class="nav-link"><i class="far fa-user"></i><span>Users</span></a>
            </li>
            @endif
        </ul>
    </aside>
</div>
<!-- Sidebar End-->