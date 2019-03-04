
<ul class='flexy-menu'>
    <li <?php if ($pagina==1) {?>
        class="active"
    <?php } ?>><a href='/'>Inicio</a></li>

    <li <?php if ($pagina==2) {?>
        class='active';
    <?php } ?>><a href='mantenimiento'>Mantenimiento Informatico</a></li>

    <li <?php if ($pagina==3) {?>
        class='active';
    <?php } ?>><a href='programacion'>Desarrollo y Aplicaciones Web</a></li>

    <li <?php if ($pagina==4) {?>
        class='active';
    <?php } ?>><a href='paginasWeb'>Paginas Web</a></li>

    <li <?php if ($pagina==7) {?>
        class='active';
    <?php } ?>><a href='contacto'>Contáctanos</a></li>

    <li <?php if ($pagina==8) {?>
        class="active"
    <?php } ?>><a href="{{route('pvt.index')}}">Punto de Venta</a></li>

    <li <?php if ($pagina==9) {?>
        class='active';
    <?php } ?>><a href='#'>Nuestro Negocio</a></li>


</ul>





