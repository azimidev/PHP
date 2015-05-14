<?php
  echo __FILE__ . "<br />";
  echo __LINE__ . "<br />"; // be careful once you include files
  echo dirname(__FILE__) . "<br >"; // before PHP 5.3
  echo __DIR__ . "<br />"; // only PHP 5.3 and after

  echo file_exists(__FILE__) ? 'yes' : 'no';
  echo "<br />";
  echo file_exists(__DIR__ . "/basic.html") ? 'yes' : 'no';
  echo "<br />";
  echo file_exists(__DIR__) ? 'yes' : 'no';
  echo "<br />";

  echo is_file(__DIR__ . "/basic.html") ? 'yes' : 'no';
  echo "<br />";
  echo is_file(__DIR__) ? 'yes' : 'no';
  echo "<br />";

  echo is_dir(__DIR__ . "/basic.html") ? 'yes' : 'no';
  echo "<br />";
  echo is_dir(__DIR__) ? 'yes' : 'no';
  echo "<br />";
  echo is_dir('..') ? 'yes' : 'no';
  echo "<br />";
?>