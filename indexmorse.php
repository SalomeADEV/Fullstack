<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php 

$string = 'salut';
stringToMorse($string);
    function stringToMorse($string){
        $morsetrad = array('A' => '.-',
        'B' => '-...',
        'C' => '-.-.',
        'D' => '-..' ,
        'E' => '.',
        'F' => '..-.',
        'G' => '--.',
        'H' => '....',
        'I' => '..',
        'J' => '.---',
        'K' => '-.-',
        'L' => '.-..',
        'M' => '--',
        'N' => '-.',
        'O' => '---',
        'P' => '.--.',
        'Q' => '--.-',
        'R' => '.-.',
        'S' => '...',
        'T' => '-',
        'U' => '..-',
        'V' => '...-',
        'W' => '.--',
        'X' => '-..-',
        'Y' => '-.--',
        'Z' => '--..',
        '0' => '-----',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',  
    );

    $mottraduit ='';
    
    $i=0;
    
    while($i != strlen($string)){
        $lettre = strtoupper(substr($string,$i,1));
        $mottraduit = $mottraduit.$morsetrad[$lettre];
        echo substr($string,$i,1).'=>'.$morsetrad[$lettre].'<br>';
        $i++;
    };
    echo $mottraduit;
    return ($string);
    };
        

    
    
    ?>
    
</body>
</html>