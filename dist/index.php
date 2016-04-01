<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Is it Con's Birthday?</title>

    <meta name="description" content="For years, Real Science has pondered the question 'Is it Con Cremin's birthday?', now Computer Science has the answer.">
    <meta name="author" content="DAn Devine">


    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="/css/global.min.css">

     <script src="https://use.typekit.net/jar3opr.js"></script>
     <script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>

    <body>

        <?php

        $date =  strtotime(date(" jS F "));
        $bingo = strtotime("26th April");


         ?>

        <section class="question">

            <h5><?php echo date(" jS F "); ?></h5>

            <h1 class="animated bounceIn">Is it Con's Birthday Today?</h1>

        </section>


        <section class="answer">

            <?php if ($date === $bingo): ?>

                <h2 class="no">NO</h2>

            <?php else: ?>

                <h2 class="yes">YES</h2>

        </section>

        <?php endif ?>

            <script src="/js/production.min.js"></script>

    </body>
</html>
