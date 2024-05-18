<?php

class Book {
 // TODO: Add properties as Private
    private $title = "";
    private $availableCopies = 0;
 
 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
     }


// TODO: Add getTitle method
     public function getTitle(){
        return $this->title;
     }

 // TODO: Add getAvailableCopies method
 
     public function getAvailableCopies(){
        return $this->availableCopies;
     }


 // TODO: Add borrowBook method
     public function borrowBook(){
        if($this->availableCopies > 0){
            $this->availableCopies--;
        } 
     }



 // TODO: Add returnBook method
     public function returnBook(){
        $this->getAvailableCopies++;
     }
 
}


class Member {
 // TODO: Add properties as Private
    private $name = "";


 public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;
     }



 // TODO: Add getName method
 public function getName(){
    return $this->name;
 }
 
 // TODO: Add borrowBook method
 public function borrowBook($bookClass){
    $bookClass->borrowBook();
    return $this->name." Borrows: ".$bookClass->getTitle()."<br>";
 }

 // TODO: Add returnBook method
 public function returnBook($bookClass){
    $bookClass->returnBook();
    return $this->name." Returns:".$bookClass->gerTitle()."<br>";
 }
 
}

$Member1 = new Member("John Doe");
$Member2 = new Member("Jane Smith");
$Book1  = new Book("The Great Gatsby", 5);
$Book2 = new Book("To Kill a Mockingbird", 3);

// Those Mathod are not Print Anything but return member name and book name cause 
// instruction was to Apply the Borrow book method to each member but the result will not be that 
// if you want to print that you should change the return to echo in member class between borrow book and return book Mathod
$Member1->borrowBook($Book1);
$Member2->borrowBook($Book2);

//Printing the Result 
// Available Copies of 'The Great Gatsby': 4
echo "Available Copies of " .$Book1->getTitle().": ". $Book1->getAvailableCopies()."<br>";
echo "Available Copies of " .$Book2->getTitle().": ". $Book2->getAvailableCopies()."<br>";

?>