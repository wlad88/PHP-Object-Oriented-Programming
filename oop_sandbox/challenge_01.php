<<?php

class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description = 'Used bicycle';
  var $weight_kg = 0.0;

  function name() {
    return $this->brand . " " . $this->model . " (" . $this->year ")";
  }
}

?>
