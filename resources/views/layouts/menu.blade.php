<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu text-center">

                <li class="has-submenu ">
                    <a href="{{url('/dashboard')}}"><i class="mdi mdi-airplay"></i>Home</a>
                </li>

                <li class="has-submenu">
                    <a href="{{url('/berita')}}"><i class="mdi mdi-poll-box"></i>Berita</a>
                    {{--  <ul class="submenu">
                        <li><a href="#">Menu 1</a></li>
                    </ul>  --}}
                </li>

                 <li class="has-submenu">
                    <a href="{{url('/hukum')}}"><i class="mdi mdi-bank"></i>Hukum Online</a>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="mdi mdi-account"></i>Master</a>
                    <ul class="submenu">
                        <li><a href="{{ url('user') }}">User</a></li>
                        <li><a href="{{ url('admin') }}">File</a></li>
                    </ul>
                </li>

            </ul>

            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div>
