<?php

namespace Core\Model;

class Model
{
  public int $id;

  public function __construct(array $data_row= [])
  {
    //si on a des données, on les injecte dans l'objet

    foreach($data_row as $key => $value)
    {
      //si la propriété n'exite pas, on ne l'ajoute pas et passe à la suivante
      if (!property_exists($this, $column)) continue;
      //sinon on injecte la valeur dans la propriété
      $this->$column = $value;
    }
  }
}