<!-- PHP -->
<?php

// var_dump($_GET);

$censored_word = $_GET["censored_word"];

// php code
$lyrics =  'Loro non sanno di che parlo
            Voi siete sporchi fra’ di fango
            Giallo di siga’ fra le dita
            Io con la siga’ camminando
            Scusami ma ci credo tanto
            Che posso fare questo salto
            Anche se la strada è in salita
            Per questo ora mi sto allenando
            E buonasera signore e signori

            Fuori gli attori
            Vi conviene toccarvi i coglioni
            Vi conviene stare zitti e buoni
            Qui la gente è strana tipo spacciatori
            Troppe notti stavo chiuso fuori
            Mo’ li prendo a calci ‘sti portoni
            Sguardo in alto tipo scalatori
            Quindi scusa mamma se sto sempre fuori, ma
            Sono fuori di testa ma diverso da loro
            E tu sei fuori di testa ma diversa da loro
            Siamo fuori di testa ma diversi da loro
            Siamo fuori di testa ma diversi da loro

            Io
            Ho scritto pagine e pagine
            Ho visto sale poi lacrime
            Questi uomini in macchina
            Non scalare le rapide
            Scritto sopra una lapide
            In casa mia non c’è Dio
            Ma se trovi il senso del tempo
            Risalirai dal tuo oblio
            E non c’è vento che fermi
            La naturale potenza
            Dal punto giusto di vista
            Del vento senti l’ebrezza
            Con ali in cera alla schiena
            Ricercherò quell’altezza
            Se vuoi fermarmi ritenta
            Prova a tagliarmi la testa
            Perché
            Sono fuori di testa ma diverso da loro
            E tu sei fuori di testa ma diversa da loro
            Siamo fuori di testa ma diversi da loro
            Siamo fuori di testa ma diversi da loro
            Parla la gente purtroppo
            Parla non sa di che cazzo parla
            Tu portami dove sto a galla
            Che qui mi manca l’aria

            Parla la gente purtroppo
            Parla non sa di che cazzo parla
            Tu portami dove sto a galla
            Che qui mi manca l’aria
            Parla la gente purtroppo
            Parla non sa di che cazzo parla
            Tu portami dove sto a galla
            Che qui mi manca l’aria
            Ma sono fuori di testa ma diverso da loro
            E tu sei fuori di testa ma diversa da loro
            Siamo fuori di testa ma diversi da loro
            Siamo fuori di testa ma diversi da loro
            Noi siamo diversi da loro';

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

    <p>
        <?php echo $lyrics;?>
    </p>
    
    <h1>Song lyrics censored</h1>

    <!-- http://localhost:8888/php/php-badwords/?censored_word=cazzo -->
    <p>
        <?php echo str_replace($censored_word, '***', $lyrics);?>
    </p>

    <h4>Censored word: <?php echo $censored_word;?> </h4>

</body>

</html>