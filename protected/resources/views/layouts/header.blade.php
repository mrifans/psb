<header>
    <div class="container">
       <div class="row">
          <div class="col-sm-5">
             <div class="brand">
                <div class="logo">
                   <img src="{{ url('img/logo.png')}}" alt="" />
                </div>
                <div class="judul">
                   <h1><b>PSB</b>-Online</h1>
                   <small>PP. Terpadu Al-Yasini Pasuruan</small>
                </div>
             </div>
          </div>
          <div class="col-sm-7">
             <ul class="menu-utama">
                <li>
                   <a href="home" @if ($p == "home") class="active" @endif>
                      <i class="fas fa-home fa-3x fa-fw"></i><br>Beranda
                   </a>
                </li>
                {{-- <li>
                   <a href="alur" @if ($p == "alur") class="active" @endif>
                      <i class="fas fa-exchange-alt fa-3x fa-fw"></i><br>Alur
                   </a>
                </li> --}}
                <li>
                   <a href="biaya" @if ($p == "biaya") class="active" @endif>
                      <i class="fas fa-comment-dollar fa-3x fa-fw"></i><br>Biaya
                   </a>
                </li>
                <li>
                   <a href="form" @if ($p == "form") class="active" @endif>
                      <i class="fas fa-laptop fa-3x fa-fw"></i><br>Daftar
                   </a>
                </li>
                <li>
                   <a href="info" @if ($p == "info") class="active" @endif>
                      <i class="fas fa-school fa-3x fa-fw"></i><br>Lembaga
                   </a>
                </li>
                <li>
                    <a href="login" @if ($p == "login") class="active" @endif>
                       <i class="fas fa-user fa-3x fa-fw"></i><br>Login
                    </a>
                 </li>
             </ul>
          </div>
       </div>
    </div>
 </header>
