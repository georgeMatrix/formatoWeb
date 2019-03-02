<?php $__env->startSection('header'); ?>
    <h1>
        POST
        <small>Crear Publicacion</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo e(route('pages.admin.posts.index')); ?>"><i class="fa fa-list"></i> Posts</a></li>
        <li class="active">Crear</li>
    </ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-danger">
                <form action="">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Titulo de la publicacion</label>
                            <input name="title" placeholder="Ingresa aqui el titulo de la publicacion" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Extracto de la publicacion</label>
                            <textarea name="extract" id="" cols="30" rows="10" class="form-control" placeholder="Ingresa el contenido completo de la publicacion"></textarea>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Fecha de publicacion:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="fechaPublicacion" type="text" class="form-control pull-right" id="datepicker">
                            </div>
                            <div class="form-group">
                                <label for="">Categorias</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Selecciona una categoria</option>
                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="">Extracto de la publicacion</label>
                            <textarea name="extract" id="" class="form-control" placeholder="Ingresa un extracto de la publicacion"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Guardar Publicacion
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/adminLte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<!-- bootstrap datepicker -->
<script src="/adminLte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.layoutA', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>