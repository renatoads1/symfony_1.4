<?php

class BackendAfiliadoForm extends AfiliadoForm
{
   public function configure()
  {
    unset(
      $this['created_at'], $this['updated_at'], $this['token'], $this['ativado']
    );

    $this->validatorSchema['email'] = new sfValidatorAnd(array(
    $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));
  }
}

