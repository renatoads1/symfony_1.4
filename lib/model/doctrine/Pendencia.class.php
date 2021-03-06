<?php

/**
 * Pendencia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Pendencia extends BasePendencia
{

 /*
  * Atualizar pendencias da preventiva
  */
  public function atualizarPendencias($relatorios)
  {
     $this->setChecklistPendenciado(false);
     $this->setRelatorioFotograficoPendenciado(false);
     $this->setOrcamentoPendenciado(false);
    
    //Salvar pendencias
     for($x = 0; $x < count($relatorios); $x++){       
       if($relatorios[$x] == "Checklist"){
         $this->setChecklistPendenciado(true);
       }
       if ($relatorios[$x] == "Relatório Fotográfico"){
         $this->setRelatorioFotograficoPendenciado(true);
       }
       if($relatorios[$x] == "Orçamento"){
         $this->setOrcamentoPendenciado(true);
       }
     } 

    //Atualizar numero de pendencias
      $this->setNumPendencias($this->getNumPendencias()+1);
      $this->save();
  }

}