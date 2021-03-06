<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li <?php echo e(request()->is('admin') ? 'class=active' : ''); ?>><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>

    <li class="treeview <?php echo e(request()->is('admin/posts*') ? 'active' : ''); ?>">
        <a href="#"><i class="fa fa-bars"></i> <span>Blog</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li <?php echo e(request()->is('admin/posts') ? 'class=active' : ''); ?>><a href="<?php echo e(route('pages.admin.posts.index')); ?>"><i class="fa fa-eye"></i>Ver todos Post</a></li>
            <li <?php echo e(request()->is('admin/posts/create') ? 'class=active' : ''); ?>><a href="<?php echo e(route('pages.admin.posts.create')); ?>"><i class="fa fa-pencil"></i>Crear Post</a></li>
        </ul>
    </li>
</ul>
<!-- /.sidebar-menu -->