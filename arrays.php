<?php

// // Associative Array 

// $students = [
//     ['Name' => 'ali', 'Email' => 'ali@gmail.com', 'age' => 20],
//     ['Name' => 'zaid', 'Email' => 'zaid@gmail.com', 'age' => 19],
//     ['Name' => 'faizan', 'Email' => 'faizan@gmail.com', 'age' => 18],
//     ['Name' => 'raheel', 'Email' => 'raheel@gmail.com', 'age' => 20],
// ];



// foreach($students as $value){
//      $value['Name'] . '<br>';
//     echo $value['Email'] . '<br>';
//     echo $value['age'] . '<br>';
// }

// foreach($students as $value){
//     foreach($value as $key => $data){

//     }
// }


// Associative Array

// $student = ['Name' => 'ali', 'Email' => 'ali@email.com', 'Password' => 'ali123', 'age' => 20];

// // echo $student;
// echo $student['Email'] . $student['age'];

// echo '<pre>';
// var_dump($student);
// print_r($student);
// echo '</pre>';

// foreach($student as $value){
//     echo $value . '<br>';
// }


// Multidimensional
// Index array

// $courses = [
//     ['HTML', 'CSS', 'JS', 'Bootstrap', 'SEO'],
//     ['XML', 'JSON', 'AdvJs', 'MYSQL', 'PHP'],
//     ['SQL Server', 'C#', 'dot Net', 'Angular', 'TypeScript'],
// ];

// // echo "<pre>";
// // print_r($courses);
// // echo "</pre>";
// // echo $courses[1][3] . $courses[2][1];

// // foreach($courses as $data){
// //     echo $data[0],'<br>';
// //     echo $data[1],'<br>';
// //     echo $data[2],'<br>';
// //     echo $data[3],'<br>';
// // }

//  foreach($courses as $data){
//      foreach($data as $value){
//          echo $value,'<br>';
//    }
// }




// Associative Array 
$students = [
    ['Name' => 'ali', 'Email' => 'ali@gmail.com', 'age' => 20],
    ['Name' => 'zaid', 'Email' => 'zaid@gmail.com', 'age' => 19],
    ['Name' => 'faizan', 'Email' => 'faizan@gmail.com', 'age' => 18],
    ['Name' => 'raheel', 'Email' => 'raheel@gmail.com', 'age' => 20],
];
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>

    <?php foreach($students as $value){ ?>
        <tr>
            <td><?php echo $value['Name']; ?></td>
            <td><?php echo $value['Email']; ?></td>
            <td><?php echo $value['age']; ?></td>
        </tr>
    <?php } ?>

</table>
