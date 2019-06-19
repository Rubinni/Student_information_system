<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    html, body {
  height: 100%;
  margin: 0;
}
.wrapper {
  min-height: 100%;

  /* Equal to height of footer */
  /* But also accounting for potential margin-bottom of last child */
  margin-bottom: 50px;
}
.footer,
.push {
  height: 50px;
}</style>
</head>
<body>
<div class="wrapper">

content

<div class="push"></div>
</div>
<footer class="footer"></footer>
</body>
</html>