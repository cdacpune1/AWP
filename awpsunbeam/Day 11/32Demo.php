<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test AJAX</title>
    <script src="jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#btn').click (function(){
                $.ajax({
                    url: '31Demo.php',
                    type: 'GET',
                    contentType: 'application/json',
                    success: function(result){
                        
                        for(i=0; i< result.length; i++) 
                        {
                                alert(result[i].Name);
                        }
                    },
                    error: function(err){

                        debugger;
                    }    
                });
            });
        });
    </script>
</head>
<body>
    <input type="button" value="Click Me" id="btn" name="btn">
</body>
</html>