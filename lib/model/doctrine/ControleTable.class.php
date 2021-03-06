<?php

/**
 * ControleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ControleTable extends Doctrine_Table
{

    /**
     * Returns an instance of this class.
     *
     * @return object ControleTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Controle');
    }


   /*
    * Retonar chamados
    */
   public function getControleAtivos(Doctrine_Query $q = null, $uf, $gram, $contrato, $grupo)
   {
     return $this->addControleQuery($q, $uf, $gram, $contrato, $grupo)->execute();
   }

   
   /*
    * Retonar só a quantidade de chamados
    */
   public function getCountControleAtivos(Doctrine_Query $q = null, $uf, $gram, $contrato, $grupo)
   {
     return $this->addControleQuery($q, $uf, $gram, $contrato, $grupo)->count();
   }
   
   
   /*
    * Query para recuperar chamados
    */
   public function addControleQuery(Doctrine_Query $q = null, $uf, $gram, $contrato, $grupo)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();

     //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';  
         } 

         $q->andWhere($aux);

       }

     //gram
       if(count($gram)>0){
         
         if($grupo->getName() == "Fornecedor"){
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }
         } 
         else{
           $aux1 = $alias.'.gram = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram = "'.$gram[$x]->getName().'"';
           }
         }  

         $q->andWhere($aux1);
       }

     //contrato 
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"'; 
         }

         $q->andWhere($aux2);

       }

      $q->orderBy($alias.'.created_at DESC');
      
      return $q;
   }


   /*
    * Retonar usuarios ativos
    */
   public function getControleUsuariosAtivos(Doctrine_Query $q = null, $usuario)
   {
    return $this->addControleUsuQuery($q, $usuario)->execute();
   }


   /*
    * Retonar quantidade de chamados usuarios ativos
    */
   public function getCountControleUsuariosAtivos(Doctrine_Query $q = null, $email)
   {
    return $this->addControleUsuQuery($q, $email)->count();
   }
   
   
   /*
    * Query para recuperar chamados
    */
   public function addControleUsuQuery(Doctrine_Query $q = null, $email)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();
     $q->andWhere($alias.'.email = ?', $email);
     $q->orderBy($alias.'.created_at DESC');
	 
      return $q;
   }


   /*
    * Retonar chamados ativos de acordo com o status
    */
   public function getControleStatusAtivos(Doctrine_Query $q = null, $status)
   {
    return $this->addControleStatusQuery($q, $status)->execute();
   }


   /*
    * Query para recuperar chamados de acordo com o status
    */
   public function addControleStatusQuery(Doctrine_Query $q = null, $status, $uf, $gram, $contrato, $grupo)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();

    //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';
         }

         $q->andWhere($aux);

       }

     //gram
       if(count($gram)>0){
         if($grupo->getName() == "Fornecedor"){
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }
         } 
         else{
           $aux1 = $alias.'.gram = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram = "'.$gram[$x]->getName().'"';
           }
         }  

         $q->andWhere($aux1);
       }

      //contrato
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"';
         }

         $q->andWhere($aux2);

       }

     $q->andWhere($alias.'.status = ?', $status);
     $q->orderBy($alias.'.created_at DESC');

      return $q;
   }


  /*
   * Retonar chamados duplicados
   */
   public function procurarDuplicados(Doctrine_Query $q = null, $sigla, $tipoServico, $recursoServico)
   {
    return $this->addDuplicados($q, $sigla, $tipoServico, $recursoServico)->execute();
   }


   /*
    * Query para verificar chamados duplicados
    */
   public function addDuplicados(Doctrine_Query $q = null, $sigla, $tipoServico, $recursoServico)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();
     $q->andWhere($alias.'.sigla_da_estacao = ?', $sigla);
     $q->andWhere($alias.'.tipo_de_servico = ?', $tipoServico);
     $q->andWhere($alias.'.recurso_servico_requerido = ?', $recursoServico);
     $q->andWhere($alias.'.status != ?', "Concluído");    
     $q->andWhere($alias.'.status != ?', "Cancelado");
     $q->orderBy($alias.'.created_at DESC');

     return $q;
   }


  /*
   * Retonar chamados duplicados
   */
   public function procurarChamadosMesmoLocal(Doctrine_Query $q = null, $sigla, $recursoServico)
   {
    return $this->addChamadosMesmoLocalQuery($q, $sigla, $recursoServico)->execute();
   }


   /*
    * Query para verificar chamados duplicados
    */
   public function addChamadosMesmoLocalQuery(Doctrine_Query $q = null, $sigla, $recursoServico)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();
     $q->andWhere($alias.'.sigla_da_estacao = ?', $sigla);
     $q->andWhere($alias.'.recurso_servico_requerido != ?', $recursoServico);
     $q->andWhere($alias.'.status != ?', "Concluído"); 
     $q->andWhere($alias.'.status != ?', "Cancelado");
     $q->andWhere($alias.'.status != ?', "Executado (Aguardando Relatório Fotográfico)");   
     $q->orderBy($alias.'.created_at DESC');

     return $q;
   }


   /*
    * Retonar o numero de chamados existente
    */
   public function countChamados(Doctrine_Query $q = null, $status, $uf, $gram, $contrato, $grupo)
   {
     return $this->addCountChamadosQuery($q, $status, $uf, $gram, $contrato, $grupo)->execute(array(), Doctrine_Core::HYDRATE_NONE);
   }


   /*
    * Query contar chamados
    */
   public function addCountChamadosQuery(Doctrine_Query $q = null, $status, $uf, $gram, $contrato, $grupo)
   {
     /*if($status != "todos"){
      $q = Doctrine_Query::create()
         ->select('COUNT(j.id)')
         ->from('Controle j')
         ->where('j.status = ?', $status);
      }
      else{
       $q = Doctrine_Query::create()
         ->select('COUNT(j.id)')
         ->from('Controle j');
      }*/

      if (is_null($q))
      {
        $q = Doctrine_Query::create()
           ->select('COUNT(j.id)')
           ->from('Controle j');
       }

     $alias = $q->getRootAlias();

    //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';
         }

         $q->andWhere($aux);

       }

     //gram
       if(count($gram)>0){
         if($grupo->getName() == "Fornecedor"){
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }
         } 
         else{
           $aux1 = $alias.'.gram = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram = "'.$gram[$x]->getName().'"';
           }
         }  

         $q->andWhere($aux1);
       }  

      //contrato
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"';
         }

         $q->andWhere($aux2);

       }

       if($status != "todos") $q->andWhere($alias.'.status = ?', $status);

      return $q;
   }


    /*
    * Query para recuperar chamados que possuem orcamentos
    */
   public function addControleOrcamentoQuery(Doctrine_Query $q = null, $uf, $gram, $contrato, $grupo)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();

     //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';  
         } 

         $q->andWhere($aux);

       }

      //gram
       if(count($gram)>0){
         if($grupo->getName() == "Fornecedor"){
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }
         } 
         else{
           $aux1 = $alias.'.gram = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram = "'.$gram[$x]->getName().'"';
           }
         }  

         $q->andWhere($aux1);
       }    

     //contrato 
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"'; 
         }

         $q->andWhere($aux2);

       }

     $q->andWhere($alias.'.orcamento_id != ?', 'null');
     $q->orderBy($alias.'.created_at DESC');

      return $q;
   }


  /*
   * Retonar chamados que possuem orçamento
   */
   public function getControleOrcamento(Doctrine_Query $q = null, $uf, $gram, $contrato, $grupo)
   {
    return $this->addControleOrcamentoQuery($q, $uf, $gram, $contrato, $grupo)->execute();
   } 


   /*
    * Query para recuperar chamados que possuem orcamentos em um determinado status
    */
   public function addOrcamentoStatusQuery(Doctrine_Query $q = null, $status, $uf, $gram, $contrato, $grupo)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();

     //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';  
         } 

         $q->andWhere($aux);

       }

     //gram
       if(count($gram)>0){
         if($grupo->getName() == "Fornecedor"){
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }
         } 
         else{
           $aux1 = $alias.'.gram = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram = "'.$gram[$x]->getName().'"';
           }
         }  

         $q->andWhere($aux1);
       }  

     //contrato 
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"'; 
         }

         $q->andWhere($aux2);

       }

     $q->andWhere($alias.'.orcamento_id != ?', 'null');

     if($status=="Aprovado"){    
       $q->andWhere($alias.'.status != "Aguardando disponibilidade de verba" AND '.$alias.'.status != "Cancelado" AND '.$alias.'.status != "Em confecção de orçamento" AND '.$alias.'.status!= "Em aprovação de orçamento"');
       $q->leftJoin($alias.'.Orcamento a');
       $q->orderBy('a.data_hora DESC');
     }
     elseif ($status=="Confeccionado parcialmente") {
       $q->leftJoin($alias.'.Orcamento a');
       $q->andWhere($alias.'.status = ?', "Em confecção de orçamento");
       $q->andWhere('a.edicao = ?', false);
       $q->orderBy('a.created_at DESC');
     }
     elseif ($status=="Aguardando alteração do fornecedor") {
       $q->leftJoin($alias.'.Orcamento a');
       $q->andWhere($alias.'.status = ?', "Em confecção de orçamento");
       $q->andWhere('a.edicao = ?', true);
       $q->orderBy('a.created_at DESC');
     }
     else{
       $q->andWhere($alias.'.status = ?', $status);
       $q->leftJoin($alias.'.Orcamento a');
       $q->orderBy('a.created_at DESC');
     }

      return $q;
   }


  /*
   * Retonar resultado do filtro
   */
    public function getNovoFiltro($id, $status, $estado, $tipoServico, $sigla, $prioridade, $gram, $gramAtendimento, $dataExecucao, $dataProgramada, $dataAbertura){
       //return $this->addNovoFiltro($id, $status, $estado, $tipoServico, $sigla, $prioridade, $gram, $gramAtendimento, $dataExecucao, $dataProgramada, $dataAbertura)->execute();
	  }


  /*
   * Query para filtrar chamados
   */
    public function addNovoFiltro(Doctrine_Query $q = null, $id, $status, $estado, $tipoServico, $sigla, $prioridade, $gram, $gramAtendimento, $dataExecucao, $dataProgramada, $dataAbertura){

       if (is_null($q))
       {
         $q = Doctrine_Query::create()
              ->from('Controle j');
       }

       $alias = $q->getRootAlias();
       $where_condition = "";

     //Campo ID
       if(!empty($id)){
		$where_condition .= $alias.".id = ".$id; 
	   }	
		 
     //Campo Status
	if(!empty($status)){
		if(!empty($where_condition)){
			$where_condition .= " and ".$alias.".status ='".$status."'"; 
		}else{
			$where_condition .= $alias.".status ='".$status."'"; 	
		}
	}   
		
    //Campo Estado
      if(gettype($estado) == "string"){
        if(!empty($where_condition)){
          $where_condition .= " and ".$alias.".estado ='".$estado."'"; 
        }else{
          $where_condition .= $alias.".estado ='".$estado."'"; 
        }
      }
      else{
        if(!empty($where_condition)){
          $where_condition .= " and (".$alias.".estado ='".$estado[0]."'"; 
        }else{
          $where_condition .= "(".$alias.".estado ='".$estado[0]."'"; 
        }        

        for ($i=1; $i < count($estado); $i++) { 
            $where_condition .= " or ".$alias.".estado ='".$estado[$i]."'"; 
        }

        $where_condition .= ")";
      }
		
    //Campo Tipo de Servico
		  if(!empty($tipoServico)){
			  if(!empty($where_condition)){
				  $where_condition .= " and ".$alias.".tipo_de_servico ='".$tipoServico."'"; 
			  }else{
				  $where_condition .=  $alias.".tipo_de_servico ='".$tipoServico."'"; 
			  }
		  }
		
    //Campo Sigla
		  if(!empty($sigla)){
			  if(!empty($where_condition)){
				  $where_condition .= " and ".$alias.".sigla_da_estacao ='".$sigla."'"; 
			  }else{
			  	$where_condition .= $alias.".sigla_da_estacao ='".$sigla."'"; 
			  }
		  }
		 
    //Campo Prioridade 
		  if(!empty($prioridade)){
			  if(!empty($where_condition)){
				  $where_condition .= " and ".$alias.".prioridade ='".$prioridade."'"; 
		   	}else{
				  $where_condition .= $alias.".prioridade ='".$prioridade."'"; 	
			  }
		  }

    //Campo GRAM
     if(!empty($gram)){
      if(gettype($gram) == "string"){
        if(!empty($where_condition)){
          $where_condition .= " and ".$alias.".gram ='".$gram."'"; 
        }else{
          $where_condition .= $alias.".gram ='".$gram."'"; 
        }
      }
      else{
        if(!empty($where_condition)){
          $where_condition .= " and (".$alias.".gram ='".$gram[0]."'"; 
        }else{
          $where_condition .= "(".$alias.".gram ='".$gram[0]."'"; 
        }        

        for ($i=1; $i < count($gram); $i++) { 
            $where_condition .= " or ".$alias.".gram ='".$gram[$i]."'"; 
        }

        $where_condition .= ")";
      }
     } 

    //Campo GRAM de atendimento
     if(!empty($gramAtendimento)){
      if(gettype($gramAtendimento) == "string"){
        if(!empty($where_condition)){
          $where_condition .= " and ".$alias.".gram_atendimento ='".$gramAtendimento."'"; 
        }else{
          $where_condition .= $alias.".gram_atendimento ='".$gramAtendimento."'"; 
        }
      }
      else{
        if(!empty($where_condition)){
          $where_condition .= " and (".$alias.".gram_atendimento ='".$gramAtendimento[0]."'"; 
        }else{
          $where_condition .= "(".$alias.".gram_atendimento ='".$gramAtendimento[0]."'"; 
        }        

        for ($i=1; $i < count($gramAtendimento); $i++) { 
            $where_condition .= " or ".$alias.".gram_atendimento ='".$gramAtendimento[$i]."'"; 
        }

        $where_condition .= ")";
      }
     } 
		
    //Campo Data de Execucao
		  if(!empty($dataExecucao)){
			  if(!empty($where_condition)){
			  	//$where_condition .= " and ".$alias.".data_de_execucao ='".$dataExecucao."'"; 
				
				 $where_condition .= " and ".$alias.".data_de_execucao BETWEEN '".$dataExecucao." 00:00:00' AND '".$dataExecucao." 23:59:59'"; 
			  }else{
				  //$where_condition .= $alias.".data_de_execucao ='".$dataExecucao."'"; 
				  
				  $where_condition .= $alias.".data_de_execucao BETWEEN '".$dataExecucao." 00:00:00' AND '".$dataExecucao." 23:59:59'";
			  }
		  }
		
    //Campo Data Programada
		  if(!empty($dataProgramada)){
			  if(!empty($where_condition)){
				  //$where_condition .= " and ".$alias.".data_programada ='".$dataProgramada."'"; 
				  
				  $where_condition .= " and ".$alias.".data_programada BETWEEN '".$dataProgramada." 00:00:00' AND '".$dataProgramada." 23:59:59'"; 
				  
			  }else{
				  //$where_condition .= $alias.".data_programada ='".$dataProgramada."'"; 
				  
				  $where_condition .= $alias.".data_programada BETWEEN '".$dataProgramada." 00:00:00' AND '".$dataProgramada." 23:59:59'"; 
			  }
	  	}
		
    //Campo Data Abertura
		  if(!empty($dataAbertura)){
			  if(!empty($where_condition)){
				  $where_condition .= " and ".$alias.".created_at BETWEEN '".$dataAbertura." 00:00:00' AND '".$dataAbertura." 23:59:59'"; 
			  }else{
				  $where_condition .= $alias.".created_at BETWEEN '".$dataAbertura." 00:00:00' AND '".$dataAbertura." 23:59:59'"; 
				  
			  }
		  }
		 
		  if(isset($where_condition) && $where_condition != '') {    
        $q->andWhere($where_condition);
      }    

      return $q; 
		 
	}

	
	public function getQuantidadeChamadosPorStatus(Doctrine_Query $q = null, $status, $uf, $gram, $contrato, $grupo)
   {
    return $this->addCountStatus($q, $status, $uf, $gram, $contrato, $grupo)->execute(array(), Doctrine_Core::HYDRATE_NONE);
   }
   

   /*
    * Query para recuperar chamados de acordo com o status
    */
   public function addCountStatus(Doctrine_Query $q = null, $status, $uf, $gram, $contrato, $grupo)
   {
     if (is_null($q))
     {
         $q = Doctrine_Query::create()
         ->select('COUNT(j.id)')
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();

    //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';
         }

         $q->andWhere($aux);

       }

     //gram
       if(count($gram)>0){
         if($grupo->getName() == "Fornecedor"){
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }
         } 
         else{
           $aux1 = $alias.'.gram = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram = "'.$gram[$x]->getName().'"';
           }
         }  

         $q->andWhere($aux1);
       }

      //contrato
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"';
         }

         $q->andWhere($aux2);

       }

     $q->andWhere($alias.'.status = ?', $status);

      return $q;
   }


   /*
    * Query para recuperar chamados
    */
   public function addControleWebServiceQuery(Doctrine_Query $q = null, $uf, $gram, $contrato)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();

     //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';  
         } 

         $q->andWhere($aux);

       }

     //gram
       if(count($gram)>0){
         
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }

         $q->andWhere($aux1);
       }

     //contrato 
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"'; 
         }

         $q->andWhere($aux2);

       }
     
      return $q;
   }


   /*
    * Query para recuperar chamados de acordo com o status
    */
   public function addControleStatusWebServiceQuery(Doctrine_Query $q = null, $status, $uf, $gram, $contrato)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Controle j');
     }

     $alias = $q->getRootAlias();

    //uf
       if(count($uf)>0){
         $aux = $alias.'.estado = "'.$uf[0]->getName().'"';

         for($x = 1; $x < count($uf); $x++){
           $aux = $aux." OR ".$alias.'.estado = "'.$uf[$x]->getName().'"';
         }

         $q->andWhere($aux);

       }

     //gram
       if(count($gram)>0){
           $aux1 = $alias.'.gram_atendimento = "'.$gram[0]->getName().'"';
        
           for($x = 1; $x < count($gram); $x++){
             $aux1 = $aux1." OR ".$alias.'.gram_atendimento = "'.$gram[$x]->getName().'"';
           }
      
           $q->andWhere($aux1);
       }

      //contrato
       if(count($contrato)>0){
         //$q->innerJoin($alias.'.chamado a');
         $aux2 = $alias.'.contrato = "'.$contrato[0]->getName().'"';

         for($x = 0; $x < count($contrato); $x++){
            $aux2 = $aux2." OR ".$alias.'.contrato = "'.$contrato[$x]->getName().'"';
         }

         $q->andWhere($aux2);

       }

     $q->andWhere($alias.'.status = ?', $status);

      return $q;
   }
	
}

