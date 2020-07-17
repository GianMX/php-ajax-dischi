<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi-2</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="logo">
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <ul class="container-cd"></ul>
      </div>

      <!-- Script Handlebars -->
    <script id="cd-template" type="text/x-handlebars-template">
      <li>
        <img src="{{{poster}}}" alt="poster">
        <h3>{{title}}</h3>
        <p>{{author}}</p>
        <p>{{year}}</p>
      </li>
    </script>
    <!-- Script JS -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
