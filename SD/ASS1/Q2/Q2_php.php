<!DOCTYPE html>
<html lang="en">

<head>
    <link rel= "stylesheet" href="Q2_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label style="color: white;" for="a">Enter A:</label>
        <input type="number" id="a" name="a" required>

        <label style="color: white;" for="b">Enter B:</label>
        <input type="number" id="b" name="b" required>

        <label style="color: white;" for="c">Enter C:</label>
        <input type="number" id="c" name="c" required>

        <button type="submit">Generate Table</button>

    </form> -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-container">
            <div class="icon">
                <img src="calculator.png" alt="math icon">
            </div>
            <div class="form-fields">
                <label style="color: white;" for="a">Insert A:</label>
                <input type="number" id="a" name="a" required>

                <label style="color: white;" for="b">Insert B:</label>
                <input type="number" id="b" name="b" required>

                <label style="color: white;" for="c">Insert C:</label>
                <input type="number" id="c" name="c" required>

                <button type="submit">Generate Table</button>
            </div>
        </div>
        
    </form>
    <br>

    <div id="tableContainer">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            generateTable();
        }

        function generateTable() {
            $a = intval($_POST['a']);
            $b = intval($_POST['b']);
            $c = intval($_POST['c']);
            echo '<br>';
            echo '<table>';
            echo '<tr><th>Number</th><th> Co Prime with ' . $c . '</th></tr>';

            for ($i = $a; $i <= $b; $i++) {
                $isCoprime = areCoprime($i, $c) ? 'Yes' : 'No';
                $class = $isCoprime === 'No' ? 'no-answer' : ($isCoprime === 'Yes' ? 'yes-answer' : ''); 
                // echo '<tr><td>' . $i . '</td><td>' . $isCoprime . '</td></tr>';
                echo '<tr><td class="' . $class . '">' . $i . '</td><td>' . $isCoprime . '</td></tr>';
            }

            echo '</table>';
        }

        function areCoprime($x, $y) {
            return gcd($x, $y) === 1;
        }

        function gcd($a, $b) {
            return $b === 0 ? $a : gcd($b, $a % $b);
        }
        ?>
    </div>


</body>

</html>