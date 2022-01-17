<!DOCTYPE html>
<html>
<head>
<title>Web GLTF Viewer</title>
<meta charset="utf-8" />
</head>
<body>
<style type="text/css">
    .centered {
        position: fixed; /* or absolute */
        top: 25%;
        left: 37%;
        outline: 2px solid #000; /* Чёрная рамка */
        border-radius: 10px; /* Радиус скругления */
        width: 390px;
        height:150px;
    }
    .h-centered {
        margin-left: 5%;
    }
    .in-centered {
        margin-left: 5%;
    }
    .b-centered {
        margin-left: 35%;
    }
</style>
<?php
if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
{
    $name = "upload/" . $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
    echo "<form id=\"foobar\" action =\"viewmodel.php?zipfile=" . $name . "\" method=\"post\"></form>
        <script>
         setTimeout(function () {
          document.getElementById('foobar').submit();
        }, 0);
        </script>";
}
?>
<div class="centered">
  <h2 class="h-centered">Загрузите архив с GLTF сценой</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="in-centered">Выберите файл: <input type="file" name="filename" size="10" /><br /><br /></div>
    <input class="b-centered" type="submit" value="Загрузить" />
  </form>  
</div>
</body>
</html>