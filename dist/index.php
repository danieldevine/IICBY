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
</head>

    <body>
        <?php

            $date =  strtotime(date(" jS F "));
            $bingo = strtotime("26th April");

        ?>

    <div class="row">

        <div class="col-12 md-col-12 lg-col-6">
            <section class="question">
                <div class="inner">
                    <h5 class="animated bounceInDown"><?php echo date(" jS F "); ?></h5>
                    <h1 class="animated bounceInUp">Is it Con's Birthday Today?</h1>
                </div>
            </section>
        </div>

        <div class="col-12 md-col-12 lg-col-6">
            <section class="answer">
                <h1 class="wait animated bounceOutUp">?</h1>
                        <div class="inner">
                        <?php if ($date === $bingo): ?>
                            <h1 class="no animated zoomInRight">NO,</h1>
                            <h1 class="no animated zoomInRight">Sorry.</h1>
                        <?php else: ?>
                            <h1 class="yes animated bounceInRight">YES</h1>
                    </div>
                    <img src="/img/ccrem.jpg" alt="its con's birthday, hurray"  title="its Con's Birthday. Hurray!" class="crem animated slideInUp tada"/>
            </section>
        </div>

    </div>

        <?php endif ?>
        <script src="/js/production.min.js"></script>
    </body>
</html>
