<?php

  class User {

    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function full_Name() {
      return $this->first_name . " " . $this->last_name;
    }
  }

  class Customer extends User {

    var $city;
    var $state;
    var $country;

    function location() {
      return $this->city . ", " . $this->state . ", " . $this->country;
    }

  }

  class AdminUser extends User {

    var $is_admin = true;

    function full_Name() {
      return $this->first_name . " " . $this->last_name . " (Admin)";

  }

  $u = new User;
  $u->first_name = 'Jerry';
  $u->last_name = 'Seinfeld';
  $u->username = 'jseinfeld';

  $c = new Customer;
  $c->first_name = 'George';
  $c->last_name = 'Constanza';
  $c->username = 'gconstanza';
  $c->city = 'New York';
  $c->state = 'New York';
  $c->country = 'United States';

  $a = new AdminUser;
  $a->first_name = 'John';
  $a->last_name = 'Doe';
  $a->username = 'jdoe';

  echo $u->full_Name() . "<br />";
  echo $c->full_Name() . "<br />";
  //echo $a->full_Name() . "<br />";

  echo $c->location() . "<br />";

  echo get_parent_class($u) . "<br />";
  echo get_parent_class($c) . "<br />";

  if (is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of User.<br />";
  }

  $parents = class_parents($c);
  echo implode(', ', $parents) . "<br />";

?>
