<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
  OOP consists of classes that can hold "properties" and "methods". 
  Objects can be created from classes.
*/

class User {
    // properties are attributes that belongs to a class

    //acess modifiers: public, private, protected
    //public - can be acessed from anywhere
    //private - can only be acessed form inside the class
    //protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    //a constructor is a method that runs when an objetct is created
    public function __construct($name, $email, $password, $title) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->title = $title;
    }
   

    //method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

//instatiate a user object
$user1 = new User('Rodrigo', 'digolima@gmail.com', '343434', 'Developer');
$user2 = new User('Paulo', 'pauloyuo@email.com', 'ioi900' ,'Software Engineer');

/* echo $user1->email;
echo $user2->name; */

//inheritence

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password, $title);
        $this->title = $title;
    }

    public function get_title() {
       return $this->title;
    }
}

$employee1 = new Employee('Margareth', 'mfuoyo@gmail.com', '1wer45', 'Backtend Developer');

echo $employee1->get_title();

/* $user1->set_name('Rodrigo');
$user2->set_name('Paulo');

echo $user1->get_name();
echo $user2->get_name(); */