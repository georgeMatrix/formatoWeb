<?php $__env->startSection('header'); ?>
    <h1>
        POST
        <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Posts</li>
    </ol>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Listado de publicaciones</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="post-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Extracto</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post->id); ?></td>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->extract); ?></td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<!-- Data tables -->
<link rel="stylesheet" href="/adminLte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/adminLte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<!-- DataTables -->
<script src="/adminLte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminLte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- bootstrap datepicker -->
<script src="/adminLte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#post-table').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout/layoutA', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>