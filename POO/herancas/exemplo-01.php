<?php

class Documento{

    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }

}

class CPF extends Documento{

    public function validar():bool
    {
        $cpf = $this->getNumero();

        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }

}

if(isset($_POST['cpf']) && $_POST['cpf'] != ""){

   
    $cpf = $_POST['cpf'];

    $doc = new CPF();

    $doc->setNumero($cpf);

   if($doc->validar()){

        echo "O CPF <strong>".$doc->getNumero(). "</strong> é válido. <br/><br/>"; 

   }else{
        echo "O CPF <strong>".$doc->getNumero(). "</strong> é inválido. <br/><br/>"; 
   }
   

}


?>

<form method="post" action="exemplo-01.php">
    <label for="cpf">Digite seu cpf</label>
    <input type="text" name="cpf" id="cpf" value="">
    <input type="submit" name="btn_enviar" value="Enviar" id="btn_enviar">
</form>