<?php
session_start();
$arreglo = $_SESSION['carrito'];
for($i=0;$i<count($arreglo); $i++){
if ($arreglo[$i]['id'] != $_POST['id']){ $arregloNuevo[]= array(
'Id'=>$arreglo[$i]['id'],
'Nombre'=>$arreglo[$i][ 'Nombre'],
'Precio' => $arreglo[$i]['Precio'],
'Imagen' => $arreglo[$i]['Imagen'],
'Cantidad'=>$arreglo[$i]['Cantidad']
);
}
} if(isset($arregloNuevo)){
$_SESSION['carrito' ]=$arregloNuevo;
}else{
//quiere decir que el registro a eliminar es el unico que habia
unset($_SESSION['carrito']);
}
echo "listo";
?>