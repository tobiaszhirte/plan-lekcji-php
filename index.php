<?php

$plan = [
    "1A" => [
        "Poniedziałek" => [
            [
                "nr" => 1,
                "sala" => "101",
                "nauczyciel" => "Kowalski",
                "przedmiot" => "Matematyka"
            ],
            [
                "nr" => 2,
                "sala" => "102",
                "nauczyciel" => "Nowak",
                "przedmiot" => "Polski"
            ]
        ],
        "Wtorek" => [
            [
                "nr" => 1,
                "sala" => "103",
                "nauczyciel" => "Wiśniewska",
                "przedmiot" => "Biologia"
            ]
        ]
    ],
    "1B" => [
        "Poniedziałek" => [
            [
                "nr" => 1,
                "sala" => "104",
                "nauczyciel" => "Mazur",
                "przedmiot" => "Geografia"
            ]
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Plan lekcji</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 40px;
            font-family: 'Inter', sans-serif;
            background-color: #1e1e1e;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 900px;
            text-align: center;
        }

        h1 {
            font-size: 32px;
            color: #3498db;
            margin-bottom: 40px;
        }

        h2 {
            font-size: 24px;
            color: #ffffff;
            margin-top: 40px;
            margin-bottom: 10px;
            border-left: 4px solid #3498db;
            padding-left: 12px;
            text-align: left;
        }

        .day-title {
            font-size: 18px;
            margin: 20px 0 10px;
            color: #a0c4ff;
            text-align: left;
        }

        table {
            width: 100%;
            margin-bottom: 30px;
            border-collapse: collapse;
            background-color: #2c2c2c;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.4);
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #ffffff;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #252525;
        }

        tr:nth-child(odd) {
            background-color: #2c2c2c;
        }

        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            .container {
                width: 100%;
            }

            table, th, td {
                font-size: 14px;
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 20px;
            }

            .day-title {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Plan lekcji</h1>

        <?php foreach ($plan as $klasa => $dni): ?>
            <h2>Klasa <?= htmlspecialchars($klasa) ?></h2>
            <?php foreach ($dni as $dzien => $lekcje): ?>
                <div class="day-title"><?= htmlspecialchars($dzien) ?></div>
                <table>
                    <tr>
                        <th>Lekcja</th>
                        <th>Sala</th>
                        <th>Nauczyciel</th>
                        <th>Przedmiot</th>
                    </tr>
                    <?php foreach ($lekcje as $lekcja): ?>
                        <tr>
                            <td><?= htmlspecialchars($lekcja['nr']) ?></td>
                            <td><?= htmlspecialchars($lekcja['sala']) ?></td>
                            <td><?= htmlspecialchars($lekcja['nauczyciel']) ?></td>
                            <td><?= htmlspecialchars($lekcja['przedmiot']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
