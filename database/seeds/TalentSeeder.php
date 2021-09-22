<?php

use Illuminate\Database\Seeder;
use App\Talent;

class TalentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Contextuel
        Talent::create([
            'name'=>'Agile',
            'description'=>'Bonus +1 escalade/saut/escamotage.',
            'effect'=>'Bonus +1 escalade/saut/escamotage.',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Acuité auditive',
            'description'=>'Bonus +1 au test impliquant l\'ouïe.',
            'effect'=>'Bonus +1 au test impliquant l\'ouïe.',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Acuité visuel',
            'description'=>'Bonus +1 au test impliquant la vue',
            'effect'=>'Bonus +1 au test impliquant la vue',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Athlète',
            'description'=>'Bonus +1 course/saut/nage',
            'effect'=>'Bonus +1 course/saut/nage',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Biologiste',
            'description'=>'Bonus +1 au test pour botanique/zoologie',
            'effect'=>'Bonus +1 au test pour botanique/zoologie',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Conspirateur',
            'description'=>'Bonus +1 au test pour marchander/influencer',
            'effect'=>'Bonus +1 au test pour marchander/influencer',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Diplomate',
            'description'=>'Bonus +1 au test pour commander/diplomatie',
            'effect'=>'Bonus +1 au test pour commander/diplomatie',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Furtif',
            'description'=>'Bonus +1 au test pour se cacher/camouflage',
            'effect'=>'Bonus +1 au test pour se cacher/camouflage',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Intimidant',
            'description'=>'Bonus +1 au test pour intimider/torturer',
            'effect'=>'Bonus +1 au test pour intimider/torturer',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Pas léger',
            'description'=>'Bonus +1 au test pour filature/déplacements silencieux',
            'effect'=>'Bonus +1 au test pour filature/déplacements silencieuxr',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Vision nocturne',
            'description'=>'Permet des tests de vue dans l\'obscurité.',
            'effect'=>'Permet des tests de vue dans l\'obscurité.',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Instruit',
            'description'=>'Bonus +1 au test pour langues/coutume',
            'effect'=>'Bonus +1 au test pour langues/coutume',
            'cost'=>'5',
            'standard'=>'-',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Ambidextrie',
            'description'=>'Une attaque supplémentaire (si 2 armes "rapides")',
            'effect'=>'Une attaque supplémentaire (si 2 armes "rapides")',
            'cost'=>'10',
            'standard'=>'DM3+',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Art martial',
            'description'=>'Une attaque supplémentaire si attaque main nue',
            'effect'=>'Une attaque supplémentaire si attaque main nue',
            'cost'=>'10',
            'standard'=>'DM3+',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Exécuteur',
            'description'=>'Bonus +1Bdeg sur une cible blessée',
            'effect'=>'Bonus +1Bdeg sur une cible blessée',
            'cost'=>'10',
            'standard'=>'DM3+',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Présence magique',
            'description'=>'Permet d’utilisé le CHA pour les tests magiques',
            'effect'=>'Permet d’utilisé le CHA pour les tests magiques',
            'cost'=>'15',
            'standard'=>'CHA(6+)',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Force de l’esprit',
            'description'=>'Permet d’utilisé le ESP pour les tests magiques',
            'effect'=>'Permet d’utilisé le ESP pour les tests magiques',
            'cost'=>'15',
            'standard'=>'ESP(6+)',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Magie sensorielle',
            'description'=>'Permet d’utilisé le PER pour les tests magiques',
            'effect'=>'Permet d’utilisé le PER pour les tests magiques',
            'cost'=>'15',
            'standard'=>'PER(6+)',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Dans le sang',
            'description'=>'Permet d’utilisé le COR pour les tests magiques',
            'effect'=>'Permet d’utilisé le COR pour les tests magiques',
            'cost'=>'15',
            'standard'=>'COR(6+)',
            'category_id'=> 1,
        ]);

        Talent::create([
            'name'=>'Tisse-magie',
            'description'=>'Permet d’utilisé le HAB pour les tests magiques',
            'effect'=>'Permet d’utilisé le HAB pour les tests magiques',
            'cost'=>'15',
            'standard'=>'HAB(6+)',
            'category_id'=> 1,
        ]);

        //relance
        Talent::create([
            'name'=>'Orateur',
            'description'=>'Relance test diplomatie/commandement',
            'effect'=>'Relance test diplomatie/commandement',
            'cost'=>'15',
            'standard'=>'DM3+',
            'category_id'=> 2,
        ]);

        Talent::create([
            'name'=>'Acrobate',
            'description'=>'Relance test escalade/équitation/acrobatie/saut',
            'effect'=>'Relance test escalade/équitation/acrobatie/saut',
            'cost'=>'15',
            'standard'=>'DM3+',
            'category_id'=> 2,
        ]);

        Talent::create([
            'name'=>'Aux aguets',
            'description'=>'Relance test sens',
            'effect'=>'Relance test sens',
            'cost'=>'15',
            'standard'=>'DM3+',
            'category_id'=> 2,
        ]);

        Talent::create([
            'name'=>'Croquis',
            'description'=>'Relance test art',
            'effect'=>'Relance test art',
            'cost'=>'15',
            'standard'=>'DM3+',
            'category_id'=> 2,
        ]);

        Talent::create([
            'name'=>'Discret',
            'description'=>'Relance test filature/déplacement silencieux',
            'effect'=>'Relance test filature/déplacement silencieux',
            'cost'=>'15',
            'standard'=>'DM3+',
            'category_id'=> 2,
        ]);

        Talent::create([
            'name'=>'Imposant',
            'description'=>'Relance test ctrl animal/commandement/intimidation',
            'effect'=>'Relance test ctrl animal/commandement/intimidation',
            'cost'=>'15',
            'standard'=>'DM3+',
            'category_id'=> 2,
        ]);

        Talent::create([
            'name'=>'Sociable',
            'description'=>'Relance test ctrl animal/séduction/marchandage',
            'effect'=>'Relance test ctrl animal/séduction/marchandage',
            'cost'=>'15',
            'standard'=>'DM3+',
            'category_id'=> 2,
        ]);

        //Soutien
        Talent::create([
            'name'=>'Autre approche',
            'description'=>'Relance test science allié',
            'effect'=>'Relance test science allié',
            'cost'=>'15',
            'standard'=>'ESP(5+)',
            'category_id'=> 3,
        ]);

        Talent::create([
            'name'=>'Cataliseur',
            'description'=>'Relance test sort allié',
            'effect'=>'Relance test sort allié',
            'cost'=>'15',
            'standard'=>'POU(5+)',
            'category_id'=> 3,
        ]);

        Talent::create([
            'name'=>'Conseillé',
            'description'=>'Relance test relation allié',
            'effect'=>'Relance test relation allié',
            'cost'=>'15',
            'standard'=>'ESP(5+)',
            'category_id'=> 3,
        ]);

        Talent::create([
            'name'=>'Contremaître',
            'description'=>'Relance test technique allié',
            'effect'=>'Relance test technique allié',
            'cost'=>'15',
            'standard'=>'ESP(5+)',
            'category_id'=> 3,
        ]);

        Talent::create([
            'name'=>'Distraction',
            'description'=>'Relance test furtif allié',
            'effect'=>'Relance test furtif allié',
            'cost'=>'15',
            'standard'=>'HAB(5+)',
            'category_id'=> 3,
        ]);

        Talent::create([
            'name'=>'Lien sensoriel',
            'description'=>'Relance test sens allié',
            'effect'=>'Relance test sens allié',
            'cost'=>'15',
            'standard'=>'PER(5+)',
            'category_id'=> 3,
        ]);

        Talent::create([
            'name'=>'Coach',
            'description'=>'Relance test mouvement allié',
            'effect'=>'Relance test mouvement allié',
            'cost'=>'15',
            'standard'=>'CHA(5+)',
            'category_id'=> 3,
        ]);

        Talent::create([
            'name'=>'Muse',
            'description'=>'Relance test art allié',
            'effect'=>'Relance test art allié',
            'cost'=>'15',
            'standard'=>'CHA(5+)',
            'category_id'=> 3,
        ]);

        //combat
        Talent::create([
            'name'=>'Aguerri',
            'description'=>'Le changement de posture ne prend pas un tour',
            'effect'=>'Le changement de posture ne prend pas un tour',
            'cost'=>'15',
            'standard'=>'-',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre de l\'arc',
            'description'=>'Réussite critique augmenté de 1 (arc)',
            'effect'=>'Réussite critique augmenté de 1 (arc)',
            'cost'=>'15',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre la dague',
            'description'=>'Réussite critique augmenté de 1 (dague)',
            'effect'=>'Réussite critique augmenté de 1 (dague)',
            'cost'=>'15',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre l\'épée',
            'description'=>'Réussite critique augmenté de 1 (épée)',
            'effect'=>'Réussite critique augmenté de 1 (épée)',
            'cost'=>'15',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre la hache',
            'description'=>'Réussite critique augmenté de 1 (hache)',
            'effect'=>'Réussite critique augmenté de 1 (hache)',
            'cost'=>'15',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre la lance',
            'description'=>'Réussite critique augmenté de 1 (arme de jet)',
            'effect'=>'Réussite critique augmenté de 1 (arme de jet)',
            'cost'=>'15',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre la masse',
            'description'=>'Réussite critique augmenté de 1 (masse)',
            'effect'=>'Réussite critique augmenté de 1 (masse)',
            'cost'=>'15',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre de la poudre',
            'description'=>'Recharger ne fait plus perdre de tour',
            'effect'=>'Recharger ne fait plus perdre de tour',
            'cost'=>'15',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Coup de bouclier',
            'description'=>'Après un blocage réussi, peut attaquer avec le bouclier',
            'effect'=>'Après un blocage réussi, peut attaquer avec le bouclier',
            'cost'=>'20',
            'standard'=>'DM3+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Fuyant',
            'description'=>'Un mouvement gratuit après une esquive réussie',
            'effect'=>'Un mouvement gratuit après une esquive réussie',
            'cost'=>'20',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Maitre du bâton',
            'description'=>'Bonus +1 test «initiative» début de combat',
            'effect'=>'Bonus +1 test «initiative» début de combat',
            'cost'=>'20',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Reflexe fulgurant',
            'description'=>'Bonus +1 test «initiative» début de combat',
            'effect'=>'Bonus +1 test «initiative» début de combat',
            'cost'=>'20',
            'standard'=>'HAB (7+)',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Riposte',
            'description'=>'Une attaque gratuite après une parade réussie',
            'effect'=>'Une attaque gratuite après une parade réussie',
            'cost'=>'30',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        Talent::create([
            'name'=>'Riposte magique',
            'description'=>'Un sort après une action défensive réussie',
            'effect'=>'Un sort après une action défensive réussie',
            'cost'=>'30',
            'standard'=>'DM4+',
            'category_id'=> 4,
        ]);

        //défensif
        Talent::create([
            'name'=>'Garde magie',
            'description'=>'Gagne 1d3 PM après le premier blocage réussi',
            'effect'=>'Gagne 1d3 PM après le premier blocage réussi',
            'cost'=>'30',
            'standard'=>'DM4+; ESP(6+)',
            'category_id'=> 5,
        ]);

        Talent::create([
            'name'=>'Mange magie',
            'description'=>'Gagne 1d3 PM après la première attaque réussie',
            'effect'=>'Gagne 1d3 PM après la première attaque réussie',
            'cost'=>'30',
            'standard'=>'DM4+; POU(6+)',
            'category_id'=> 5,
        ]);

        Talent::create([
            'name'=>'Déroutant',
            'description'=>'Gagne 1d3 PM après la première esquive réussie',
            'effect'=>'Gagne 1d3 PM après la première esquive réussie',
            'cost'=>'30',
            'standard'=>'DM4+; HAB(6+)',
            'category_id'=> 5,
        ]);

        Talent::create([
            'name'=>'Anticipation',
            'description'=>'Gagne 1d3 PM après la première parade réussie',
            'effect'=>'Gagne 1d3 PM après la première parade réussie',
            'cost'=>'30',
            'standard'=>'DM4+; PER(6+)',
            'category_id'=> 5,
        ]);

        Talent::create([
            'name'=>'Monstrueux',
            'description'=>'La première attaque réussie donne -1 tests des ennemies proche.',
            'effect'=>'La première attaque réussie donne -1 tests des ennemies proche.',
            'cost'=>'30',
            'standard'=>'DM4+; CHA(6+)',
            'category_id'=> 5,
        ]);

        Talent::create([
            'name'=>'Solidité',
            'description'=>'Gagne 1d3 PV après un blocage réussi',
            'effect'=>'Gagne 1d3 PV après un blocage réussi',
            'cost'=>'30',
            'standard'=>'DM4+; COR(6+)',
            'category_id'=> 5,
        ]);

        //archétype
        Talent::create([
            'name'=>'Enchainement',
            'description'=>'Posture offensive s\'applique au deux première attaques',
            'effect'=>'Posture offensive s\'applique au deux première attaques',
            'cost'=>'40',
            'standard'=>'DM4+; HAB(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Elu de la magie',
            'description'=>'Un pouvoir supplémentaire',
            'effect'=>'Un pouvoir supplémentaire',
            'cost'=>'40',
            'standard'=>'DM4+; CHA(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Violent',
            'description'=>'Triple le Bdeg en position offensive',
            'effect'=>'Triple le Bdeg en position offensive',
            'cost'=>'40',
            'standard'=>'DM4+; COR(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Enrager',
            'description'=>'Une attaque supplémentaire pour chaque attaque reçue',
            'effect'=>'Une attaque supplémentaire pour chaque attaque reçue',
            'cost'=>'40',
            'standard'=>'DM4+; CHA(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Protecteur magique',
            'description'=>'Les sorts sont considérés comme des actions défensives',
            'effect'=>'Les sorts sont considérés comme des actions défensives',
            'cost'=>'40',
            'standard'=>'DM4+; ESP(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Aura bénéfique',
            'description'=>'posture concentration augmente les succès critiques des sort de soutien de 1',
            'effect'=>'posture concentration augmente les succès critiques des sort de soutien de 1',
            'cost'=>'40',
            'standard'=>'DM4+; CHA(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Aura maléfique',
            'description'=>'posture concentration augmente les succès critiques des sort de offensif de 1',
            'effect'=>'posture concentration augmente les succès critiques des sort de offensif de 1',
            'cost'=>'40',
            'standard'=>'DM4+; ESP(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Point d\'encrage',
            'description'=>'posture concentration augmente les succès critiques des sort d\'invocation de 1',
            'effect'=>'posture concentration augmente les succès critiques des sort d\'invocation de 1',
            'cost'=>'40',
            'standard'=>'DM4+; CHA(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Super réactivité',
            'description'=>'Le malus "posture défensif" est divisé par deux',
            'effect'=>'Le malus "posture défensif" est divisé par deux',
            'cost'=>'40',
            'standard'=>'DM4+; PER(6+)',
            'category_id'=> 6,
        ]);

        Talent::create([
            'name'=>'Sniper',
            'description'=>'Malus arme FD : -2 (arme à distance)',
            'effect'=>'Malus arme FD : -2 (arme à distance)',
            'cost'=>'40',
            'standard'=>'DM4+; PER(6+)',
            'category_id'=> 6,
        ]);

        //strategique
        Talent::create([
            'name'=>'Intimidation',
            'description'=>'Ennemi qui vous attaque: (-1)',
            'effect'=>'Ennemi qui vous attaque: (-1)',
            'cost'=>'10',
            'standard'=>'CHA(5+)',
            'category_id'=> 7,
        ]);

        Talent::create([
            'name'=>'Impressionnant',
            'description'=>'ennemi qui se protège d\'une attaque allié: (-1)',
            'effect'=>'Ennemi qui se protège d\'une attaque allié: (-1)',
            'cost'=>'10',
            'standard'=>'CHA(5+)',
            'category_id'=> 7,
        ]);

        Talent::create([
            'name'=>'Instructeur',
            'description'=>'Ennemi qui attaque un allié: (-1)',
            'effect'=>'Ennemi qui attaque un allié: (-1)',
            'cost'=>'10',
            'standard'=>'ESP(6+)',
            'category_id'=> 7,
        ]);

        Talent::create([
            'name'=>'Interférence',
            'description'=>'Ennemi qui lance un sort à un allié: (-1)',
            'effect'=>'Ennemi qui lance un sort à un allié: (-1)',
            'cost'=>'10',
            'standard'=>'PER(6+)',
            'category_id'=> 7,
        ]);

        Talent::create([
            'name'=>'Précision',
            'description'=>'Ennemi qui se protège de votre première attaque: (-1)',
            'effect'=>'Ennemi qui se protège de votre première attaque: (-1)',
            'cost'=>'10',
            'standard'=>'ESP(6+)',
            'category_id'=> 7,
        ]);

        Talent::create([
            'name'=>'Galvanise',
            'description'=>'test combat d\'un allié: (+1)',
            'effect'=>'test combat d\'un allié: (+1)',
            'cost'=>'10',
            'standard'=>'CHA(6+)',
            'category_id'=> 7,
        ]);

    }
}
