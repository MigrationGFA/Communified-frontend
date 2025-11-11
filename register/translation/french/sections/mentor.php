<?php

    $mentor = [
        'mentor' => [
            'wrapper-1' => [
                'head' => 'Quel stade de développement de startup préférez-vous encadrer ? ',
                'block-1' => [
                    'head' => 'Découverte',
                    'sub' => 'Mentorat ceux qui veulent en savoir plus sur les startups et l\'entreprenariat',
                ],
                'block-2' => [
                    'head' => 'D\'idées',
                    'sub' => 'Mentorat pour ceux qui veulent travailler sur leurs idées afin de les transformer en entreprise',
                ],
                'block-3' => [
                    'head' => 'De développement',
                    'sub' => 'Mentorat pour ceux qui veulent valider et développer leurs idées afin d’en faire un produit ou un service',
                ],
                'block-4' => [
                    'head' => 'De pré-lancement',
                    'sub' => 'Mentorat pour ceux qui se préparent à leur pré-lancement',
                ],
                'block-5' => [
                    'head' => 'Post-lancement',
                    'sub' => 'Mentorat pour ceux qui acquièrent leurs premiers clients et marchés',
                ],
                'block-6' => [
                    'head' => 'De croissance',
                    'sub' => 'Mentorat pour ceux qui ont besoin de soutenir et de développer leur entreprise',
                ],
            ],
            'wrapper-2' => [
                'head' => 'À quelle fréquence aimeriez-vous rencontrer les fondateurs que vous mentorez ?',
                'block-1' => [
                    'head' => 'Chaque semaine',
                    'sub' => '',
                ],
                'block-2' => [
                    'head' => 'Toutes les 2 semaines',
                    'sub' => '',
                ],
                'block-3' => [
                    'head' => 'Chaque mois',
                    'sub' => '',
                ],
                'block-4' => [
                    'head' => 'Tous les trimestres',
                    'sub' => '',
                ],
            ],
            // Veuillez fournir des informations précises et complètes dans votre demande, car elles sont essentielles pour évaluer votre éligibilité et formuler des recommandations
            'form-1' => [
                'head' => '',
                'name' => [
                    'head' => 'Nom complet',
                    'sub-1' => 'Prénom',
                    'sub-2' => 'Nom de famille',
                ],
                'gendar' => [
                    'head' => 'Genre',
                    'options' => [
                        'Masculin',
                        'Féminin'
                    ],
                ],
                'email' => 'Email',
                'mobile' => 'Mobile',
                'location' => 'Situation géographique',
                'city' => 'Ville',
                'category' => [
                    'head' => 'Structure du mentor',
                    'blank' => '- Sélectionner –',
                    'options' => [
                                'Entreprise publique',
                                'Entreprise privée',
                                'Incubateurs',
                                'ONG',
                                'Entreprise individuelle',
                                
                    ],
                ],
                'company' => [
                    'head' => 'Nom de l’entreprise',
                    'sub' => 'Intitulé du poste',
                ],
                'industry-mentor' => [
                    'head' => 'Secteurs d’activité',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        'Agriculture',
                        'Agroalimentaire',
                        'Agro-industrie',
                        'Industries Culturelles & Créatives',
                        'Transport & logistique',
                        'Chimie et plasturgie',
                        'Activités extractives',
                        'Matériaux de construction, d’ameublement et d’équipement',
                        'Industrie pharmaceutique',
                        'Textile et accessoires',
                        'Activités immobilières',
                        'BTP',
                        'Economie numérique',
                        'Tourisme & loisirs',
                        'Hébergement et restauration',
                        'Emballages & packages',
                        'Commerce',
                        'Production et distribution d\'électricité et de gaz',
                        'Fabrication de pièces détachées, assemblage de véhicules de spécialité',
                        'Activités financières et d\'assurance',
                        'Production et distribution d\'eau, assainissement, traitement des déchets et dépollutions',
                        'Services'
                    ],
                ],
                'experience' => [
                    'head' => 'Années d’expériences',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        'Expérience de compétences professionnelles',
                        'Expérience spécifique à l`industrie', 
                        'Entreprise créée', 
                        'Fonds créés',
                        'Entreprise vendue',
                        'Entreprise acquise',
                        'Plusieurs startups créées',
                    ],
                ],
                'mentor-hours' => [
                    'head' => 'Combien d`heures par mois êtes-vous en mesure de consacrer au mentorat des fondateurs ? ',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        '1-4 heures', 
                        '5-8 heures', 
                        '9-12 heures',
                        'Plus de 12 heures', 
                    ]
                    ],
                'mentor-interest' => [
                    'head' => 'Êtes-vous intéressé par le mentorat de startups ivoiriennes ? ',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        'Oui',
                        'Non',
                    ],
                ],
                'venture-raise' => [
                    'head' => 'Avez-vous déjà levé des fonds de capital-risque ? ',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        'Oui',
                        'Non',
                       
                    ],
                ],
                'mentor-invest' => [
                    'head' => 'En plus du mentorat, êtes-vous également intéressé par l`investissement dans des startups ? Si oui, quelle est la fourchette de montant ?',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        'Non',
                        '1-5 Millions XOF',
                        '5-15 Millions XOF',
                        '15-30 Millions XOF',
                        '30-50 Millions XOF',
                        '50-100 Millions XOF',
                        'Plus de 100 Millions XOF',
                    ],
                ],
                'chat' => 'WhatsApp ou ID WeChat',
                'linkedin' => 'URL de la page LinkedIn ',
                'age' => [
                    'head' => '',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        '21 – 29',
                        '30 – 39',
                        '40 - 49',
                        '50 – 59',
                        '60+',
                    ],
                ],
                'mentor-qualification' => 'Votre plus haute qualification scolaire ',
                'founder-num' => [
                    'head' => 'Combien de Chef d’entreprise pouvez-vous encadrer ?',
                    'blank' => '- Sélectionner –',
                    'options' => [
                        '1',
                        '2',
                        '3', 
                        '4', 
                        'Plus de 5',
                       
                    ],
                ],
                'founder-skill' => [
                    'head' => 'Y a-t-il une compétence spécifique que vous aimeriez enseigner aux fondateurs ? Par exemple, le marketing, l`ingénierie, le développement des affaires, etc. ',
                    'sub' => 'Compétence spécifique',
                ],
                'mentor-goals' => [
                    'head' => 'Quels objectifs spécifiques espérez-vous atteindre en étant mentor ? ',
                    'sub' => 'Objectifs spécifiques',
                ],
                'mentor-experience' => 'Quelles autres compétences ou expériences spéciales pensez-vous pouvoir partager avec les fondateurs ? par exemple référer des clients, conseils stratégiques, investissements, ',
                'bio' => 'Courte biographie personnelle ? ',
                'submit' => 'Soumettre'
            ]
        ],
    ];

?>