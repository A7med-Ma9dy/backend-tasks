<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
     <form action="" method="post">

<input type="text" name="firstname" placeholder="First Name" />

<input type="text" name="lastname" placeholder="Last Name" />

<input type="submit" name="submit" />
       
</form> 

    <?php 
if (isset( $_POST['submit'] ) ) {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

// echo $firstname.' '.$lastname;

class Employee{

  public $firstname;
  public $lastname;
  private $empSalary;

  public function __construct($firstname,$lastname){
    $this->firstname = $firstname;
     $this->lastname = $lastname;
  
  }

  public function setSalary($salary){
    $this->empSalary =$salary;
  }

  public function printData(){
    echo 'employee data <br>'.'Your name is ' . $this->lastname .' ' . $this->firstname.'<br>'.'salary: '.$this->empSalary;
  }
  
}

$Ahmad = new Employee($firstname,$lastname);
  $Ahmad->setSalary(3000);
  $Ahmad->printData();
  
}






// Check if the form is submitted
/*
if ( isset( $_POST['submit'] ) ) {

// retrieve the form data by using the element's name attributes value as key

echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>';

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];

// display the results
echo 'Your name is ' . $lastname .' ' . $firstname;

// check if the post method is used to submit the form

if ( filter_has_var( INPUT_POST, 'submit' ) ) {

echo '<h2>form data retrieved by using $_POST variable<h2/>';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

// display the results
// echo 'Your name is ' . $lastname .' ' . $firstname;

  class Employee{
    public $lastname;
    public $firstname;
    private $empSalary;
    
   public  function __construct($lastname,$firstname) {
    $this->lastname = $lastname;
           $this->firstname = $firstname;

  }

   public function setSalary($salary){
                 $this->empSalary = $salary;

    }

   public function printData(){
      echo 'employee data <br>'.'Your name is ' . $this->lastname .' ' . $this->firstname.'<br>'.'salary: '.$this->empSalary;
    }
  }

  $obj = new Employee($lastname,$firstname);
  $obj->setSalary(200);
  $obj->printData();
}

}
  */
 ?> 
    
  </body>
</html>