<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Styling</title>
    <!-- Internal Styling -->
   <style>
    *{
        box-sizing: border-box;
    }
    /* wcag reference */

    :root{
        --wh: 10rem;
        --width:var(--widthheigth); /* this is a CSS variable, it can be used to store values that can be reused */
        height:var(--widthheigth);
    }

    
    <?php
     //MARK: Inside Styling
     ?>
     
    .form-container {
        display:flex;
        align-content:center; /* center on X axis */
        justify-content: center; /* center on Y axis */
        /* border: 1px solid black; */
    }
    .form{
        border: 1px dotted black;
        /* margin:20px; //around the Form */
        padding:20px; //inside the Form
    }
    .form-group {
        /* border: 1px solid red; */
        padding: 1rem 0;
        display:flex;
        flex-direction: column; /* stack the elements vertically */
        
    }

    .form-group label{
        margin-bottom:0.5rem;
    }

    .form-input{
        font-size:1rem;
        padding:0.5rem;
        border-radius: 0.5rem;
        border: 1px solid black;
        /* width: 100%; */ /* this will make the input take the full width of the parent element */
        padding-inline:0.5rem; /* padding on the left and right */
        transition: all ease-in-out 1s; /* this will make the input change smoothly when hovered */
        /* transition: all ease-in-out 0.5s; */ /* this will make the input change smoothly when hovered */

    }

    .form-input:hover {
        border: 1px solid purple; /* this will change the border color when the input is focused */
    }

    .submit-btn{
        /* background:blue; */
        display:flex;
    }

    .submit-btn button {
        width: 14rem;
        height: 2rem;
        border-radius: 2rem;
        border-color:none;
        background: linear-gradient(90deg, right, red, blue);

        
    }

    .circle{
        /* --widthheigth: 5rem; */
        /* width:var(--widthheigth); varibles are used to store values that can be reused */
        height:4rem;
width: 4rem;
        /* background:linear-gradient(to right, red, blue); horizontal*/
        /* background:linear-gradient(to bottom, red, blue); vertical */
        background:radial-gradient(circle, yellow, red, blue); /* circle */
        border-radius: 50%; /* makes the div a circle */
    }

   </style>
</head>
<body>
    <h1>Form Styling</h1>

<div class="form-container">
 <form class="form" action="process.php" method="POST" automcomplete="off">
        <div class="form-group">
             <!-- inputs by default are inline elements, so they will be on the same line-->
         <label for="username">
            Username: <input type="text" class="form-input" name="username" id="username"  value="Test" required>
         </label>
        </div>
       <div class="form-group">
<label for="pwd">Password: <input type="password" class="form-input"  value="Test" name="password" id="pwd" required></label>
       </div>
       
        <div class="form-group submit-btn">
 <!-- <input type="number" value="1234" name="number" required> -->
        <button type="submit" name="process">Submit</button> <!-- always use a name for a button in a form -->
        </div>
       

    </form>    
</div>

<div class="circle">

</div>

   
</body>
</html>