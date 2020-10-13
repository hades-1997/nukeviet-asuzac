<!-- BEGIN: submenu -->
<ul class="dropdown-menu">
    <!-- BEGIN: loop -->
    <li
        <!-- BEGIN: submenu -->class="dropdown-submenu"<!-- END: submenu -->> <!-- BEGIN: icon -->
         <img src="{SUBMENU.icon}" />&nbsp; <!-- END: icon --> <a href="{SUBMENU.link}" title="{SUBMENU.note}"{SUBMENU.target}>{SUBMENU.title_trim}</a> <!-- BEGIN: item --> {SUB} <!-- END: item -->
    </li>
    <!-- END: loop -->
</ul>
<!-- END: submenu -->

<!-- BEGIN: main -->
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav">
                 <li><a class="home" title="{LANG.Home}" href="{THEME_SITE_HREF}"><span class="visible-xs-inline-block">{LANG.Home}</span></a></li>
            <!-- BEGIN: top_menu -->
            <li {TOP_MENU.current} role="presentation"><a class="dropdown-toggle" {TOP_MENU.dropdown_data_toggle} href="{TOP_MENU.link}" role="button" aria-expanded="false" title="{TOP_MENU.note}"{TOP_MENU.target}> <!-- BEGIN: icon --> <img src="{TOP_MENU.icon}" />&nbsp; <!-- END: icon --> {TOP_MENU.title_trim}<!-- BEGIN: has_sub --> <strong class="caret">&nbsp;</strong>
                <!-- END: has_sub --></a> <!-- BEGIN: sub --> {SUB} <!-- END: sub --></li>
            <!-- END: top_menu -->
                </ul>
            </div>
<script type="text/javascript" data-show="after">
    $(function() {
        checkWidthMenu();
        $(window).resize(checkWidthMenu);
    });
</script>
<!-- END: main -->