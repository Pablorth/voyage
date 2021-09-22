/***Variables***/

/////////////
//attributs//
/////////////
/**
 * selectionne les emplacements "attributs"
 * @type {number}
 */

const $bodyPoint = document.getElementById('colFormLabelSm6');
const $habilityPoint = document.getElementById('colFormLabelSm7');
const $perceptionPoint = document.getElementById('colFormLabelSm8');
const $spiritPoint = document.getElementById('colFormLabelSm9');
const $powerPoint = document.getElementById('colFormLabelSm10');
const $charismaPoint = document.getElementById('colFormLabelSm11');

/**
 * selectionne les emplacements "attributs" des monstres
 * @type {number}
 */

const $bodyPointMonster = document.getElementById('monster-body');
const $habilityPointMonster = document.getElementById('monster-fitness');
const $perceptionPointMonster = document.getElementById('monster-perception');
const $spiritPointMonster = document.getElementById('monster-spirit');
const $powerPointMonster = document.getElementById('monster-power');
const $charismaPointMonster = document.getElementById('monster-charisma');

/////////////
//aléatoire//
/////////////
/**
 * boutons générant des valeurs aléatoires
 * @type {HTMLButtonElement}
 */
const $randButton = document.querySelector('#rand-button');

const $randButtonWeak = document.querySelector('#rand-button-weak');

const $randButtonNormal = document.querySelector('#rand-button-normal');

const $randButtonStrong = document.querySelector('#rand-button-strong');

const $randButtonMonster = document.querySelector('#rand-button-monster');

////////
//Dons//
////////
/**
 * selectionne les emplacement "dons"
 * @type {number}
 */
const $lifePoint = document.getElementById('points_de_vie');
const $manaPoint = document.getElementById('points_de_magie');
const $reactionSpeed = document.getElementById('vitesse_de_reaction');
const $damageBonus = document.getElementById('bonus_de_degat');
const $socialBonus = document.getElementById('bonus_social');
const $injuryLevel = document.getElementById('seuils_de_blessure');
const $perkPoint = document.getElementById('points_de_personalisation');

/**
 * selectionne les emplacement "dons" des monstres
 * @type {number}
 */
const $monsterLifePoint = document.getElementById('monster-life');
const $manaPointMonster = document.getElementById('monster-magic');
const $monsterReactionSpeed= document.getElementById('monster-speed');
const $damageBonusMonster = document.getElementById('monster-dmg-bonus');
const $socialBonusMonster = document.getElementById('monster-soc-bonus');
const $injuryLevelMonster = document.getElementById('monster-wound');
const $perkPointMonster = document.getElementById('monster-perk');


///////////
// Dices //
///////////
/**
 * prend la valeur selectionné
 * @type {number}
 */
let $diceInputs = document.getElementById('dice')  ;

///////////
// Rolls //
///////////
/**
 * Nombre de dés lancés
 * @type {number}
 */
const $rollsInputs = document.getElementById('rolls') ;

/**
 * bouton de lancé
 * @type {HTMLButtonElement}
 */
const  $rollButton = document.getElementById('roll-button');

/**
 * couleur aleatoire
 * @type {string[]}
 */
let $couleurs = new Array(
    "#84c9f4",
    "#F0F8FF",
    "#f2a81f",
    "#4f5af2",
    "#ff4053",
    "#ff6ef4",
    "#ecd06b",
    "#9ACD32"
);

////////
//Form//
////////

/**
 * div influencé par le changement de css.
 */
var formHero = document.querySelector('#form-hero');
var formPnj= document.querySelector('#form-pnj');
var formMonster = document.querySelector('#form-monster');
var formNotMonster = document.querySelector('#not-monster');
var formIsMonster = document.querySelector('#is-monster');


