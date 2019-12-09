<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>

  <!-- reboot CSS (from Bootstrap) -->
  <link rel="stylesheet" href="css\lib\bootstrap-reboot.min.css">

  <!-- fontawesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <!-- personal CSS -->
  <link rel="stylesheet" href="css/master.css">

  <!-- PHP -->
  <?php
  include "vars.php";
  include "functions.php";
  ?>
  <!-- /PHP -->

</head>

<body>

  <!-- main -->
  <main>
    <ul>
      <?php
        foreach ($FAQ as $elem) printFAQElem($elem);
      ?>
    </ul>
  </main>
  <!-- /main -->

  <!-- templates -->
  <script id="my-template" type="text/x-handlebars-template"></script>
  <!-- /templates -->

  <!-- handlebars -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.4.2/handlebars.min.js"></script>
</body>

</html>