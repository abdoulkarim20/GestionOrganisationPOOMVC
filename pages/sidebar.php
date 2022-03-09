<aside class="main-sidebar">
    <div class="sidebar">
        <div class="user-panel">
            <!-- <div class="image text-center"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> </div> -->
            <div class="info">
                <p style="color: black;"> <?= $_SESSION['prenoms'] . " " . $_SESSION['nom']; ?></p>
                <a href="./view/authentification/deconnexion.php"><i class="fa fa-power-off"></i></a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">PERSONAL</li>
            <li class="active treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Gestion des users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="?route=User&module=add">Ajouter</a></li>
                    <li><a href="?route=User&module=list">Lister</a></li>
                </ul>
            </li>
            <li class="active treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Gestion des regions</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="?route=Region&module=add">Ajouter</a></li>
                    <li><a href="?route=Region&module=list">Lister</a></li>
                </ul>
            </li>
            <li class="active treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Gestion Organisation</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="?route=Region&module=add">Ajouter</a></li>
                    <li><a href="?route=Region&module=list">Lister</a></li>
                </ul>
            </li>
            <li class="active treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html">Dashboard 1</a></li>
                    <li><a href="index2.html">Dashboard 2</a></li>
                    <li><a href="index3.html">Dashboard 3</a></li>
                    <li><a href="index4.html">Dashboard 4</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="apps-calendar.html">Calendar</a></li>
                    <li><a href="apps-support-ticket.html">Support Ticket</a></li>
                    <li><a href="apps-contacts.html">Contact / Employee</a></li>
                    <li><a href="apps-contact-grid.html">Contact Grid</a></li>
                    <li><a href="apps-contact-details.html">Contact Detail</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-envelope-o "></i> <span>Inbox</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="apps-mailbox.html">Mailbox</a></li>
                    <li><a href="apps-mailbox-detail.html">Mailbox Detail</a></li>
                    <li><a href="apps-compose-mail.html">Compose Mail</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-briefcase"></i> <span>UI Elements</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="ui-cards.html" class="active">Cards</a></li>
                    <li><a href="ui-user-card.html">User Cards</a></li>
                    <li><a href="ui-tab.html">Tab</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-notification.html">Notification</a></li>
                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                    <li><a href="ui-range-slider.html">Range slider</a></li>
                    <li><a href="ui-timeline.html">Timeline</a></li>
                    <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                    <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                    <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                    <li><a href="ui-list-media.html">List Media</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                </ul>
            </li>
            <li class="header">FORMS, TABLE & WIDGETS</li>
            <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Forms</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="form-elements.html">Form Elements</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-layouts.html">Form Layouts</a></li>
                    <li><a href="form-uploads.html">Form File Upload</a></li>

                    <li><a href="form-summernote.html">Summernote</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="table-basic.html">Basic Tables</a></li>
                    <li><a href="table-layout.html">Table Layouts</a></li>
                    <li><a href="table-data-table.html">Data Tables</a></li>
                    <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-th"></i> <span>Widgets</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="widget-data.html">Data Widgets</a></li>
                    <li><a href="widget-apps.html">Apps Widgets</a></li>
                </ul>
            </li>
            <li class="header">EXTRA COMPONENTS</li>
            <li class="treeview"> <a href="#"><i class="fa fa-bar-chart"></i> <span>Charts</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="chart-morris.html">Morris Chart</a></li>
                    <li><a href="chart-chartist.html">Chartis Chart</a></li>

                    <li><a href="chart-knob.html">Knob Chart</a></li>
                    <li><a href="chart-chart-js.html">Chartjs</a></li>
                    <li><a href="chart-peity.html">Peity Chart</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Sample Pages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="pages-blank.html">Blank page</a></li>
                    <li class="treeview"><a href="#">Authentication <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="pages-login.html">Login 1</a></li>
                            <li><a href="pages-login-2.html">Login 2</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-register2.html">Register 2</a></li>
                            <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                            <li><a href="pages-recover-password.html">Recover password</a></li>
                        </ul>
                    </li>
                    <li><a href="pages-profile.html">Profile page</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-treeview.html">Treeview</a></li>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-gallery.html">Gallery</a></li>
                    <li><a href="pages-faq.html">Faqs</a></li>
                    <li><a href="pages-404.html">404 Error Page</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-map-marker"></i> <span>Maps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="map-google.html">Google Maps</a></li>
                    <li><a href="map-vector.html" class="active">Vector Maps</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-paint-brush"></i> <span>Icons</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                    <li><a href="icon-themify.html">Themify Icons</a></li>
                    <li><a href="icon-linea.html">Linea Icons</a></li>
                    <li><a href="icon-weather.html">Weather Icons</a></li>
                    <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                    <li><a href="icon-flag.html">Flag Icons</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-share"></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="#">Level One</a></li>
                    <li class="treeview"> <a href="#">Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="#"> Level Two</a></li>
                            <li class="treeview"> <a href="#">Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level Three</a></li>
                                    <li><a href="#">Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Level One</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>



