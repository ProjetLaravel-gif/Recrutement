<li class="nav-item dropdown">
                    
                      <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('lol') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-right: 50px; ">
                    <img src="images/avatars/{{ Auth::guard('candidat')->user()->avatar }}" style="width: 80px;  height: 80px; position:absolute; top: 10px; right: 10px; border-radius: 50%; " >
                                   <b>{{ Auth::guard('candidat')->user()->nom }} {{ Auth::guard('candidat')->user()->prenom }}</b>  <span class=""></span>
                                </a></li> 
                            
                   <li><a href="#"><span class="ti-user"></span>Account</a></li>
                   <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                   <li> <a  href="{{ route('profil') }}"> mon profil </a> <br>
                   <li> <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        logout
                                    </a></li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form><span class="ti-power-off"></span>Log Out</a></li>