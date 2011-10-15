<?php
require_once '../Control/CrapsControl.php';
abstract class CrapsView {
    public static function ejecutar() {
        if(!isset($_GET['opcion'])){
            self::mostrarMain();
        }else{
            switch ($_GET['opcion']) {
                case 'menuIngresando':
                    $nombre = $_POST['player'];
                    $montoStr = $_POST['monto'];
                    $monto = (int)$montoStr;
                    $mensaje="";
                    if($nombre!=""){
                        if(is_int($monto) && 1000<=$monto && $monto<=5000 && $monto!=null)
                            self::mostrarMenuIngresado ($nombre, $monto);
                        else{
                            $mensaje="Ingrese un valor adecuado al monto.";
                            require_once 'Inicio.html';
                        }
                    }else{
                        $mensaje="Ingrese su nombre. \n".$mensaje;
                        require_once 'Inicio.html';
                    }
                    break;
                case 'menu':
                    $nombre = $_POST['player'];
                    $monto = $_POST['monto'];
                    self::mostrarMenu($nombre, $monto);
                    break;
                case 'irJugar':
                    self::mostrarIrJuego();
                    break;
                case 'jugar':
                    $nombre = $_POST['player'];
                    $monto = $_POST['monto'];
                    $valor = $_POST['valor'];
                    self::mostrarJuego($nombre,$monto,$valor);
                    break;
                case 'reglas':
                    self::mostrarReglas();
                    break;
                 default:
                    self::mostrarMain();
                    break;
            }
        }
    }
    
    private static function mostrarMain(){
        $mensaje="";
        $nombre="";
        $monto="";
        require_once 'Inicio.html';
    }
   
