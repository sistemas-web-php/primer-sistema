<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    

<p id="parrafo"></p>

<script src="jquery.js"></script>

<script>


$(document).ready(function () {
    $.ajax({
        type: "get",
        url: "ajax.php",
        dataType: "json",
        success: function (res) {
console.log(res);
            for(var i in res){
                alert(i);
            }

            
        }
    });
});

   
    

</script>

</body>
</html>