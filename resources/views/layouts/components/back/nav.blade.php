  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="https://github.com/IgunOfficial" class="logo d-flex align-items-center" target="blank">
        <img src="{{ asset('assets1/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block">INABA</span>
      </a>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <div class="hidden sm:flex sm:items-center sm:ml-6" style="text-align: right" width="48">
            <div style="color: rgb(28, 114, 189)"><i class="bi bi-person" style="color: rgb(28, 114, 189)"></i>&nbsp;<b>{{ Auth::user()->nama }}</b></div>
        </div>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->