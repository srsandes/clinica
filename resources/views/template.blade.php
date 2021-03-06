<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/matrix-media.css')}}" />
<link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class= @if ($menu == 1) "active" @endif><a href="{{route('home')}}"><i class="icon icon-home"></i> <span>Página pincipal</span></a> </li>
    <li class= @if ($menu == 2) "active submenu" @else "submenu" @endif > <a href="#"><i class="icon icon-th-list"></i> <span>Consulta</span> <span class="label label-important">3</span></a>
        <ul>
        <li><a href="{{route('cadastro.consulta')}}">Agendar</a></li>
          <li><a href="{{route('pesquisa.consulta')}}">Pesquisar</a></li>
        </ul>
      </li>
    <li class= @if ($menu == 3) "active submenu" @else "submenu" @endif> <a href="#"><i class="icon icon-th-list"></i> <span>Paciente</span> <span class="label label-important">3</span></a>
      <ul>
      <li ><a href="{{route('cadastro.paciente')}}">Cadastrar</a></li>
        <li><a href="{{route('pesquisa.paciente')}}">Pesquisar</a></li>
      </ul>
    </li>
<li class= @if ($menu == 4) "active" @endif><a href="{{route('cadastro.usuario')}}"><i class="icon icon-tint"></i> <span>Usuário</span></a></li>
    
  </ul>
</div>
<!--sidebar-menu-->



@yield('conteudo_principal')


<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->
@stack('script')

<script src="{{asset('assets/js/excanvas.min.js')}}"></script> 
<script src="{{asset('assets/js/jquery.min.js')}}"></script> 
<script src="{{asset('assets/js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/js/matrix.tables.js')}}"></script> 

<script src="{{asset('assets/js/jquery.peity.min.js')}}"></script> 
<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script> 
<script src="{{asset('assets/js/matrix.js')}}"></script> 
<script src="{{asset('assets/js/matrix.dashboard.js')}}"></script> 
<script src="{{asset('assets/js/jquery.gritter.min.js')}}"></script> 
<script src="{{asset('assets/js/matrix.interface.js')}}"></script> 
<script src="{{asset('assets/js/matrix.chat.js')}}"></script> 
<script src="{{asset('assets/js/jquery.validate.js')}}"></script> 
<script src="{{asset('assets/js/matrix.form_validation.js')}}"></script> 
<script src="{{asset('assets/js/jquery.wizard.js')}}"></script> 
<script src="{{asset('assets/js/jquery.uniform.js')}}"></script> 
<script src="{{asset('assets/js/select2.min.js')}}"></script> 
<script src="{{asset('assets/js/matrix.popover.js')}}"></script> 
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script> 

<script src="{{asset('assets/js/jquery.flot.min.js')}}"></script> 
<script src="{{asset('assets/js/jquery.flot.resize.min.js')}}"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>



</body>
</html>
