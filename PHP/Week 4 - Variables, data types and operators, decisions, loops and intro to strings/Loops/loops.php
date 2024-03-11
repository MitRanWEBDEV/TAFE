<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>

<body>
    <h1>Loops in PHP</h1>
    <article>
        <h2>Loops</h2>
        <p>A loop lets you run the same seciton of code over and over again until a specific condition is met.</p>
        <br>
        <p>There are 4 types of loops in PHP</p>
        <ul>
            <li>While</li>
            <li>Do...While</li>
            <li>For</li>
            <li>Foreach - we will look at this one later</li>
        </ul>
    </article>
    <article>
        <h2>While loop</h2>
        <p>The while loop is used to execute a block of code as long as the specified condition is true.</p>
        <p>Example</p>
        <p>
            <?php
            $loopCounter = 1;
            while ($loopCounter <= 10) {
                echo "The number is: $loopCounter <br>";
                $loopCounter++;
            }
            echo "The end of the loop and the loop counter is = $loopCounter <br>";
            ?>
        <p>The expression inside the parentheses is tested; if it evaluates to true, the code block inside the braces is executed. If it is evaluyated to false, the loop ends.</p>
    </article>
    <article>
        <h2>Do While loop</h2>
        <p>The do...while loop will always execute the block of code once, it will then repeat the loop as long as the specified condition is true.</p>
        <p>The do...while loop is similar to the While loop. The main difference is that with a do while loop the condition is checked at the end of the loop rather than at the start. So if the condition is checked and is evaluated to false, it will execute the loop at least once.</p>
        <p>Example</p>
        <p>
            <?php
            $loopCounter = 11;
            do {
                echo "$loopcounter <br>";
                $loopCounter++;
            } while ($loopCounter <= 10);

            echo "The end of the loop and the loop counter is = $loopCounter <br>";
            ?>
        </p>
        <p>In the above code the loop will execute once then the condition will be checked and the loop will end</p>
    </article>
    <article>
        <h2>For Loop</h2>
        <p>Example</p>
        <p>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "The number is: $i <br>";
            }
            echo "The end of the loop and the loop counter is = $i <br>"
            ?>
        </p>
        <dl>
            <dt>For</dt>
            <dd> identifies that this will be a for loop</dd>
            <dt>$i=1</dt>
            <dd> a variable called "$i" is created of type integer and initialised to he value 1. This tells the loop where to stard (1)</dd>
            <dt>$i <= 10; </dt>
            <dd> keep looping as long as the variable is equal to or less than 10</dd>
            <dt></dt>
        </dl>
    </article>
</body>

</html>