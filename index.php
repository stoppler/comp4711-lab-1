<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //include the student class
        include ('Student.php');
        
        //create an array of students
        $students = array();
        
        //first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //third student (myself)
        $third = new Student();
        $third->surname = "Stoppler";
        $third->first_name = "Ryan";
        $third->add_email('home','ryan@ryan.com');
        $third->add_email('work','rstoppler1@my.bcit.ca');
        $third->add_grade(75);
        $third->add_grade(95);
        $third->add_grade(85);
        $students['r876'] = $third;
        
        //sort students by key
        ksort($students);
        
        //loop through student array and print each students information
        foreach($students as $student){
            echo $student->toString();
        }
        
        ?>
    </body>
</html>
