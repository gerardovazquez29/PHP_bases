<?php include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : ?string {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return "No autenticado";
    }
}
$usuario = usuarioAutenticado(false);
echo $usuario;


include 'includes/footer.php';