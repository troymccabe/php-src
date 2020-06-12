--TEST--
get_class_constants(): Testing with scope
--FILE--
<?php

class X {
    public const A = 1;
    protected const B = '2';
    private const C = 3.2;

    public static function dumpConstants() {
        var_dump(get_class_constants(static::class));
    }
}

class Y extends X {
    public const D = false;
    protected const E = [1,2,3];
    private const F = null;
}


var_dump(get_class_constants('X'));
var_dump(get_class_constants('Y'));
X::dumpConstants();
Y::dumpConstants();

?>
--EXPECT--
array(1) {
  ["A"]=>
  int(1)
}
array(2) {
  ["D"]=>
  bool(false)
  ["A"]=>
  int(1)
}
array(3) {
  ["A"]=>
  int(1)
  ["B"]=>
  string(1) "2"
  ["C"]=>
  float(3.2)
}
array(5) {
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
}
