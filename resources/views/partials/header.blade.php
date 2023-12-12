 <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="{{('dashboard')}}" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>Gestion des Régisseurs et des Agents Comptables</h3>
                </div>
				<!-- /Header Title -->
			
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Taper ici">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/fr.png" alt="" height="20"> <span>Mali</span>
						</a>
					</li>
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>{{ auth()->user()->name }}</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{route('profile.edit')}}">Profil</a>
							<a class="dropdown-item" href="{{route('profile.update')}}">Paramètres</a>
							<form method="POST" action="{{ route('logout') }}">
							    @csrf
							    <a class="dropdown-item" href="#" onclick="event.preventDefault(); 
									this.closest('form').submit();">
							        Déconnexion
							    </a>
							</form>

						</div>
					</li>
				</ul>
		
            </div>