<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?=media();?>/images/uploads/user-icon.jpg" style="width: 25px;" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Admin</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?=base_url(); ?>/dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Gestion Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?=base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>Usuarios</a></li>
                <li><a class="treeview-item" href="<?=base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            </ul>
        </li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Graficos</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Reporte</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?=base_url(); ?>/reporte"><i class="icon fa fa-circle-o"></i>Reporte</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-bed"></i><span class="app-menu__label">Habitaciones</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?=base_url(); ?>/habitaciones"><i class="icon fa fa-circle-o"></i> Lista Habitaciones</a></li>
                <li><a class="treeview-item" href="<?=base_url(); ?>/tipoHabitacion"><i class="icon fa fa-circle-o"></i>Tipo Habitacion</a></li>
            </ul>
        </li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Reserva</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item active" href="<?=base_url(); ?>/cliente"><i class="icon fa fa-circle-o"></i>Nueva Reserva</a></li>
                <li><a class="treeview-item" href="<?=base_url(); ?>/reserva"><i class="icon fa fa-circle-o"></i> Reserva clientes</a></li>
                <li><a class="treeview-item" href="<?=base_url(); ?>/reservahabitacion"><i class="icon fa fa-circle-o"></i> Reserva Habitacion</a></li>
            </ul>
        </li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Servicios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item active" href="<?=base_url(); ?>/servicios"><i class="icon fa fa-circle-o"></i>Minibar</a></li>
                <li><a class="treeview-item" href="<?=base_url(); ?>/servicios"><i class="icon fa fa-circle-o"></i> Bebidas</a></li>
                <li><a class="treeview-item" href="<?=base_url(); ?>/servicios"><i class="icon fa fa-circle-o"></i>Servicios</a></li>
            </ul>
        </li>
    </ul>
</aside>