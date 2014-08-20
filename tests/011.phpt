--TEST--
Check for phdfs copy function
--SKIPIF--
<?php if (!extension_loaded("phdfs")) print "skip"; ?>
--FILE--
<?php

try {
    $obj = new phdfs("127.0.0.1","9000");
    $obj->connect();
    $log = $obj->copy('/test.txt','/test1.txt');
} catch (Exception $ex) {
    var_dump($ex->getMessage());
}
?>
--EXPECT--
Environment variable CLASSPATH not set!
string(27) " Failed to hdfs connection "
