<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E15 Project 1</title>
    <style>
    body {
        text-align: center;
    }

    .container {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        padding-left: 2rem;
        padding-right: 2rem;
    }

    .form {
        display: grid;
        grid-row-gap: 1rem;
        grid-template-columns: 1fr auto;
        grid-template-rows: auto auto auto;
        grid-template-areas:
            "title title"
            "label label"
            "input button";
    }

    .form__title {
        grid-area: title;
    }

    .form__label {
        grid-area: label;
    }

    .form__input {
        grid-area: input;
    }

    .form__button {
        grid-area: button;
    }

    .results {
        border: 1px solid black;
        text-align: center;
        padding: 1rem;
        margin-top: 2rem;
    }

    dd {
        margin: 0;
        margin-bottom: 1rem;
    }
    </style>
</head>

<body>
    <form method="GET" action="process.php" class="container form">
        <h1 class="form__title">String Processor - e15 Project 1</h1>

        <label for="answer" class="form__label">Enter a string</label>
        <input id="answer" name="answer" class="form__input" type="text" />

        <button type="submit" class="form__button">Process</button>
    </form>
    <?php
    if ($answer) {
    ?>
    <div class="container results">
        <h2>Results</h2>
        <dl>
            <dt>
                <strong>

                    String
                </strong>
            </dt>
            <dd>
                <?php echo $answer; ?>
            </dd>
            <dt>
                <strong>
                    Is palindrome?
                </strong>
            </dt>
            <dd>
                <?php echo $palindrome; ?>
            </dd>
            <dt>
                <strong>
                    Vowel count
                </strong>
            </dt>
            <dd>
                <?php echo $vowel_count; ?>
            </dd>
        </dl>
    </div>
    <?php
    }
    ?>
</body>

</html>