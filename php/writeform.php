<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - schrijf blog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_write.css">
    
    <link rel="stylesheet" href="../css/texteditor/richtext.scss">
    <link rel="stylesheet" href="../css/texteditor/richtext.min.css">
    <link rel="stylesheet" href="../css/texteditor/site.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.richtext.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900|Reenie+Beanie&display=swap" rel="stylesheet">

</head>
<body>
    <div class="header">
        <a href="#"><p class="knop">Log in</p></a>
        <a href="#"><h3 class="titel">Blog</h3></a>
        <a href="#"><p class="knop">Register</p></a>
    </div>

   <!-- <form id="form" action="" method="post">
        <input type="text" name="title" id="title" placeholder="Titel">
        <textarea id="php_post_text content" name="php_post_text" placeholder="blog Description" class="form-control " style="display:none;"></textarea>
        <input type="text" name="content" id="content" placeholder="Schrijf blog">
        <input type="file" name="image" id="imageupload">
        <input type="submit" value="Plaats blog">
    </form> 
-->
    <form class="" action='connect.php' method="post" >
        <input type="text" name="title" id="title" placeholder="Titel">

        <textarea id="php_post_text" name="php_post_text" placeholder="blog Description" class="form-control " style="display:none;"> </textarea>
    
        <textarea id ="y" class="form-control content" name="content">  </textarea>
        <label for="image">Upload de afbeelding url </label>
        <input type="url" name="imgurl" id="imgurl">

        <input type="submit"  value="Maak blog" class="btn btn-info " name="save_text" onclick="$('#php_post_text').val($('.content').val());">

    </form>
    <script>
        $(document).ready(function(){
         $('.content').richText();
        });
    </script>

    <?php
    include 'writeblog.php';
    ?>
    
</body>
</html>