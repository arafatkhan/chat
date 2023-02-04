<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .untouchable-image {
            pointer-events: none;
            }
    </style>
</head>
<body>
<img src="image/football.jpg" class="untouchable-image">


<script>
const image = document.getElementById('myImage');

function makeImageUntouchable() {
  image.classList.add('untouchable-image');
}

function makeImageTouchable() {
  image.classList.remove('untouchable-image');
}
</script>
</body>
</html>