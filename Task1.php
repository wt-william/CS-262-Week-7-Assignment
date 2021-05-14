Multiple Inheritance is the process where a subclass can be derived from more than one super-class.

Its advantage is that a class can inherit the functionality of more than one base class.
While, its disadvantage is that it can lead to a lot of confusion when two base classes implement a method with the same name.

<?php
  
trait Intro {
  public function introGreeting() {
     echo "Hello";
   }
 }
  
// trait forGeeks
trait nameCall {
  public function name() {
     echo ", Jasper";
   }
 }
  
class Sample {
  use Intro;
  use nameCall;
  public function displayMessage() {
      echo "\n I'm glad to hear that you are doing well";
   } 
}
  
$test = new Sample();
$test->introGreeting();
$test-> name();
$test->displayMessage();
?>
