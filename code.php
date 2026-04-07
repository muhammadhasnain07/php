<?php
session_start();
include 'connection.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];

   $query = mysqli_query($con, "SELECT Email FROM register WHERE Email = '$email' ");

   if(mysqli_num_rows($query) > 0 ){
    
      echo "<script>
         alert('Email id already exist')
         location.assign('register.php')
         </script>";

   }else{

     $insert =    mysqli_query($con, "INSERT into register(Name, Email, Password, Address)VALUES
     ('$name', '$email', '$pass','$address')");

     if($insert){
         echo "<script>
         alert('Data inserted successfully')
         location.assign('register.php')
         </script>";

        header('location: fetch.php');
     }

   }
  
}
// Role base login system  
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];

        $query = mysqli_query($con, "SELECT  * from register WHERE Email = '$email' AND Password = '$pass' ");

        if(mysqli_num_rows($query) == 1){
            
           $data = mysqli_fetch_assoc($query);

           if($data['role'] == 'admin'){

           $_SESSION['admin_id'] = $data['id'];
           $_SESSION['admin_name'] = $data['Name']; 


            echo "<script>
                alert('welcome to admin Panel');
                location.assign('admin_panel/public.php?index')
            </script>";

           }else{

            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_name'] = $data['Name'];

                echo "<script>
                alert('welcome to website');
                location.assign('index.php')
            </script>";
           }
        }
        else{
              echo "<script>
                alert('incorrect email id or password');
                location.assign('login.php')
            </script>";
        }
}
?>

<?php
include 'connection.php';

// INSERT CATEGORY
if(isset($_POST['category-btn'])){

    $name = $_POST['name'];

    $image = $_FILES['images']['name'];
    $tmp_name = $_FILES['images']['tmp_name'];

    $folder = "./images/".$image;

    if(move_uploaded_file($tmp_name, $folder)){

        $query = "INSERT INTO add_category (cat_name, cat_images) VALUES ('$name','$folder')";
    mysqli_query($con, $query);
    
    if($query){
      echo "<script>alert('Category added successfully'); location.assign('admin_panel/public.php?category');</script>";
    }
    }
    else{
        echo "<script>alert('Category not inserted'); location.assign('admin_panel/public.php?category');</script>";
    }

}

// DELETE CATEGORY
if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $delete = "DELETE FROM add_category WHERE cat_id = '$id'";
    mysqli_query($con, $delete);

    echo "<script>alert('Category deleted successfully'); location.assign('admin_panel/public.php?category');</script>";
}

// add product 
if(isset($_POST['add-pro'])){

        $p_name = $_POST['p-name'];
        $p_descript = $_POST['p-descript'];
        $p_price = $_POST['p-price'];
        $p_qnty = $_POST['p-qnty'];
        $cat_id = $_POST['cat-id'];

        $image_name = $_FILES['p-image']['name'];
        $image_size = $_FILES['p-image']['size'];
        $tmp_name = $_FILES['p-image']['tmp_name'];
        $image_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $destination = './images/'.$image_name;

        if($image_size <= 5000000){

        if($image_type == 'jpeg' || $image_type  == 'jpg' || $image_type == 'png'){

            if(move_uploaded_file($tmp_name, $destination)){

            $add_product = mysqli_query($con, "INSERT INTO add_product(p_name, p_description,p_price, p_qnty, category_id,p_image) VALUES('$p_name', '$p_descript', '$p_price', '$p_qnty', '$cat_id', '$image_name')");

            if($add_product){

             echo "<script>
    alert('product inserted successfully'); 
    location.assign('admin_panel/public.php?product');
    </script>";
            }

            }else{
                echo "<script>
    alert('product not inserted'); 
    location.assign('admin_panel/public.php?product');
    </script>";
            }

        }else{
                    
    echo "<script>
    alert('file format not supported'); 
    location.assign('admin_panel/public.php?product');
    </script>";
        }

        }else{     
    echo "<script>
    alert('file size not supported'); 
    location.assign('admin_panel/public.php?product');
    </script>";

        }
}



?>




