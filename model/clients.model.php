<?php 
function selectClients() {
    return [
        [
            "id" => 1,
            "nom" => "THIAM", 
            "prenom" => "Mouhamet",
            "tel" => "772222210",
            "ad" => "liberte 6",
            "dette" => [
                [
                    "ref" => "D11",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30"
                ]
            ],
            "paie" => [
                [
                    "ref" => "P11",
                    "montant" => 1000,
                    "date" => "2024-11-30"
                ]
            ]
        ],
        [
            "id" => 2,
            "nom" => "NDIAYE", 
            "prenom" => "Aicha",
            "tel" => "785270408",
            "ad" => "almadies",
            "dette" => [
                [
                    "ref" => "D21",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30"
                ]
            ],
            "paie" => [
                [
                    "ref" => "P21",
                    "montant" => 1000,
                    "date" => "2024-11-30"
                ]
            ]
        ],
        [
            "id" => 3,
            "nom" => "THIAM", 
            "prenom" => "Sada",
            "tel" => "772222210",
            "ad" => "liberte 6",
            "dette" => [
                [
                    "ref" => "D31",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30"
                ]
            ],
            "paie" => [
                [
                    "ref" => "P31",
                    "montant" => 1000,
                    "date" => "2024-11-30"
                ]
            ]
        ],
        [
            "id" => 4,
            "nom" => "DIOP", 
            "prenom" => "Fatima",
            "tel" => "785270408",
            "ad" => "almadies",
            "dette" => [
                [
                    "ref" => "D41",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30"
                ],
                [
                    "ref" => "D42",
                    "montant" => 1000,
                    "montantV" => 0,
                    "date" => "2024-11-31"
                ]
            ],
            "paie" => [
                [
                    "ref" => "P41",
                    "montant" => 1000,
                    "date" => "2024-11-30"
                ]
            ]
        ]
    ];
}


function selectDettes(array $clients, int $id): array|null {
    foreach ($clients as $client) {
        if ($client['id'] === $id) {
            return [
                'nom' => $client['nom'] . ' ' . $client['prenom'], // Nom complet
                'dette' => $client['dette'] // Liste des dettes
            ];
        }
    }
    return null;
}

function filtreDettes(array $dettes):array{
    $dette = [
        'paye' => [],
        'impaye' => []
    ];
    foreach ($dettes as $d) {
        if($d['montant'] == $d['montantV']){
            $dette['paye'][] = $d;
        }else{
            $dette['impaye'][] = $d;
        }
    }
    return $dette;
}

?>