    private static function mostrarMenu($nombre,$monto){
        $name = $_GET['player'];
        $amount = $_GET['monto'];
        require_once 'Menu.html';
    }
     
     
    private static function mostrarMenuIngresado($nombre,$monto){
        $name = $_GET['player'];
        $amount = $_GET['monto'];
        require_once 'Menu.html';
    }
    private static function mostrarReglas(){
        $nombre = $_GET['player'];
        $monto = $_GET['monto'];
        require_once 'reglas.html';
    }
    private static function mostrarIrJuego(){
        $nombre = $_GET['player'];
        $monto = $_GET['monto'];
        require_once 'Craps.html';
    }
    private static function mostrarJuego($nombre,$amount,$valor){
        if(isset($_POST['valor'])){
            $turno=0;
            if(isset($_POST['turno'])){
                $turno = $_POST['turno'];
                $punto = $_POST['punto'];
            }
            if($turno == 1){
                $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                $suma = $crap->get_suma();
                $valorDado1 = $crap->get_dado1();
                $valorDado2 = $crap->get_dado2();
                $punto = $crap->get_punto();
                $resultado = $crap->get_resultado();
                $termino = $crap->get_termino();
                $monto = $crap->get_montoTotal();
                if($suma==$punto){
                    $monto=$monto+10;
                    $resultado="Ganaste, salió $suma";
                    $termino=true;
                }elseif($suma==7){
                    $monto=$monto-10;
                    $resultado = "Perdiste, salió $suma";
                    $termino=true;
                }else
                    $resultado="Lance los dados otra vez";
                require_once 'CrapsJugando.html';
            } elseif($turno == 2){
                $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                $suma = $crap->get_suma();
                $valorDado1 = $crap->get_dado1();
                $valorDado2 = $crap->get_dado2();
                $punto = $crap->get_punto();
                $resultado = $crap->get_resultado();
                $termino = $crap->get_termino();
                $monto = $crap->get_montoTotal();
                if($suma==$punto){
                    $monto=$monto-10;
                    $resultado = "Perdiste, salió $suma";
                    $termino=true;
                }elseif($suma==7){
                    $monto=$monto+10;
                    $resultado="Ganaste, salió $suma";
                    $termino=true;
                }else
                    $resultado="Lance los dados otra vez";
                require_once 'CrapsJugando.html';
            }elseif($turno == 3){
                $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                $suma = $crap->get_suma();
                $valorDado1 = $crap->get_dado1();
                $valorDado2 = $crap->get_dado2();
                $punto = $crap->get_punto();
                $resultado = $crap->get_resultado();
                $termino = $crap->get_termino();
                $monto = $crap->get_montoTotal();
                if($suma==6){
                    $monto=$monto+10;
                    $resultado = "Ganaste, salió $suma";
                    $termino=true;
                }elseif($suma==7){
                    $monto=$monto-10;
                    $resultado="Perdiste, salió $suma";
                    $termino=true;
                }else
                    $resultado="Lance los dados otra vez";
                require_once 'CrapsJugando.html';
            }elseif($turno == 4){
                $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                $suma = $crap->get_suma();
                $valorDado1 = $crap->get_dado1();
                $valorDado2 = $crap->get_dado2();
                $punto = $crap->get_punto();
                $resultado = $crap->get_resultado();
                $termino = $crap->get_termino();
                $monto = $crap->get_montoTotal();
                if($suma==8){
                    $monto=$monto+10;
                    $resultado = "Ganaste, salió $suma";
                    $termino=true;
                }elseif($suma==7){
                    $monto=$monto-10;
                    $resultado="Perdiste, salió $suma";
                    $termino=true;
                }else
                    $resultado="Lance los dados otra vez";
                require_once 'CrapsJugando.html';
            }
            switch ($valor){
                case '4':
                case '5':
                case '6':
                case '8':
                case '9':
                case '10':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evaluarValorMarcado($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = $crap->get_valor();
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    $turno=1;
                    require_once 'CrapsJugando.html';
                    break;
                case 'passline':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evaluarLineaPase($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = $crap->get_punto();
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    $turno=1;
                    require_once 'CrapsJugando.html';
                    break;
                case 'dontpass':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evaluarDontLineaPase($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = $crap->get_punto();
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    $turno=2;
                    require_once 'CrapsJugando.html';
                    break;
                case 'field':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evaluarField($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case 'come':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evaluarCome($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = $crap->get_punto();
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    $turno=1;
                    require_once 'CrapsJugando.html';
                    break;
                case 'dontcome':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evaluarDontCome($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = $crap->get_punto();
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    $turno=2;
                    require_once 'CrapsJugando.html';
                    break;
                case 'seven5x1':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evalSeven5x1($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case 'anycraps8x1':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evalAnyCraps8x1($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '10x1-3s':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval10x1_3s($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '8x1-5s':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval8x1_5s($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '10x1-4s':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval10x1_4s($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '8x1-2s':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval8x1_2s($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '16x1-3':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval16x1_3($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '31x1-2':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval31x1_2($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '31x1-12':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval31x1_12($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case '16x1-11':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::eval16x1_11($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = "-";
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
                case 'big6':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evalBig6($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = 6;
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    $turno=3;
                    require_once 'CrapsJugando.html';
                    break;
                case 'big8':
                    $crap = CrapsControl::lanzarDados($turno, $punto, $amount, $valor);
                    CrapsControl::evalBig8($crap);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = 8;
                    $resultado = $crap->get_resultado();
                    $termino = $crap->get_termino();
                    $monto = $crap->get_montoTotal();
                    $turno=4;
                    require_once 'CrapsJugando.html';
                    break;
                default :
                    $crap = CrapsControl::lanzarDados($turno, 0, $amount, $valor);
                    $suma = $crap->get_suma();
                    $valorDado1 = $crap->get_dado1();
                    $valorDado2 = $crap->get_dado2();
                    $punto = $crap->get_punto();
                    $resultado = "Qué tal si apuestas algo...!";
                    $termino = true;
                    $monto = $crap->get_montoTotal();
                    require_once 'CrapsJugando.html';
                    break;
            }
        }
    }     
}
CrapsView::ejecutar();
?>