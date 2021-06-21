<!-- PHP -->
<?php

// var_dump($_GET);

$censored_word = $_GET["censored_word"];
$censored_word_2 = $_GET["censored_word_2"];
$censored_words = [$censored_word,$censored_word_2];

// php code
$title_song = 'Fuori di Testa';

$lyrics =  'Loro non sanno di che parlo<br/>
            Voi siete sporchi fra’ di fango<br/>
            Giallo di siga’ fra le dita<br/>
            Io con la siga’ camminando<br/>
            Scusami ma ci credo tanto<br/>
            Che posso fare questo salto<br/>
            Anche se la strada è in salita<br/>
            Per questo ora mi sto allenando<br/>
            E buonasera signore e signori<br/>
            <br/>
            Fuori gli attori<br/>
            Vi conviene toccarvi i coglioni<br/>
            Vi conviene stare zitti e buoni<br/>
            Qui la gente è strana tipo spacciatori<br/>
            Troppe notti stavo chiuso fuori<br/>
            Mo’ li prendo a calci ‘sti portoni<br/>
            Sguardo in alto tipo scalatori<br/>
            Quindi scusa mamma se sto sempre fuori, ma<br/>
            Sono fuori di testa ma diverso da loro<br/>
            E tu sei fuori di testa ma diversa da loro<br/>
            Siamo fuori di testa ma diversi da loro<br/>
            Siamo fuori di testa ma diversi da loro<br/>
            <br/>
            Io<br/>
            Ho scritto pagine e pagine<br/>
            Ho visto sale poi lacrime<br/>
            Questi uomini in macchina<br/>
            Non scalare le rapide<br/>
            Scritto sopra una lapide<br/>
            In casa mia non c’è Dio<br/>
            Ma se trovi il senso del tempo<br/>
            Risalirai dal tuo oblio<br/>
            E non c’è vento che fermi<br/>
            La naturale potenza<br/>
            Dal punto giusto di vista<br/>
            Del vento senti l’ebrezza<br/>
            Con ali in cera alla schiena<br/>
            Ricercherò quell’altezza<br/>
            Se vuoi fermarmi ritenta<br/>
            Prova a tagliarmi la testa<br/>
            Perché<br/>
            Sono fuori di testa ma diverso da loro<br/>
            E tu sei fuori di testa ma diversa da loro<br/>
            Siamo fuori di testa ma diversi da loro<br/>
            Siamo fuori di testa ma diversi da loro<br/>
            Parla la gente purtroppo<br/>
            Parla non sa di che cazzo parla<br/>
            Tu portami dove sto a galla<br/>
            Che qui mi manca l’aria<br/>
            <br/>
            Parla la gente purtroppo<br/>
            Parla non sa di che cazzo parla<br/>
            Tu portami dove sto a galla<br/>
            Che qui mi manca l’aria<br/>
            Parla la gente purtroppo<br/>
            Parla non sa di che cazzo parla<br/>
            Tu portami dove sto a galla<br/>
            Che qui mi manca l’aria<br/>
            Ma sono fuori di testa ma diverso da loro<br/>
            E tu sei fuori di testa ma diversa da loro<br/>
            Siamo fuori di testa ma diversi da loro<br/>
            Siamo fuori di testa ma diversi da loro<br/>
            Noi siamo diversi da loro';

$number_of_words_text = count(explode(' ', $lyrics));                

// var_dump($lyrics);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | BADWORDS</title>
</head>

<body>

    <h1>The lyrics of the songs</h1>

    <h2><?php echo $title_song;?></h2>

    <p>
        <?php echo $lyrics;?>
    </p>

    <h3>Number of words in the text: <?php echo $number_of_words_text;?></h3>

    <h3>Number of characters in the text: <?php echo mb_strlen($lyrics);?></h3>

    <hr>
    
    <h1>Song lyrics censored</h1>

    <!-- http://localhost:8888/php/php-badwords/?censored_word=cazzo&censored_word_2=coglioni -->
    <p>
        <?php echo str_replace(array($censored_word,$censored_word_2), '<strong style="color : red;">***</strong>', $lyrics);?>
    </p>

    <h3>Number of censored words in the text: <?php echo count($censored_words);?></h3>
    <h3>Censored words: <?php echo $censored_words[0]." ".$censored_words[1];?> </h3>

</body>

</html>