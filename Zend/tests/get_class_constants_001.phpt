--TEST--
get_class_constants(): Simple test
--FILE--
<?php

class X {
    public const A = 1;
    public const B = '2';
    public const C = 3.2;
}

class Y extends X {
    public const D = false;
    public const E = [1,2,3];
    public const F = null;
}


var_dump(get_class_constants('X'));
var_dump(get_class_constants('Y'));

?>
--EXPECT--
array(3) {
  ["A"]=>
  int(1)
  ["B"]=>
  string(1) "2"
  ["C"]=>
  float(3.2)
}
array(6) {
  ["D"]=>
  bool(false)
  ["E"]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
  ["F"]=>
  NULL
  ["A"]=>
  int(1)
  ["B"]=>
  string(1) "2"
  ["C"]=>
  float(3.2)
}
