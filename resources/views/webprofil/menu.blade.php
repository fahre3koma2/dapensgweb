<ul id="nav" class="nav-wrap__list menu">
    <li class="{{Request::is('dashboard') ? 'current' : ''}}" ><a href="{{url('/dashboard')}}" title="HOME">Home</a></li>
    <li class="{{Request::is('about') ? 'current' : ''}}" ><a href="{{url('/about')}}" title="tentang">Tentang Kami</a></li>
    <li class="{{Request::is('manajemen') ? 'current' : ''}}" ><a href="{{url('/manajemen')}}" title="newsfeed">Newsfeed</a></li>
    <li class="{{Request::is('penghargaan') ? 'current' : ''}}" ><a href="{{url('/penghargaan')}}" title="hukumonline">Hukum Online</a></li>
        <div class="dropdown">
            <span>
                <div class="drop-ed"></div>
            </span>
            <div class="dropdown-content">
                <span class="arrow_box"></span>
                <ul class="drop-vape">
                    <li><a href="{{url('/admin')}}"> Admin </a> </li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
</ul>
