<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response page
    </title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</head>
<body>
    <center>
        <h1>
            Assignment
        </h1>
    
        <form method="get">
            Enter a number:
            <input type="text" name="number" class="num">
            
            <button class="submit" type="Submit">Get table</button>
            <div>
            </div>
        </form>

    </center>
    <script>    
        $(document).ready(function(){
            $("button").click(function () {

                var numValue = $("input").val();
        
                $.get("ex.php", {number: numValue} , function(data){
                     $("div").html(data);
                
                });
             });
        });
    </script>
    
</body>
</html>