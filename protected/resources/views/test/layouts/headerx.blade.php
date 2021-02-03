<header>
    <div class="container">
       <div class="row">
          <div class="col-sm-5">
             <div class="brand">
                <div class="logo">
                   <img src="{{ url('img/logo.png')}}" alt="" />
                </div>
                <div class="judul">
                   <h1><b>Test Akbar</b>-Online</h1>
                   <small>PP. Terpadu Al-Yasini Pasuruan</small>
                </div>
             </div>
          </div>
          <div class="col-sm-7">
             <ul class="menu-utama">
                <li>
                   <a href="#" @if ($p == "test") class="active" @endif>
                      <i class="fas fa-file fa-3x fa-fw"></i><br>Test
                   </a>
                </li>
                <li>
                   <a href="logout">
                      <i class="fas fa-power-off fa-3x fa-fw"></i><br>Logout
                   </a>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </header>
