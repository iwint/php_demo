<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <!-- <div class="w-50 m-5"> -->
    <!-- <form action=" "  method="post">
      <div class="form-group ">
        
        <label for="">Name</label>
        <input type="name" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="">
        
       
       
      </div>
      <div class="form-group ">

        <label for="">Description</label>
        <input type="name" class="form-control" name="desc" id="" aria-describedby="emailHelpId" placeholder="">

       
       
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
      </form> -->
    <!-- </div>
   -->
<div class="w-50 m-5"> 


<?php 
class card{
  private $name;
  private $desc;

  function __construct($name,$desc){
   $this->name = $name;
   $this->desc = $desc;
  }
  function get_name(){
   return $this->name;
  }
  function get_desc(){
   return $this->desc;
  }

} 
 
 
  $Arr=array(new card("Iwin","Web Developer"),new card("Vasee","Web Dev"),new card("Vasee","Web Dev"));
for($i=0;$i< sizeof($Arr);$i++){ ?>
<div class="card text-center">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body"> 
      <h4 class="card-title"><?php echo($Arr[$i]->get_name());
    
      ?></h4>
      <p class="card-text"><?php echo($Arr[$i]->get_desc())
    
      ?></p>
    </div>
  </div>
 <?php }?> 
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>