<?php $__env->startSection('contenido'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Provedor</h4>
                <p class="card-category"> Tabla de Provedor<a href="<?php echo e(route('provedor.create')); ?>" class="btn btn-danger pull-right">Agregar Nuevo</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            <b>Nombre</b>
                        </th>
                        <th>
                            <b>Razon Social</b>
                        </th>
                        <th>
                            <b>RFC</b>
                        </th>
                        <th>
                            <b>Direccion</b>
                        </th>
                        <th>
                            <b>Telefono</b>
                        </th>
                        <th>
                            <b>Contacto</b>
                        </th>
                        <th>
                            <b>Editar</b>
                        </th>
                        <th>
                            <b>Eliminar</b>
                        </th>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $provedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($provedor->nombre); ?>

                                </td>
                                <td>
                                    <?php echo e($provedor->razon_social); ?>

                                </td>
                                <td>
                                    <?php echo e($provedor->rfc); ?>

                                </td>
                                <td>
                                    <?php echo e($provedor->direccion); ?>

                                </td>
                                <td>
                                    <?php echo e($provedor->telefono); ?>

                                </td>
                                <td>
                                    <?php echo e($provedor->contacto); ?>

                                </td>
                                <td>
                                    <a href="<?php echo e(route('provedor.show', $provedor->id)); ?>" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('provedor.destroy', $provedor->id)); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pvt.layoutABC.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>