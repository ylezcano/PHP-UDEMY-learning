<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'confirm') : ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido guardado con Exito, una vez que realices la transferencia bancaria
        a la cuenta 9875432165497 con el costo del pedido será procesado para el envío.
    </p>
    <br>
    <?php if (isset($pedido)) : ?>
        <h3>Datos del pedido:</h3>

        Número de pedido: <?= $pedido->id ?>
        <br>
        Total a pagar: $<?= $pedido->coste ?>
        <br>
        Productos:

        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()) : ?>
                <tr>
                    <td>
                        <?php if ($producto->imagen != null) : ?>
                            <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito">
                        <?php else : ?>
                            <img src="<?= base_url ?>assets/img/camiseta.png" alt="" class="img_carrito">
                        <?php endif; ?>
                    </td>
                    <td><a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a></td>
                    <td><?= $producto->precio ?></td>
                    <td><?= $producto->unidades ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>
<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'confirm') : ?>

    <h1>Tu pedido no pudo ser procesado</h1>
    <p>
        Tu pedido no pudo ser confirmado por que no se pudieron procesar los datos ingresados.
    </p>

<?php endif; ?>