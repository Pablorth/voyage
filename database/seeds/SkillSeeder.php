<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Furtivité
        Skill::create([
            'name'=>'Camouflage',
            'description'=>'Technique visant à se fondre soi ou un objet dans le décor en pleine nature, à utiliser le décor pour dissimuler quelque chose.',
            'category_id'=> 1
        ]);

        Skill::create([
            'name'=>'Escamotage',
            'description'=>'Capacité à faire disparaître un objet de la vue de quelqu’un sans que cela se remarque, un peu comme un tour de passepasse.',
            'category_id'=> 1
        ]);

        Skill::create([
            'name'=>'Filature',
            'description'=>'Faculté à suivre quelqu’un sans se faire remarquer, à se fondre dans la foule ou au contraire à repérer une manœuvre de filature d’autrui. ',
            'category_id'=> 1
        ]);

        Skill::create([
            'name'=>'Mouvements silencieux',
            'description'=>'Tentative d’un personnage de se déplacer en effectuant le moins de bruit possible afin de ne pas attirer l’attention.',
            'category_id'=> 1
        ]);

        Skill::create([
            'name'=>'Se cacher',
            'description'=>'Technique visant à se dissimuler aux yeux d’autrui. Là où le camouflage utilise les ressources naturelles, on ne parlera ici que des lieux artificiels.',
            'category_id'=> 1
        ]);

        //Sens
        Skill::create([
            'name'=>'Fouille',
            'description'=>'Capacité à trouver un objet ou une personne cachée volontairement ou pas dans un lieu précis.',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Observation',
            'description'=>'Faculté à remarquer les détails de manière inconsciente. On peut ainsi avoir l’attention attirée par un détail sans l’avoir réellement cherché.',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Orientation',
            'description'=>'Capacité à se situer dans le décor par rapport à un point connu, à reconnaître les points cardinaux sans l’aide d’un outil approprié.',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Lecture sur les lèvres',
            'description'=>'Capacité à lire sur les lèvres de quelqu’un. A noter que le Personnage  qui réussit un test sous cette Compétence doit ensuite réussir à comprendre la langue  utilisée, à l’aide de la Compétence appropriée. Il peut, à la rigueur, tenter de restituer  le  message à une personne compétente.',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Mémoire',
            'description'=>'Faculté à se souvenir de quelque chose, à mémoriser des éléments donnés pour les restituer ultérieurement.',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Sixième sens',
            'description'=>'Il ne s’agit pas d’une faculté paranormale mais d’une sorte d’intuition, agissant sur l’esprit et donnant une impulsion positive ou négative par rapport à une personne, un événement, une décision.',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Pistage',
            'description'=>'Capacité à suivre une piste grace aux traces laissées',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Pistage de magie',
            'description'=>'Capacité à suivre une piste grace aux traces de magie laissées',
            'category_id'=> 2
        ]);

        Skill::create([
            'name'=>'Détectiopn magique',
            'description'=>'Capacité des Elfs a ressentir quand la magie est utilisée (Race : Elf)',
            'category_id'=> 2
        ]);

        //Technique
        Skill::create([
            'name'=>'Arme de siège',
            'description'=>'Capacité à utiliser une arme de vaisseau comme les canons montés,les catapultes,… ',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Crochetage des serrures',
            'description'=>'Cette compétence permet au personnage de venir à bout des serrures complexes, s’il dispose des outils nécessaires à cette pratique. Les serrures mécaniques seules sont concernées. ',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Couture',
            'description'=>'Connaissance du travail du textile.',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Forge',
            'description'=>'Connaissance du travail du métal.',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Ingénierie',
            'description'=>'Connaissance de la création de mécanisme.',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Tannerie',
            'description'=>'Connaissance du travail du cuir.',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Réparation',
            'description'=>'Capacité du Personnage à réparer des appareils complexes.',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Navigation',
            'description'=>'Connaissance de la conduite de bateau.',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Enchantement',
            'description'=>'Connaissance de la création d’enchantement.',
            'category_id'=> 3
        ]);

        Skill::create([
            'name'=>'Alchimie',
            'description'=>'Connaissance de la création de potions et des processus de transformation magique.',
            'category_id'=> 3
        ]);

        //Relation
        Skill::create([
            'name'=>'Commandement',
            'description'=>'Capacité à se faire obéir d’un groupe, à la  différence de l’influence qui ne vise qu’une seule personne. Les chefs et leaders de tout poil se doivent de posséder une Compétence élevée dans ce domaine.',
            'category_id'=> 4
        ]);

        Skill::create([
            'name'=>'Contrôle animal',
            'description'=>'Capacité à se faire comprendre et obéir d’un animal ou d’une créature d’intelligence assimilée.',
            'category_id'=> 4
        ]);

        Skill::create([
            'name'=>'Diplomatie',
            'description'=>'Capacité du personnage à parlementer.',
            'category_id'=> 4
        ]);

        Skill::create([
            'name'=>'Etiquette',
            'description'=>'Connaissance des attitudes à adopter dans certaines conversations, régies par les eus et coutumes, la fonction ou par le rang social de l’interlocuteur.',
            'category_id'=> 4
        ]);

        Skill::create([
            'name'=>'Influence',
            'description'=>'Capacité à se faire obéir d’autrui en usant de son  autorité, de sa prestance ou de son charisme. A noter que la Compétence ne permettra en aucun cas de faire agir quelqu’un contre sa volonté ou contre son intérêt, sauf dans une moindre mesure.',
            'category_id'=> 4
        ]);

        Skill::create([
            'name'=>'Intimidation',
            'description'=>'Capacité du personnage à faire peur à un interlocuteur.',
            'category_id'=> 4
        ]);

        Skill::create([
            'name'=>'Marchandage',
            'description'=>'Faculté qu’a le personnage à obtenir les meilleures conditions en négociant avec autrui, dans le cadre d’un commerce, d’un troc ou d’un simple échange d’arguments.',
            'category_id'=> 4
        ]);

        Skill::create([
            'name'=>'Séduction',
            'description'=>'Capacité à se faire apprécier positivement  de son  prochain  en  usant de  ses atouts physiques ou de son charisme, de sa personnalité.',
            'category_id'=> 4
        ]);

        //Art
        Skill::create([
            'name'=>'Chant',
            'description'=>'Capacité à utiliser sa voix dans le but de produire un son de qualité et à destination d’un public, la plupart du temps.',
            'category_id'=> 5
        ]);

        Skill::create([
            'name'=>'Comédie',
            'description'=>'Capacité du Personnage à jouer un rôle écrit ou improvisé. Peut également se révéler utile pour pratiquer le mensonge.',
            'category_id'=> 5
        ]);

        Skill::create([
            'name'=>'Cuisine',
            'description'=>'Capacité à pratiquer et apprécier la grande cuisine, à réussir des plats nourrissants ou exquis.',
            'category_id'=> 5
        ]);

        Skill::create([
            'name'=>'Instruments de musique',
            'description'=>'Capacité à jouer d’un instrument de musique. A partir du DM3, le Personnage est à même de composer lui-même des morceaux efficaces.',
            'category_id'=> 5
        ]);

        Skill::create([
            'name'=>'Joaillerie',
            'description'=>'Capacité à travailler de manière artistique la matière, par extension même non précieuse, pour des travaux de petite taille.',
            'category_id'=> 5
        ]);

        Skill::create([
            'name'=>'Littérature',
            'description'=>'Capacité à apprécier ou rédiger des œuvres littéraires.',
            'category_id'=> 5
        ]);

        Skill::create([
            'name'=>'Peinture et dessin',
            'description'=>'Capacité à la pratique et à la compréhension de l’art sous sa forme peinte ou dessinée.',
            'category_id'=> 5
        ]);

        Skill::create([
            'name'=>'Sculpture',
            'description'=>'Capacité à travailler la matière sur de grandes surfaces, à modeler à l’aide des mains ou des outils appropriés une matière brute.',
            'category_id'=> 5
        ]);

        //Combat
        Skill::create([
            'name'=>'Armes à une main',
            'description'=>'Utilisation des armes telles que les haches, les épées, les couteaux, les lances, qu’elles soient contondantes, tranchantes,… a une main!',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Armes à deux main',
            'description'=>'Utilisation des armes telles que les haches, les épées, les lances, qu’elles soient contondantes, tranchantes,… a deux main!',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Armes de jet',
            'description'=>'Utilisation des armes projetées à la force du  poignet, comme des couteaux de lancer, des cailloux ou encore des frondes (même si dans ce cas, c’est le caillou qui est lancé). A noter que la compétence peut également être  utilisée pour lancer un objet, même dans un but non offensif.',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Armes de tir',
            'description'=>'Utilisation des armes utilisées pour frapper à distance en usant d’un mécanisme de projection ou d’un rayon d’énergie. Il s’agit des arcs, des arbalètes, d’arme à feu...',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Armes de tir',
            'description'=>'Utilisation des armes utilisées pour frapper à distance en usant d’un mécanisme de projection ou d’un rayon d’énergie. Il s’agit des arcs, des arbalètes, d’arme à feu...',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Main nue',
            'description'=>'Utilisation de toutes les techniques de combat au corps à corps n’utilisant que les moyens naturels tels que les poings, les pieds, la morsure… Vaut également pour toutes les techniques d’arts martiaux.',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Esquive',
            'description'=>'Art de l’évitement des coups portés. Bien qu’il s’agisse avant tout d’une Compétence liée au Mouvements, par essence, elle ne s’applique qu’en situation de combat  et dépend donc cette discipline.',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Parade',
            'description'=>'Art du blocage des coups portés en utilisant son arme.',
            'category_id'=> 6
        ]);

        Skill::create([
            'name'=>'Boucliers',
            'description'=>'Art du blocage des coups portés en utilisant n’importe quel objet à portée : bouclier, table, plateau de cantine…',
            'category_id'=> 6
        ]);

        //Mouvement
        Skill::create([
            'name'=>'Acrobaties',
            'description'=>'Faculté d’un personnage à réaliser des mouvements spectaculaires, comme des cascades ou des actions désespérées. En football, on utiliserait cette compétence pour inscrire un but via une bicyclette.',
            'category_id'=> 7
        ]);

        Skill::create([
            'name'=>'Course',
            'description'=>'Capacité à se déplacer le plus rapidement possible par ses propres moyens.',
            'category_id'=> 7
        ]);

        Skill::create([
            'name'=>'Equitation',
            'description'=>'Capacité à monter à cheval ou sur toute monture comparable et à maîtriser le pas et la direction de la bête.',
            'category_id'=> 7
        ]);

        Skill::create([
            'name'=>'Escalade',
            'description'=>'Faculté à franchir à la seule force du corps les parois difficiles.',
            'category_id'=> 7
        ]);

        Skill::create([
            'name'=>'Manipulations',
            'description'=>'Capacité à réaliser avec ses mains des prouesses acrobatiques comme attraper un petit objet lancé avec force, se saisir d’une mouche en vol…',
            'category_id'=> 7
        ]);

        Skill::create([
            'name'=>'Natation',
            'description'=>'Capacité à nager.',
            'category_id'=> 7
        ]);

        Skill::create([
            'name'=>'Sauts',
            'description'=>'Faculté de franchir d’un bond des espaces plus ou moins longs',
            'category_id'=> 7
        ]);

        Skill::create([
            'name'=>'Tour de Force',
            'description'=>'Compétence utilisée dans le cas d’une démonstration de force de la part du personnage, comme soulever un poids ou écarter des barreaux…',
            'category_id'=> 7
        ]);

        //Sciences
        Skill::create([
            'name'=>'Administration',
            'description'=>'Connaissance des protocoles administratifs, du monde politique et de ses finesses, de ses représentants et des procédures légales.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Agriculture',
            'description'=>'Connaissance des différentes techniques liées à l’élevage ou la culture d’espèces vivantes, animales ou végétales. A grande échelle, cela permet de gérer une exploitation d’un point de vue technique.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Astronomie',
            'description'=>'Pour astronomie et navigation. Connaissance de la carte stellaire, des amas d’étoiles les plus connus, de la position relative des planètes  et  autres corps célestes. Permet aussi de se repérer géographiquement grâce à la position des étoiles sur la terre ferme.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Biologie',
            'description'=>'Etude de la vie sous toute ces formes.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Bio-enchantement',
            'description'=>'Maîtrise des implants magique, mélange de biologie et de magie.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Botanique',
            'description'=>'Connaissance des plantes répertoriées et des propriétés éventuelles de certaines d’entre elles.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Cartographie',
            'description'=>'Faculté à dresser ou à comprendre une carte retraçant, à l’échelle, un endroit précis, un territoire ou l’intérieur d’un bâtiment.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Coutumes',
            'description'=>'Connaissance des eus et coutumes des différent peuples et espèces intelligentes du monde.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Estimer',
            'description'=>'Capacité à évaluer la valeur d’un objet, d’une information, d’un matériau connu.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Connaissance de… ',
            'description'=>'Cette catégorie et à préciser et peut donc être apprise plusieurs fois (connaissance de l’histoire, connaissance des minéraux,...) elle représente les connaissances du personnage sur un sujet précis.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Illégalité',
            'description'=>'Connaissance des techniques de fraude, du milieu de la pègre et de ses habitudes,  des principaux représentants du milieu.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Langages',
            'description'=>'Capacité du Personnage à parler, écrire et comprendre une langue étrangère. Il existe une myriade de langues parlées, il s’agit donc plutôt d’un indicateur de la chance du Personnage de connaître le langage demandé.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Etude de la magie',
            'description'=>'Connaissance de la magie.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Médecine',
            'description'=>'Capacité à soigner blessures, maladies, empoisonnements, si l’on dispose du matériel requis et de conditions suffisamment propices à l’exercice de la médecine.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Religions',
            'description'=>'Connaissances des principaux cultes répertoriés, des principaux courants de pensée et de leurs méthodes, de leurs habitudes...',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Premiers soins ',
            'description'=>'Capacité à soigner superficiellement et rapidement, en se souciant peu des conditions, les blessures ou les dommages corporels.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Psychologie',
            'description'=>'Connaissance de l’esprit des êtres vivants dans ce qu’il a de mécanique, permettant de déduire un comportement précis à partir de faits donnés.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Torture',
            'description'=>'Connaissance de « l’art » d’infliger la douleur.',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Survie',
            'description'=>'Capacité à se débrouiller dans un milieu donné. La Compétence doit être subdivisée en groupes tels que « survie dans le désert », « survie en milieu glaciaire », « survie en milieu forestier »…',
            'category_id'=> 8
        ]);

        Skill::create([
            'name'=>'Zoologie',
            'description'=>'Connaissance des principales espèces animales répertoriées et de leurs éventuelles capacités.',
            'category_id'=> 8
        ]);


    }
}
