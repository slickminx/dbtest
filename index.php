<?php

require('dbc.php');

?>

<!DOCTYPE HTML>
<head>
</head>
<body>
    <form>
        <h1>Database TEST</h1>
        <label id="nameLabel">Name: </label>
        <input type="text" id="name" name="name"/>
        <button type="button" id="submitBtn" value="Submit">Submit</button>
    </form>
    <script src="jquery.js"></script>
    <script>
     $(function() {
        $('#submitBtn').on('click', function(e){
            e.preventDefault();

            var name = $('#name').val();
            
            if($('#name').val() == ''){
                $('#name').css('border-color', 'red');
                $('#nameLabel').css('color', 'red');  
            } else {
                $('#name').css('border-color', 'initial');
                $('#nameLabel').css('color', 'initial'); 
                $.post('form.php', {addname:name})
                 .done(function(data){
                    console.log(data);
                 });
           
            }
        });
     });
    </script>
</body>
</html>