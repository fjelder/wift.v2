<nav class="pcoded-navbar menupos-fixed menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div " >
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Nawigacja</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">{{ __('Dashboard') }}</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Baza danych</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Kontakty</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{ route('companies.index') }}">Podmioty</a></li>
                            <li><a href="{{ route('people.index') }}">Osoby</a></li>
                            <li><a href="{{ route('companies.create') }}">Nowa firma</a></li>
                            <li><a href="{{ route('people.create') }}">Nowa osoba</a></li>
                        </ul>
                    </li>
                                       

                </ul>
                
            
                
            </div>
        </div>
    </nav>