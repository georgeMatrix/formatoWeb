<?php $__env->startSection('contenido'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Producto</h4>
                <p class="card-category"> Tabla de Producto<a href="<?php echo e(route('producto.create')); ?>" class="btn btn-danger pull-right">Agregar Nuevo</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            <b>clave</b>
                        </th>
                        <th>
                            <b>sku</b>
                        </th>
                        <th>
                            <b>skuVnpk</b>
                        </th>
                        <th>
                            <b>provedor</b>
                        </th>
                        <th>
                            <b>categoria</b>
                        </th>
                        <th>
                            <b>descripcion</b>
                        </th>
                        <th>
                            <b>descripcionE</b>
                        </th>
                        <th>
                            <b>costo</b>
                        </th>
                        <th>
                            <b>iva_costo</b>
                        </th>
                        <th>
                            <b>ieps_costo</b>
                        </th>
                        <th>
                            <b>total_costo</b>
                        </th>
                        <th>
                            <b>precioMayoreo</b>
                        </th>
                        <th>
                            <b>ivaPrecioMayoreo</b>
                        </th><th>
                            <b>iepsPrecioMayoreo</b>
                        </th>
                        <th>
                            <b>totalPrecioMayoreo</b>
                        </th>
                        <th>
                            <b>precioMedioMayoreo</b>
                        </th>
                        <th>
                            <b>ivaPrecioMedioMayoreo</b>
                        </th>
                        <th>
                            <b>iepsPrecioMedioMayoreo</b>
                        </th>
                        <th>
                            <b>totalPrecioMedioMayoreo</b>
                        </th>
                        <th>
                            <b>precioRetail</b>
                        </th>
                        <th>
                            <b>ivaPrecioRetail</b>
                        </th>
                        <th>
                            <b>iepsPrecioRetail</b>
                        </th>
                        <th>
                            <b>totalPrecioRetail</b>
                        </th>
                        <th>
                            <b>existencia</b>
                        </th>
                        <th>
                            <b>unidadMedida</b>
                        </th>
                        <th>
                            <b>Editar</b>
                        </th>
                        <th>
                            <b>Eliminar</b>
                        </th>

                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($producto->clave); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->sku); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->skuVnpk); ?>

                                </td>
                                <td>
                                    <?php if(is_null(\App\modelos\Provedor::find($producto->provedor))): ?>
                                        <p class="text-danger">Falta Valor</p>
                                    <?php else: ?>
                                        <?php echo e(\App\modelos\Provedor::find($producto->provedor)->nombre); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(is_null(\App\modelos\Categoria::find($producto->categoria))): ?>
                                        <p class="text-danger">Falta Valor</p>
                                    <?php else: ?>
                                        <?php echo e(\App\modelos\Categoria::find($producto->categoria)->nombre); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($producto->descripcion); ?>

                                </td>

                                <td>
                                    <?php echo e($producto->descripcionE); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->costo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->iva_costo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->ieps_costo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->total_costo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->precio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->iva_Precio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->ieps_Precio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->total_Precio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->precio_Medio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->iva_Precio_Medio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->ieps_Precio_Medio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->total_Precio_Medio_Mayoreo); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->precio_Retail); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->iva_Precio_Retail); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->ieps_Precio_Retail); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->total_Precio_Retail); ?>

                                </td>
                                <td>
                                    <?php echo e($producto->existencia); ?>

                                </td>
                                <td>
                                    <?php if(is_null(\App\modelos\UnidadMedida::find($producto->unidad_Medida))): ?>
                                        <p class="text-danger">Falta Valor</p>
                                    <?php else: ?>
                                        <?php echo e(\App\modelos\UnidadMedida::find($producto->unidad_Medida)->nombre); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('producto.show', $producto->id)); ?>" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('producto.destroy', $producto->id)); ?>" method="post">
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