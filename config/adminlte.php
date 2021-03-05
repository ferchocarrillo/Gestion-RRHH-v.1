<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => '',
    'title_prefix' => '',
    'title_postfix' => 'Gestión RR.HH',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Gestor</b> de </b>RR.HH',
    'logo_img' => 'theme\images\iso.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Gestor de RR.HH',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-info',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'bg-gradient-dark',
    'classes_auth_header' => '',
    'classes_auth_body' => 'bg-gradient-dark',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'text-light',
    'classes_auth_btn' => 'btn-flat btn-light',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-white',
    'classes_brand_text' => 'text-info',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-info elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-info navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-dark',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [
               [
            'text' => 'Buscar',
            'search' => false,
            'topnav' => false,

            'method'=> 'post',
        ],


        [
           'text' => 'blog',
           'url'  => 'admin/blog',
           'can'  => 'manage-blog',
        ],

        [
           'text' => 'Dashboard',
           'url'  => 'home',
           'icon' => 'fas fa-chart-line',

        ],
        [
            'text' => 'SOLICITUDES',
            'icon' => 'fab fa-wpforms',
            'submenu' => [

        [   'text'    => 'REQUISICION DE PERSONAL',
            'url'     => 'requisicion\create',
            'icon'    => 'fas fa-users',
            'icon_color' => 'yellow'
        ],
],
],
['header' => 'RR.HH'],
[
    'text' => 'PROCESOS',
    'icon' => 'fab fa-wpforms',

    'submenu' => [
        ['text'    =>'Creacion de cargo nuevo',
        'url'     => 'cargoNuevo',
        'icon'    => 'fas fa-box',
        'icon_color' => 'purple'
        ],

    ['text'    => 'Revision de requisicion',
    'url'     => 'requisicion',
    'icon'    => 'fa fa-id-badge',
    'icon_color' => 'yellow'
    ],

    ['text'    => 'Publicacion de vacantes',
    'url'     => 'reclutamiento\create',
    'icon'    =>'fa fa-retweet',
    'icon_color' => 'blue'
    ],

    ['text'    => 'Registro de hojas de vida',
    'url'     => 'filtro\create',
    'icon'    => 'fa fa-server',
    'icon_color' => 'red'
    ],

    ['text'    => 'Actualizacion de historial',
    'url'     => 'filtro',
    'icon'    => 'fa fa-thumbs-up',
    'icon_color' => 'grey'
    ],
    ['text'    => 'Documentos recibidos',
    'url'     => 'contratacion',
    'icon'    => 'fas fa-file-signature',
    'icon_color' => 'orange'
    ],
    ['text'    => 'Formato de ingreso',
    'url'     => 'nuevoempleado',
    'icon'    => 'far fa-question-circle',
    'icon_color' => 'blue'
    ],
    ['text'    => 'Registro de Novedades',
    'url'     => 'novedades\create',
    'icon'    => 'far fa-flag',
    'icon_color' => 'green'
    ],

    ['text'    => 'Historico de Novedades',
    'url'     => 'verNovedades',
    'icon'    => 'fas fa-landmark',
    'icon_color' => 'pink'
    ],


],




],
[
    'text' => 'ENTREVISTAS',
    'icon' => 'fab fa-wpforms',

    'submenu' => [

        ['text'    =>'Formularios de Entrevista',
        'url'     => 'entrevista1',
        'icon'    => 'fas fa-comments',
        'icon_color' => 'orange'
        ],


        ['text'    => 'Resultado RR.HH',
        'url'     => 'entRRHH',
        'icon'    => 'fas fa-address-card',
        'icon_color' => 'orange'
        ],

        ['text'    => 'Resultado Jefe Inmediato',
        'url'     => 'entJefe',
        'icon'    => 'fas fa-hand-peace',
        'icon_color' => 'orange'
        ],

        ['text'    => 'Resultado Gerencia',
        'url'     => 'entGerencia',
        'icon'    => 'fas fa-handshake',
        'icon_color' => 'orange'
        ],

        ['text'    => 'Resumen Entrevistas',
        'url'     => 'resumen',
        'icon'    => 'fas fa-handshake',
        'icon_color' => 'green'
        ],

],
],
['header' => 'FORMACION'],
[
    'text' => 'REPORTES',
    'icon' => 'fab fa-wpforms',

    'submenu' => [

    ['text'    => 'Resultado de Capacitacion',
    'url'     => 'capacitacion',
    'icon'    => 'fa fa-id-badge',
    'icon_color' => 'yellow'

    ],
],
],
['header' => 'DATAS'],
[
    'text' => 'ASIGNACIONES',
    'icon' => 'fab fa-wpforms',

    'submenu' => [

    ['text'    => 'Asignacion de coordinador',
    'url'     => 'asignacion',
    'icon'    => 'fa fa-id-badge',
    'icon_color' => 'yellow'
    ],
],
],


        ['header' => 'ADMINISTRATIVO'],
        [
            'text'        => 'Roles',
            'url'         => 'role',
            'icon'        => 'fas fa-user-tag',
            'label_color' => 'success',
           /* 'can'  => 'role',*/
        ],

        [
            'text'        => 'Usuarios',
            'url'         => 'user',
            'icon'        => 'fas fa-users',
            'label_color' => 'success',
            /*'can'  => 'user',*/


        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor\sweetalert2\sweetalert2.all.min.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => false,
];
