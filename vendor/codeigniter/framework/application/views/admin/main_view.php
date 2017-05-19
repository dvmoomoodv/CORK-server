<header>
       <nav class="top-nav">
         <div class="container">
           <div class="nav-wrapper"><a class="page-title">CORK - ADMIN</a></div>
         </div>
       </nav>
       <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
       <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(-100%);">
         <li class="logo"><a id="logo-container" href="http://materializecss.com/" class="brand-logo">
             <object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg">Your browser does not support SVG</object></a></li>

         <li class="bold"><a href="about.html" class="waves-effect waves-teal">About</a></li>
         <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
         <li class="no-padding">
           <ul class="collapsible collapsible-accordion">
             <li class="bold"><a class="collapsible-header  waves-effect waves-teal">CSS</a>
               <div class="collapsible-body">
                 <ul>
                   <li><a href="color.html">Color</a></li>
                   <li><a href="grid.html">Grid</a></li>
                   <li><a href="helpers.html">Helpers</a></li>
                   <li><a href="media-css.html">Media</a></li>
                   <li><a href="pulse.html">Pulse</a></li>
                   <li><a href="sass.html">Sass</a></li>
                   <li><a href="shadow.html">Shadow</a></li>
                   <li><a href="table.html">Table</a></li>
                   <li><a href="css-transitions.html">Transitions</a></li>
                   <li><a href="typography.html">Typography</a></li>
                 </ul>
               </div>
             </li>
             <li class="bold active"><a class="collapsible-header active waves-effect waves-teal">Components</a>
               <div class="collapsible-body" style="display: block;">
                 <ul>
                   <li><a href="badges.html">Badges</a></li>
                   <li><a href="buttons.html">Buttons</a></li>
                   <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                   <li class="active"><a href="cards.html">Cards</a></li>
                   <li><a href="chips.html">Chips</a></li>
                   <li><a href="collections.html">Collections</a></li>
                   <li><a href="footer.html">Footer</a></li>
                   <li><a href="forms.html">Forms</a></li>
                   <li><a href="icons.html">Icons</a></li>
                   <li><a href="navbar.html">Navbar</a></li>
                   <li><a href="pagination.html">Pagination</a></li>
                   <li><a href="preloader.html">Preloader</a></li>
                 </ul>
               </div>
             </li>
             <li class="bold"><a class="collapsible-header  waves-effect waves-teal">JavaScript</a>
               <div class="collapsible-body">
                 <ul>
                   <li><a href="carousel.html">Carousel</a></li>
                   <li><a href="collapsible.html">Collapsible</a></li>
                   <li><a href="dialogs.html">Dialogs</a></li>
                   <li><a href="dropdown.html">Dropdown</a></li>
                   <li><a href="feature-discovery.html">FeatureDiscovery</a></li>
                   <li><a href="media.html">Media</a></li>
                   <li><a href="modals.html">Modals</a></li>
                   <li><a href="parallax.html">Parallax</a></li>
                   <li><a href="pushpin.html">Pushpin</a></li>
                   <li><a href="scrollfire.html">ScrollFire</a></li>
                   <li><a href="scrollspy.html">Scrollspy</a></li>
                   <li><a href="side-nav.html">SideNav</a></li>
                   <li><a href="tabs.html">Tabs</a></li>
                   <li><a href="transitions.html">Transitions</a></li>
                   <li><a href="waves.html">Waves</a></li>
                 </ul>
               </div>
             </li>
           </ul>
         </li>
         <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Mobile</a></li>
         <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
         <li class="bold"><a href="themes.html" class="waves-effect waves-teal">Themes</a></li>
       </ul>
     </header>




   <main>
       <div class="container">
           <div class="row">

               <div class="col s12">

                   <div id="structure" class="section scrollspy">

                       컨텐츠관리자 사용자관리자 역할을 동시수행하는 페이지 개발
                       <h4>Introduction</h4>
                       <p class="caption">This is a slide out menu. You can add a dropdown to your sidebar by using our collapsible component. If you want to see a demo, our sidebar will use this on smaller screens. To use this in conjunction with a fullscreen navigation,
                           you have to use two copies of the same UL.</p>


                       <ul id="slide-out" class="side-nav" style="transform: translateX(-100%);">
                           <li>
                               <div class="userView">
                                   <div class="background">
                                       <img src="images/office.jpg">
                                   </div>
                                   <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
                                   <a href="#!name"><span class="white-text name">John Doe</span></a>
                                   <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                               </div>
                           </li>
                           <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                           <li><a href="#!">Second Link</a></li>
                           <li>
                               <div class="divider"></div>
                           </li>
                           <li><a class="subheader">Subheader</a></li>
                           <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                       </ul>



               </div>

           </div>
       </div>

   </main>



   <!--  Scripts-->
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
   <script>
       $(".button-collapse").sideNav();
   </script>
