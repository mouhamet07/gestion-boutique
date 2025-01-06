<?php 
    date_default_timezone_set('Africa/Dakar');
    $today = date('Y-m-d');
    
    $clients = [
        [
            "id" => 1,
            "nom" => "THIAM", 
            "prenom" => "Mouhamet",
            "tel" => "772222210",
            "ad" => "Dakar, Liberté 6",
            "dette" => [
                [
                    "ref" => "D11",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30",
                    "paie" => [
                        [
                            "ref" => "P11",
                            "montant" => 1000,
                            "date" => "2024-11-30"
                        ]
                    ]
                ]
            ]
        ],
        [
            "id" => 2,
            "nom" => "NDIAYE", 
            "prenom" => "Aicha",
            "tel" => "785270408",
            "ad" => "Dakar, Almadies",
            "dette" => [
                [
                    "ref" => "D21",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30",
                    "paie" => [
                        [
                            "ref" => "P21",
                            "montant" => 500,
                            "date" => "2024-11-30"
                        ],
                        [
                            "ref" => "P22",
                            "montant" => 500,
                            "date" => "2024-11-31"
                        ]
                    ]
                ]
            ]
        ],
        [
            "id" => 3,
            "nom" => "THIAM", 
            "prenom" => "Sada",
            "tel" => "773447573",
            "ad" => "Dakar, Liberté 6",
            "dette" => [
                [
                    "ref" => "D31",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30",
                    "paie" => [
                        [
                            "ref" => "P31",
                            "montant" => 1000,
                            "date" => "2024-11-30"
                        ]
                    ]
                ]
            ]
        ],
        [
            "id" => 4,
            "nom" => "DIOP", 
            "prenom" => "Fatima",
            "tel" => "776553822",
            "ad" => "Dakar, Almadies",
            "dette" => [
                [
                    "ref" => "D41",
                    "montant" => 1000,
                    "montantV" => 1000,
                    "date" => "2024-11-30",
                    "paie" => [
                        [
                            "ref" => "P41",
                            "montant" => 1000,
                            "date" => "2024-11-30"
                        ]
                    ]
                ],
                [
                    "ref" => "D42",
                    "montant" => 1000,
                    "montantV" => 0,
                    "date" => "2024-11-31",
                    "paie" => []
                ]
            ]
        ],
        [
            "id" => 5,
            "nom" => "MARTIN", 
            "prenom" => "Louis",
            "tel" => "772345678",
            "ad" => "Dakar, Plateau",
            "dette" => [
                [
                    "ref" => "D51",
                    "montant" => 1500,
                    "montantV" => 1000,
                    "date" => "2024-12-01",
                    "paie" => [
                        [
                            "ref" => "P51",
                            "montant" => 1000,
                            "date" => "2024-12-01"
                        ]
                    ]
                ]
            ]
        ],
        [
            "id" => 6,
            "nom" => "JONES", 
            "prenom" => "Tanya",
            "tel" => "775123456",
            "ad" => "Dakar, Rufisque",
            "dette" => []
        ],
        [
            "id" => 7,
            "nom" => "KIM", 
            "prenom" => "Jin",
            "tel" => "776987654",
            "ad" => "Dakar, Yoff",
            "dette" => [
                [
                    "ref" => "D71",
                    "montant" => 500,
                    "montantV" => 200,
                    "date" => "2024-12-05",
                    "paie" => [
                        [
                            "ref" => "P71",
                            "montant" => 200,
                            "date" => "2024-12-06"
                        ]
                    ]
                ]
            ]
        ],
        [
            "id" => 8,
            "nom" => "GARCIA", 
            "prenom" => "Carlos",
            "tel" => "779876543",
            "ad" => "Dakar, Mermoz",
            "dette" => [
                [
                    "ref" => "D81",
                    "montant" => 1200,
                    "montantV" => 0,
                    "date" => "2024-12-02",
                    "paie" => []
                ]
            ]
        ],
        [
            "id" => 9,
            "nom" => "PARKER", 
            "prenom" => "Michael",
            "tel" => "777123456",
            "ad" => "Dakar, Ngor",
            "dette" => []
        ],
        [
            "id" => 10,
            "nom" => "LI", 
            "prenom" => "Wei",
            "tel" => "775678901",
            "ad" => "Dakar, Medina",
            "dette" => [
                [
                    "ref" => "D101",
                    "montant" => 2000,
                    "montantV" => 1500,
                    "date" => "2024-12-05",
                    "paie" => [
                        [
                            "ref" => "P101",
                            "montant" => 500,
                            "date" => "2024-12-06"
                        ]
                    ]
                ]
            ]
        ]
    ];
    



    function selectDettes(array $clients, int $id): array|null {
        foreach ($clients as $client) {
            if ($client['id'] === $id) {
                return [
                    'nom' => $client['nom'] . ' ' . $client['prenom'], 
                    'dette' => $client['dette']
                ];
            }
        }
        return null;
    }

    

    function selectPaie(array $dettes, string $ref): array|null {
        foreach ($dettes as $dette) {
            if ($dette['ref'] === $ref) {
                return [
                    'paie' => $dette['paie'],
                    'ref_d' => $dette['ref'],
                    'dette' => $dette
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

    function getMontant($dette): int|null{
        if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
            $montant = isset($_POST['montant']) ? intval($_POST['montant']) : 0;
            $reste = $dette['montant'] - $dette['montantV'];
            if ($montant <= 0 || $reste < $montant) {
                return null;
            }
            return $montant;
        }
    }

    function createPaie(array $dette, int $montant, int $id){
        date_default_timezone_set('Africa/Dakar');
        $today = date('Y-m-d');
        $paieCount = count($dette['paie'])+1; 
        $ref = 'P'. $id . $paieCount;
        return [
            'ref'=> $ref,
            'montant' => $montant,
            'date' => $today
        ];
    }


    function insererPaiement(array &$clients, string $ref, int $id, array $paie):bool {
        foreach ($clients as &$client) {
            if ($client['id'] === $id) {
                foreach ($client['dette'] as &$dette) {
                    if ($dette['ref'] === $ref) {
                        $dette['paie'][] = $paie;
                        updateMontant($clients,$ref,$id,$paie);
                        return true;
                    }
                }
            }
        }
        return false;
    }

    function updateMontant(array &$clients, string $ref, int $id, array $paie) {
        foreach ($clients as &$client) {
            if ($client['id'] === $id) {
                foreach ($client['dette'] as &$dette) {
                    if ($dette['ref'] === $ref) {
                        $dette['montantV'] += $paie['montant'];
                    }
                }
            }
        }
    }

    function selectClientByTel(array $clients, string $tel):array|null{
        foreach ($clients as  $client) {
            if ($client["tel"] == $tel) {
                return $client;
            }
        }
        return null;
    }

?>