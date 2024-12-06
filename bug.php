function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'something') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'something', 'b', 'something', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [2] => b [4] => c )

//The problem is that, foreach loop with unset will skip some elements in the array. This is because unset modifies the internal array pointer which is used by the foreach loop to iterate the array.