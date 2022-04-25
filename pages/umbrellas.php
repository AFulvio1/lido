<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Prenota il tuo ombrellone!</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="./static/img//favicon.ico" type="image/x-icon">
      <link rel="icon" href="./static/img//favicon.ico" type="image/x-icon">

      <!-- Stylesheets -->
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap">
      <link rel="stylesheet" href="/static/css/style.css">
      <link rel="stylesheet" href="/static/css/coockie.css" async>
  </head>
<body>

    <h1>PRENOTA IL TUO OMBRELLONE</h1>

    <?php
        include("response.php");
        $newObj = new Table("localhost","postgres","postgres","lido","5432");
        $table = $newObj->getTable("umbrellas");
    ?>

    <table id="umbrellas" class="table" width="100%" cellspacing="0">
        <!--
        <thead>
            <tr>
                <th>Fila</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>G</th>
                <th>H</th>
                <th>I</th>
                <th>J</th>
                <th>K</th>
                <th>L</th>
                <th>M</th>
                <th>N</th>
                <th>O</th>
                <th>P</th>
                <th>Q</th>
                <th>R</th>
                <th>S</th>
                <th>T</th>
            </tr>
        </thead>
        -->
        <tbody>
            <?php foreach($table as $key => $t) :?>
            <tr>
                <!-- <td><?php echo $t['ID'] ?></td>-->
                <td><?php echo $t['ID'] . "1" ?></td>
                <td><?php echo $t['ID'] . "2" ?></td>
                <td><?php echo $t['ID'] . "3" ?></td>
                <td><?php echo $t['ID'] . "4" ?></td>
                <td><?php echo $t['ID'] . "5" ?></td>
                <td><?php echo $t['F'] . "6" ?></td>
                <td><?php echo $t['G'] . "7" ?></td>
                <td><?php echo $t['H'] . "8" ?></td>
                <td><?php echo $t['I'] . "9" ?></td>
                <td><?php echo $t['J'] . "1" ?></td>
                <td><?php echo $t['K'] . "1" ?></td>
                <td><?php echo $t['L'] . "1" ?></td>
                <td><?php echo $t['M'] . "1" ?></td>
                <td><?php echo $t['N'] . "1" ?></td>
                <td><?php echo $t['O'] . "1" ?></td>
                <td><?php echo $t['P'] . "1" ?></td>
                <td><?php echo $t['Q'] . "1" ?></td>
                <td><?php echo $t['R'] . "1" ?></td>
                <td><?php echo $t['S'] . "1" ?></td>
                <td><?php echo $t['T'] . "1" ?></td>
                <!-- <td><div class="btn-group" data-toggle="buttons"><a href="#" target="_blank" class="btn btn-warning btn-xs" rel="noopener">Edit</a><a href="#" target="_blank" class="btn btn-danger btn-xs" rel="noopener">Delete</a><a href="#" target="_blank" class="btn btn-primary btn-xs" rel="noopener">View</a></div></td> -->
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>


    <!-- Bootstrap -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Coockie -->
    <script src="/static/js/coockie.js" async></script>

    <!-- Hamburger -->
    <script>
    $(document).ready(function() {
        $( ".hamburger" ).on('click', function() {
        $(".menu").toggleClass("menu--open");
        });
    });
    </script>

    <!-- Load HTML -->
    <script>
    $(function () {
        $(document).ready(function () {
        $(".load-html").each(function () {
            var container = '#' + $(this).attr('data-container');
            var src = $(this).attr('data-source');
            $(container).load(src);
        });
        });
    });
    </script>
</body>
</html>