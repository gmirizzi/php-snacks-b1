<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>

<body>
    <!-- SNACK 1 -->
    <?php
    //Creato array contentente tutte le partite della giornata
    $arrPartite = [
        [
            'teamCasa' => [
                'nome' => "Olimpia Milano",
                'punti' => 55
            ],
            'teamOspite' => [
                'nome' => 'Cantù',
                'punti' => 60
            ]
        ],
        [
            'teamCasa' => [
                'nome' => "Inter",
                'punti' => 56
            ],
            'teamOspite' => [
                'nome' => 'Milan',
                'punti' => 70
            ]
        ],
        [
            'teamCasa' => [
                'nome' => "Roma",
                'punti' => 78
            ],
            'teamOspite' => [
                'nome' => 'Lazio',
                'punti' => 90
            ]
        ],
        [
            'teamCasa' => [
                'nome' => "Fiorentina",
                'punti' => 25
            ],
            'teamOspite' => [
                'nome' => 'Empoli',
                'punti' => 26
            ]
        ],
        [
            'teamCasa' => [
                'nome' => "Venezia",
                'punti' => 51
            ],
            'teamOspite' => [
                'nome' => 'Verona',
                'punti' => 90
            ]
        ],
        [
            'teamCasa' => [
                'nome' => "Ancona",
                'punti' => 44
            ],
            'teamOspite' => [
                'nome' => 'Bari',
                'punti' => 64
            ]
        ],
        [
            'teamCasa' => [
                'nome' => "Andria",
                'punti' => 55
            ],
            'teamOspite' => [
                'nome' => 'Bisceglie',
                'punti' => 61
            ]
        ],
    ];
    for ($i = 0; $i < count($arrPartite); $i++) { ?>
        <div><?= "{$arrPartite[$i]['teamCasa']['nome']} - {$arrPartite[$i]['teamOspite']['nome']} | {$arrPartite[$i]['teamCasa']['punti']} - {$arrPartite[$i]['teamOspite']['punti']}" ?></div>
    <?php
    };

    ?>

</body>

</html>