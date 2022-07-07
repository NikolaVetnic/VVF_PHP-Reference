<!DOCTYPE html>
<html>

<head>
    <title>Example</title>
</head>

<body>
    <h1>Intro to PHP</h1>

    <!-- basic intro -->
    <?php
    echo "Hi, I'm a <b>PHP script</b>!";
    ?>
    <br />

    <!-- branching -->
    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
        echo 'You are using Google Chrome.';
    }
    ?>
    <br />

    <!-- mixing PHP and HTML -->
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) { ?>
        <p>strpos() must have returned non-false : You are using Internet Explorer </p>
    <?php } else { ?>
        <p>strpos() must have returned false : You are not using Internet Explorer </p>
    <?php } ?>

    <!-- forms -->
    <h3>Input Form</h3>
    <form action="action.php" method="post">
        <p>Your name: <input type="text" name="name" /></p>
        <p>Your age: <input type="text" name="age" /></p>
        <p><input type="submit" /></p>
    </form>

    <!-- string concatenation -->
    <?php
    $str = "WORLD";
    echo "Hello, " . $str . "!<br />";
    ?>

    <!-- accessing global variables in functions, static variables -->
    <?php
    $str = "WORLD";
    function greeting()
    {
        global $str;
        echo "Hello, " . $str . "!<br />";
    }

    define("GREETING", "Welcome to the WORLD!");

    function increment()
    {
        static $cnt = 0;
        $cnt++;
        echo "Counter : " . $cnt . "<br />";
    }

    echo "<h3>Greetings</h3>";
    greeting();

    echo "<h3>Constant</h3>";
    echo GREETING;

    echo "<h3>Counter Incrementation</h3>";
    increment();
    increment();
    increment();
    ?>

    <!-- classes -->
    <h3>Classes Demo</h3>
    <?php
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br />";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
    echo "<br />";
    ?>

    <!-- loops -->
    <h3>Loops</h3>
    <?php
    $cnt = 0;
    while ($cnt < 5) {
        echo "Counter WHILE value : " . $cnt++ . "<br />";
    }

    for ($i = 0; $i < 5; $i++) {
        echo "Counter FOR value : " . $i . "<br />";
    }

    $fruits = array("papaya", "dragon fruit", "ariljska malina");

    foreach ($fruits as $fruit)
        echo "Current FRUIT : " . $fruit . "<br />";
    ?>

    <!-- associative arrays, ie. maps -->
    <h3>Loops</h3>
    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $x_value)
        echo "Pair ( key : " . $x . ", value : " . $x_value . " )<br />";
    ?>
</body>

</html>