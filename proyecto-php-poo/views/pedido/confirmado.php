<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'confirm') : ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido guardado con Exito, una vez que realices la transferencia bancaria
        con el costo del pedido será procesado para el envío.
    </p>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'confirm') : ?>

    <h1>Tu pedido no pudo ser procesado</h1>
    <p>
        Tu pedido no pudo ser confirmado por que no se pudieron procesar los datos ingresados.
    </p>

<?php endif; ?>