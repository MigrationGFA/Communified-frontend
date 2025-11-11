<?php
include 'sections/individual.php';
include 'sections/startup.php';
include 'sections/investor.php';
include 'sections/mentor.php';
include 'sections/accelerator.php';
include 'sections/corporate.php';

$translations = [
    'main-header' => 'INTÉGRATION DES CLIENTS',
    'side-nav' => [
        'head-1' => 'Configurer les détails du compte',
        'sub-head-1' => 'Configurer les détails du compte',
    ],
    'card-head' => 'Choisissez votre type d’organisation',
    
    'Help Desk' => "Service d'assistance",
    'Urgency' => 'Urgence',
    'Low' => 'Bas',
    'Medium' => 'Moyen',
    'High' => 'Élevé',
    'Subject' => 'Sujet',
    'Please fill the form below accurately' => 'Veuillez remplir le formulaire ci-dessous avec précision',
    'First Name' => 'Prénom',
    'Surname' => 'Nom de famille',
    'Email Address' => 'Adresse e-mail',
    'Submit' => 'Soumettre',
    'Successful' => 'Réussi',
    'You have successfully submitted your message. You will be contacted shortly!' => 'Vous avez soumis votre message avec succès. Vous serez contacté sous peu!',
    'Oops' => 'Oups',
    'There was an error connecting to the database.' => 'Une erreur est survenue lors de la connexion à la base de données.',

    'org-type' => [
        'individual' => [
            'head' => 'PME',
            'sub' => 'Pour les particuliers et les petites et moyennes entreprises',
        ],
        'startup' => [
            'head' => 'Startup',
            'sub' => 'Pour les entreprises à forte croissance',
        ],
        'investor' => [
            'head' => 'Investisseurs',
            'sub' => 'Pour les investisseurs dans les startups africaines prometteuses',
        ],
        'mentor' => [
            'head' => 'Mentors',
            'sub' => 'Transformer une startup en une licorne',
        ],
        'accelerator' => [
            'head' => 'Accélérateurs/Incubateurs',
            'sub' => 'Pour les accélérateurs et les incubateurs',
        ],
        'corporate' => [
            'head' => 'Expert/Consultant',
            'sub' => 'Pour les entreprises privées et le secteur public',
        ],
    ],
];

$translations = array_merge($translations, $individual, $startup, $investor, $mentor, $accelerator, $corporate);


function translate($key) {
    global $translations;
    
    return isset($translations[$key]) ? $translations[$key] : $key;
}

?>