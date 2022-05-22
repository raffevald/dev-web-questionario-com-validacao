<?php
    $user_name=$_POST['user_name'];

    $questao_01=$_POST['questao_01'];
    $questao_02=$_POST['questao_02'];
    $questao_03=$_POST['questao_03'];
    $questao_04=$_POST['questao_04'];
    $questao_05=$_POST['questao_05'];
    $questao_06=$_POST['questao_06'];
    $questao_07=$_POST['questao_07'];
    $questao_08=$_POST['questao_08'];
    $questao_09=$_POST['questao_09'];
    $questao_10=$_POST['questao_10'];

    $acertos = 0;

    if(($questao_06 == 'Selecione a opção correta.') or ($questao_07 == 'Selecione a opção correta.') or ($questao_08 == 'Selecione a opção correta.') or ($questao_09 == 'Selecione a opção correta.') or ($questao_10 == 'Selecione a opção correta.') ) {
        echo 'Favor responder todas as questões.';
    } else {
        if($questao_01 == 12) {
            $acertos = $acertos + 1;
        } 
        if($questao_02 == 1015) {
            $acertos = $acertos + 1;
        }
        if($questao_03 == '3-3') {
            $acertos = $acertos + 1;
        }
        if($questao_04 == '4-1') {
            $acertos = $acertos + 1;
        }
        if($questao_05 == '5-5') {
           $acertos = $acertos + 1;
        }
        if($questao_06 == 'Red Line') {
            $acertos = $acertos + 1;
        }
        if($questao_07 == 'Zoam mitica') {
           $acertos = $acertos + 1;
        }
       if($questao_08 == 'Eiichiro Oda') {
            $acertos = $acertos + 1;
       }
       if($questao_09 == 'Sete') {
           $acertos = $acertos + 1;
       }
       if($questao_10 == 'Ace e Sabo') {
            $acertos = $acertos + 1;
       }

       if($acertos <= 6) {
           echo $user_name. ' você não conhece muito de one piece, sugiro estudar sobre.</br>';
           echo 'Você acerto: '. $acertos;
       } else {
           if($acertos <= 8) {
                echo $user_name. ' parabéns você conhece muito de one piece.</br>';
                echo 'Você acerto: '. $acertos;
           } else {
               if($acertos <= 10) {
                    echo $user_name. ' parabéns você conhece super muito de one piece.</br>';
                    echo 'Você acerto: '. $acertos;
               }
           }
       }
    }

?>