{{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../{{Request::segment(1)}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../{{Request::segment(1)}}/settings">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../{{Request::segment(1)}}/profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../{{Request::segment(1)}}/help">Help</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> --}}

<nav class="ck rj aeq ro vq app-navbar">
  <button
    class="re rh ayd"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="rf"></span>
  </button>

  <a class="e" href="../admin">
    <img src="../images/brand-white.png" alt="brand">
  </a>

  <div class="collapse f" id="navbarResponsive">
    <ul class="navbar-nav ain">
      <li class="qx active">
        <a class="qv" href="../admin">Home <span class="aet">(current)</span></a>
      </li>
      <li class="qx">
        <a class="qv" href="../{{Request::segment(1)}}/profile">Profile</a>
      </li>
      <li class="qx">
        <a class="qv" data-toggle="modal" href="#msgModal">Messages</a>
      </li>
      <li class="qx">
        <a class="qv" href="../{{Request::segment(1)}}/settings">Settings</a>
      </li>

      <li class="qx ayd">
        <a class="qv" href="../{{Request::segment(1)}}/notifications">Notifications</a>
      </li>
      <li class="qx ayd">
        <a class="qv" data-action="growl">Growl</a>
      </li>
      <li class="qx ayd">
        <a class="qv" href="../{{Request::segment(1)}}/login">Login</a>
      </li>

    </ul>

    <form class="pf aec ayc">
      <input class="form-control" type="text" data-action="grow" placeholder="Search">
    </form>

    <ul id="#js-popoverContent" class="nav navbar-nav aec afh ayc">
      <li class="qx">
        <a class="g qv" href="../{{Request::segment(1)}}/notifications">
          <span class="h bbf"></span>
        </a>
      </li>
      <li class="qx afx">
        <button class="cg bqv bqw bpq" data-toggle="popover">
          <img class="wg" src="../images/avatar-dhg.png">
        </button>
      </li>
    </ul>

    <ul class="nav navbar-nav hidden-xs-up" id="js-popoverContent">
      <li class="qx"><a class="qv" href="#" data-action="growl">Growl</a></li>
      <li class="qx"><a class="qv" href="login/index.html">Logout</a></li>
    </ul>
  </div>
</nav>
