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

     <link rel="stylesheet" href="/css/global.css">

</head>

    <body>

        <?php

        $date =  strtotime(date(" jS F "));
        $bingo = strtotime("26th April");


         ?>

        <section class="queston">

            <h5><?php echo date(" jS F "); ?></h5>

            <h1>Is it Con's Birthday Today?</h1>

        </section>


        <section class="answer">

            <?php if ($date === $bingo): ?>

                <h2 class="no">NO</h2>

            <?php else: ?>

                <h2 class="yes">YES</h2>

        </section>

        <?php endif ?>

            <script>
              //asynchronously load typekit fonts
              (function(d) {
                var config = {
                  kitId: 'jar3opr',
                  scriptTimeout: 3000,
                  async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
              })(document);
            </script>

    </body>
</html>
