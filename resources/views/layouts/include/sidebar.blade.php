<nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><img src="kamuaku/images/logo-custom.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href=""><img src="kamuaku/images/logo2.png" alt="Logo"></a>
            </div>
          @role('admin')
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    <h3 class="menu-title">Pendataan</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Sekolah</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('jurusan.index')}}">Jurusan</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{route('kelas.index')}}">Kelas</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{route('siswa.index')}}">Siswa</a></li>      
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            @endrole
        </nav>