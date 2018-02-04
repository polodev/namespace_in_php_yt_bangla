# namespace in php    

In order to avoid name collisions between name, function, constants we use namespace. which help use to encapsulate with different grouping despite having same class, functions or constant name. We add namespace top of our php file with `namespace` keyword      

~~~php
namespace Dhaka\Banana;
class Fruit {

  public $name = 'banana';
} 
~~~

Another use of namespace is, using `as` keyword we can make alias of very big name or differentiate same name classes functions.        

~~~php
use Dhaka\Banana\Fruit as Banana;
~~~


### using namespace     

we can directly use any class which is under a namespace by adding full path      

~~~php
$fruit = new Dhaka\Banana\Fruit();
~~~

Or, using `use` statement we just call class or functions   

~~~php
use Dhaka\Banana\Fruit();
$fruit = Fruit()
~~~

### as keyword    

when we have class with same name or we want to get shorter or readable name we use `as` keyword. I mean for 2 purpose we can use `as` keyword.

* To get rid of conflict with same name use

~~~php
use Dhaka\Apple\Fruit;
use Dhaka\Banana\Fruit as Banana;
~~~

* To make a readable or short alias

~~~php
use SomeVeryBigAndCreepyPath\SomeVeryBigAndCreepyPath\SomeVeryBigAndCreepyClass as Bigclass;

~~~















