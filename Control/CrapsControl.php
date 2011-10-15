<?php
require_once '../Model/Craps.php';
abstract class CrapsControl {
    public static function lanzarDados($turno, $punto, $montoTotal, $valor){
        $craps = new Craps($turno, $punto, $montoTotal,$valor);
        return $craps;
    }
    public static function evaluarLineaPase(Craps $craps){
        $craps->evaluarLineaPase();
    }
    public static function evaluarDontLineaPase(Craps $craps){
        $craps->evaluarDontLineaPase();
    }    
    public static function evaluarValorMarcado(Craps $craps){
        $craps->evaluarValorMarcado();
    }
    public static function evaluarCome(Craps $craps){
        $craps->evaluarCome();
    }
    public static function evaluarDontCome(Craps $craps){
        $craps->evaluarDontCome();
    }
    public static function evaluarField(Craps $craps){
        $craps->evaluarField();
    }  
    public static function evalSeven5x1(Craps $craps){
        $craps->evalSeven5x1();
    }
    public static function evalAnyCraps8x1(Craps $craps){
        $craps->evalAnyCraps8x1();
    }
    public static function eval10x1_3s(Craps $craps){
        $craps->eval10x1_3s();
    }
    public static function eval8x1_5s(Craps $craps){
        $craps->eval8x1_5s();
    }
    public static function eval10x1_4s(Craps $craps){
        $craps->eval10x1_4s();
    }
    public static function eval8x1_2s(Craps $craps){
        $craps->eval8x1_2s();
    }
    public static function eval16x1_3(Craps $craps){
        $craps->eval16x1_3();
    }
    public static function eval31x1_2(Craps $craps){
        $craps->eval31x1_2();
    }
    public static function eval31x1_12(Craps $craps){
        $craps->eval31x1_12();
    }
    public static function eval16x1_11(Craps $craps){
        $craps->eval16x1_11();
    }
    public static function evalBig6(Craps $craps){
        $craps->evalBig6();
    }
    public static function evalBig8(Craps $craps){
        $craps->evalBig8();
    }
}

?>
