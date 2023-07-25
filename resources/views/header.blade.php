<header>
    <div class="px-3 py-2 text-bg-secondary">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img width="50" height="42" class="rounded-circle" src="../SIDEBAR/logo6.png">
          </a>

          <ul class="nav nav-pills">
            <li>
              <a href="/" class="nav-link text-white">
                <i class="bi bi-house-door"></i><font _mstmutation="1" _msthash="2066090" _msttexthash="226772"> Tableau de bord </font></a>
            </li>

            <li>
              <a href="{{ route('users') }}" class="nav-link text-white">
                <i class="bi bi-person"></i><font _mstmutation="1" _msthash="2066090" _msttexthash="226772"> Profil </font></a>
            </li>

            <li>
              <a href="{{ route('coliss') }}" class="nav-link text-white">
                <i class="bi bi-box2"></i> <font _mstmutation="1" _msthash="2066272" _msttexthash="77948"> Colis </font></a>
            </li>

            <li>
              <a href="{{ route('branches') }}" class="nav-link text-white">
                <i class="bi bi-buildings"></i> <font _mstmutation="1" _msthash="2066454" _msttexthash="118768"> Branche </font></a>
            </li>

            <li>
              <a href="{{ route('courrierarrs') }}" class="nav-link text-white">
                <i class="bi bi-envelope-at"></i> <font _mstmutation="1" _msthash="2066636" _msttexthash="155129"> Courrier arrivé </font></a>
            </li>

            <li>
              <a href="{{route('courrierdeps') }}" class="nav-link text-white">
                <i class="bi bi-envelope-open"></i> <font _mstmutation="1" _msthash="2066636" _msttexthash="155129"> Courrier départ </font></a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column flex-sm-row col-3">
            <li class="nav-item">
              <a class="btn btn-outline-info " aria-current="page" href="{{ route('login') }}"> Déconnexion <i class="bi bi-box-arrow-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>



