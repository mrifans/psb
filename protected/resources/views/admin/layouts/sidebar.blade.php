<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link d-block text-center">
          <div class="profile-image">
            <img class="img-sm rounded-circle" src="{{ url('img/logo.png')}}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{auth()->user()->name}}</p>
            <p class="designation">Online <span class="dot-indicator bg-success"></span></p>
          </div>
        </a>
        <div class="progress-wrap px-3 py-3">
          <div class="d-flex justify-content-between text-white">
            <span>ADMIN</span>
            <span class="font-weight-bold"></span>
          </div>
          <div class="progress progress-xs mt-2">
            <div class="progress-bar bg-white" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
          </div>
        </div>
      </li>
      @if (Auth()->user()->id_user == 1))
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin')}}">
        <i class="mdi mdi-book-open menu-icon"></i>
        <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
        <i class="mdi mdi-layers menu-icon"></i>
        <span class="menu-title">Rekap Santri baru</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="barul">input pa</a></li>
            <li class="nav-item"> <a class="nav-link" href="barup">input pi</a></li>
          </ul>
        </div>
      </li>
      @endif
      @if (Auth()->user()->id_user == 2 or Auth()->user()->id_user == 1)
      <li class="nav-item">
        <a class="nav-link" href="{{url('bendahara')}}">
        <i class="mdi mdi-bell menu-icon"></i>
        <span class="menu-title">Bayar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('sudahbayar')}}">
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Sudah Bayar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="mdi mdi-airplay menu-icon"></i>
        <span class="menu-title">Report</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="reportbl">Santri Baru Pa</a></li>
            <li class="nav-item"> <a class="nav-link" href="reportbp">Santri Baru Pi</a></li>
            <li class="nav-item"> <a class="nav-link" href="reportal">Alumni Pa</a></li>
            <li class="nav-item"> <a class="nav-link" href="reportap">Alumni Pi</a></li>
            <li class="nav-item"> <a class="nav-link" href="reportll">Tidak Mondok Pa</a></li>
            <li class="nav-item"> <a class="nav-link" href="reportlp">Tidak Mondok Pi</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('pendaftar')}}">Keseluruhan</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit">
        <i class="mdi mdi-playlist-check menu-icon"></i>
        <span class="menu-title">Edit</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="unconfirm">
        <i class="mdi mdi-email menu-icon"></i>
        <span class="menu-title">Belum bayar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
        <i class="mdi mdi-map menu-icon"></i>
        <span class="menu-title">Kelulusan</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="maps">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('totalhasil1')}}">Gelombang I</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Gelombang II</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('out')}}">
        <i class="mdi mdi-email menu-icon"></i>
        <span class="menu-title">Mengundurkan diri</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('totalwil')}}">
        <i class="mdi mdi-calendar-range menu-icon"></i>
        <span class="menu-title">Total Perwilayah</span>
        </a>
      </li>
      @endif

      @if (Auth()->user()->id_user == 4))
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin')}}">
        <i class="mdi mdi-book-open menu-icon"></i>
        <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
        <i class="mdi mdi-layers menu-icon"></i>
        <span class="menu-title">Siswa diterima</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('lulus12020')}}">Tahap I</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('tahap2')}}">Tahap II</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
        <i class="mdi mdi-map menu-icon"></i>
        <span class="menu-title">Pendaftar Sementara</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="maps">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('gel1')}}">Gelombang I</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('gel2')}}">Gelombang II</a></li>
          </ul>
        </div>
      </li>
      @endif

      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-palette menu-icon"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
        <i class="mdi mdi-layers menu-icon"></i>
        <span class="menu-title">Advanced UI</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Form elements</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
            <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
            <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
            <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
        <i class="mdi mdi-pencil menu-icon"></i>
        <span class="menu-title">Editors</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="editors">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
            <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="mdi mdi-view-module menu-icon"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/ui-features/popups.html">
        <i class="mdi mdi-message-alert-outline menu-icon"></i>
        <span class="menu-title">Popups</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/ui-features/notifications.html">
        <i class="mdi mdi-bell menu-icon"></i>
        <span class="menu-title">Notifications</span>
        <span class="badge badge-success badge-pill">20</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="mdi mdi-emoticon menu-icon"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
        <i class="mdi mdi-map menu-icon"></i>
        <span class="menu-title">Maps</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="maps">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="mdi mdi-alert-circle menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <i class="mdi mdi-file menu-icon"></i>
        <span class="menu-title">General Pages</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
        <i class="mdi mdi-basket menu-icon"></i>
        <span class="menu-title">E-commerce</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="e-commerce">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/email.html">
        <i class="mdi mdi-email menu-icon"></i>
        <span class="menu-title">E-mail</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/calendar.html">
        <i class="mdi mdi-calendar-range menu-icon"></i>
        <span class="menu-title">Calendar</span>
        <span class="badge badge-warning">New</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/todo.html">
        <i class="mdi mdi-playlist-check menu-icon"></i>
        <span class="menu-title">Todo List</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/gallery.html">
        <i class="mdi mdi-image menu-icon"></i>
        <span class="menu-title">Gallery</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
        <span class="menu-title">Documentation</span>
        </a>
      </li> --}}
    </ul>
  </nav>
