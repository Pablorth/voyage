/***Functions***/


////////////////
//verification//
////////////////

/**
 * verifie des valeurs
 * @returns {number}
 */
function verificationInputs() {
    if ($bodyPoint.value > 10) {
        $bodyPoint.value = 10;
    } else if ($bodyPoint.value < 1 || $bodyPoint.value === undefined ) {
        $bodyPoint.value = 1;
    }
    if ($habilityPoint.value > 10) {
        $habilityPoint.value = 10;
    } else if ($habilityPoint.value < 1 || $habilityPoint.value === undefined) {
        $habilityPoint.value = 1;
    }
    if ($perceptionPoint.value > 10) {
        $perceptionPoint.value = 10;
    } else if ($perceptionPoint.value < 1 || $perceptionPoint.value === undefined) {
        $perceptionPoint.value = 1;
    }
    if ($spiritPoint.value > 10) {
        $spiritPoint.value = 10;
    } else if ($spiritPoint.value < 1 || $spiritPoint.value === undefined) {
        $spiritPoint.value = 1;
    }
    if ($powerPoint.value > 10) {
        $powerPoint.value = 10;
    } else if ($powerPoint.value < 1 || $powerPoint.value === undefined) {
        $powerPoint.value = 1;
    }
    if ($charismaPoint.value > 10) {
        $charismaPoint.value = 10;
    } else if ($charismaPoint.value < 1 || $charismaPoint.value === undefined) {
        $charismaPoint.value = 1;
    }
    return parseInt($bodyPoint.value),
    parseInt($habilityPoint.value),
    parseInt($spiritPoint.value),
    parseInt($spiritPoint.value),
    parseInt($powerPoint.value),
    parseInt($charismaPoint.value);
}

function verificationInputsMonster() {
    if ($bodyPointMonster.value < 1 || $bodyPointMonster.value === undefined ) {
        $bodyPointMonster.value = 1;
    }
    if ($habilityPointMonster.value < 1 || $habilityPointMonster.value === undefined) {
        $habilityPointMonster.value = 1;
    }
    if ($perceptionPointMonster.value < 1 || $perceptionPointMonster.value === undefined) {
        $perceptionPointMonster.value = 1;
    }
    if ($spiritPointMonster.value < 1 || $spiritPointMonster.value === undefined) {
        $spiritPointMonster.value = 1;
    }
    if ($powerPointMonster.value < 1 || $powerPointMonster.value === undefined) {
        $powerPointMonster.value = 1;
    }
    if ($charismaPointMonster.value < 1 || $charismaPointMonster.value === undefined) {
        $charismaPointMonster.value = 1;
    }
    return parseInt($bodyPointMonster.value),
    parseInt($habilityPointMonster.value),
    parseInt($spiritPointMonster.value),
    parseInt($spiritPointMonster.value),
    parseInt($powerPointMonster.value),
    parseInt($charismaPointMonster.value);
}

////////////////////
//calcul lifepoint//
////////////////////

/**
 * calcule life points
 * @type {number}
 */
function getLifePoint() {

    let $lifePointValue = ($bodyPoint.value* 5)
    return $lifePointValue;
}

/**
 * affiche life points
 * @type {number}
 */
function upDateLifePoint() {

    $lifePoint.innerText = ' ' + getLifePoint();

}

/**
 * calcule life points
 * @type {number}
 */
function getLifePointMonster() {

    let $lifePointValueMonster = ($bodyPointMonster.value* 5)
    return $lifePointValueMonster;
}

/**
 * affiche life points
 * @type {number}
 */
function upDateLifePointMonster() {

    $monsterLifePoint.innerText = ' ' + getLifePointMonster();

}

////////////////////
//calcul manapoint//
////////////////////

/**
 * calcule mana points
 * @type {number}
 */
function getManaPoint() {
    let $manaPointValue = ($powerPoint.value * 4);
    return $manaPointValue;
}

/**
 * affiche mana points
 * @type {number}
 */
function upDateManaPoint() {

    $manaPoint.innerText = ' ' + getManaPoint();
}

/**
 * calcule mana points
 * @type {number}
 */
function getManaPointMonster() {
    let $manaPointValueMonster = ($powerPointMonster.value * 4);
    return $manaPointValueMonster;
}

/**
 * affiche mana points
 * @type {number}
 */
function upDateManaPointMonster() {

    $manaPointMonster.innerText = ' ' + getManaPointMonster();
}

////////////////////
//calcul reacspeed//
////////////////////

/**
 * calcule reacspeed
 * @type {number}
 */
function getReacSpeed() {

    let $reacSpeedValue = Math.floor((parseInt($habilityPoint.value) + parseInt($perceptionPoint.value))/2);
    return $reacSpeedValue;
}


/**
 * affiche reacspeed
 * @type {number}
 */
function upDateReacSpeed() {

    $reactionSpeed.innerText = ' ' + getReacSpeed();
}

/**
 * calcule reacspeed
 * @type {number}
 */
function getReacSpeedMonster() {

    let $reacSpeedValueMonster = Math.floor((parseInt($habilityPointMonster.value) + parseInt($perceptionPointMonster.value))/2);
    return $reacSpeedValueMonster;
}


/**
 * affiche reacspeed
 * @type {number}
 */
function upDateReacSpeedMonster() {

    $monsterReactionSpeed.innerText = ' ' + getReacSpeedMonster();
}

//////////////////////
//calcul damagebonus//
//////////////////////

/**
 * calcule damagebonus
 * @type {number}
 */
function getDamageBonus() {

    let $damageBonusValue = Math.floor((parseInt($habilityPoint.value) + parseInt($bodyPoint.value)) /6);
    return $damageBonusValue;
}

/**
 * affiche damagebonus
 * @type {number}
 */
function upDateDamageBonus() {

    $damageBonus.innerText = ' ' + getDamageBonus();
}

/**
 * calcule damagebonus
 * @type {number}
 */
function getDamageBonusMonster() {

    let $damageBonusValueMonster = Math.floor((parseInt($habilityPointMonster.value) + parseInt($bodyPointMonster.value)) /6);
    return $damageBonusValueMonster;
}

/**
 * affiche damagebonus
 * @type {number}
 */
function upDateDamageBonusMonster() {

    $damageBonusMonster.innerText = ' ' + getDamageBonusMonster();
}

//////////////////////
//calcul injurylevel//
//////////////////////

/**
 * calcule injurylevel
 * @type {number}
 */
function getInjuryLevel() {

    let $injuryLevelValue = parseInt($bodyPoint.value);

    return $injuryLevelValue;
}


/**
 * affiche injurylevel
 * @type {number}
 */
function upDateInjuryLevel() {

    $injuryLevel.innerText = ' ' + getInjuryLevel();
}

/**
 * calcule injurylevel
 * @type {number}
 */
function getInjuryLevelMonster() {

    let $injuryLevelValueMonster = parseInt($bodyPointMonster.value);

    return $injuryLevelValueMonster;
}


/**
 * affiche injurylevel
 * @type {number}
 */
function upDateInjuryLevelMonster() {

    $injuryLevelMonster.innerText = ' ' + getInjuryLevelMonster();
}

////////////////////
//calcul perkpoint//
////////////////////

/**
 * calcule perkpoint
 * @type {number}
 */
function getPerkPoint() {

    let $perkPointValue = ($spiritPoint.value * 5);
    return $perkPointValue;

}

/**
 * affiche perkpoint
 * @type {number}
 */
function upDatePerkPoint() {
        $perkPoint.innerText = ' ' + getPerkPoint();
}

/**
 * calcule perkpoint
 * @type {number}
 */
function getPerkPointMonster() {

    let $perkPointValueMonster = ($spiritPointMonster.value * 5);
    return $perkPointValueMonster;

}

/**
 * affiche perkpoint
 * @type {number}
 */
function upDatePerkPointMonster() {
        $perkPointMonster.innerText = ' ' + getPerkPointMonster();
}

//////////////////////
//calcul socialbonus//
//////////////////////

/**
 * calcule socialbonus
 * @type {number}
 */
function getSocialBonus() {

    let $socialBonusValue = Math.floor((parseInt($spiritPoint.value) + parseInt($charismaPoint.value)) / 6);
    return $socialBonusValue;
}

/**
 * affiche socialbonus
 * @type {number}
 */
function upDateSocialBonus() {

    $socialBonus.innerText = ' ' + getSocialBonus();
}

/**
 * calcule socialbonus
 * @type {number}
 */
function getSocialBonusMonster() {

    let $socialBonusValueMonster = Math.floor((parseInt($spiritPointMonster.value) + parseInt($charismaPointMonster.value)) / 6);
    return $socialBonusValueMonster;
}

/**
 * affiche socialbonus
 * @type {number}
 */
function upDateSocialBonusMonster() {

    $socialBonusMonster.innerText = ' ' + getSocialBonusMonster();
}

//dynamique-update stats and gifts for monsters//
function changeMonsterBody() {
    verificationInputsMonster();
    upDateLifePointMonster();
    upDateDamageBonusMonster();
    upDateInjuryLevelMonster();
}

function changeMonsterFitness() {
    verificationInputsMonster();
    upDateReacSpeedMonster();
    upDateDamageBonusMonster();
}

function changeMonsterPerception() {
    verificationInputsMonster();
    upDateReacSpeedMonster();
}

function changeMonsterSpirit() {
    verificationInputsMonster();
    upDatePerkPointMonster();
    upDateInjuryLevelMonster();
    upDateSocialBonusMonster();
}

function changeMonsterPower() {
    verificationInputsMonster();
    upDateManaPointMonster();
}

function changeMonsterCharisma() {
    verificationInputsMonster();
    upDateSocialBonusMonster();
}

///////////////////////
//attributs aléatoire//
///////////////////////

/**
 * génere des valeus aléatoires
 * @type {number}
 */
function randAttributs() {

    $bodyPoint.value = Math.floor((Math.random() * 10)+1);
    $habilityPoint.value = Math.floor((Math.random() * 10)+1);
    $perceptionPoint.value = Math.floor((Math.random() * 10)+1);
    $spiritPoint.value = Math.floor((Math.random() * 10)+1);
    $powerPoint.value = Math.floor((Math.random() * 10)+1);
    $charismaPoint.value = Math.floor((Math.random() * 10)+1);

    return parseInt($bodyPoint.value),
        parseInt($habilityPoint.value),
        parseInt($perceptionPoint.value),
        parseInt($spiritPoint.value),
        parseInt($powerPoint.value),
        parseInt($charismaPoint.value);
}

/**
 * génere des valeus aléatoires
 * @type {number}
 */
function randAttributsWeak() {

    $bodyPointMonster.value = Math.floor((Math.random() * 5)+1);
    $habilityPointMonster.value = Math.floor((Math.random() * 5)+1);
    $perceptionPointMonster.value = Math.floor((Math.random() * 5)+1);
    $spiritPointMonster.value = Math.floor((Math.random() * 5)+1);
    $powerPointMonster.value = Math.floor((Math.random() * 5)+1);
    $charismaPointMonster.value = Math.floor((Math.random() * 5)+1);

    return parseInt($bodyPointMonster.value),
        parseInt($habilityPointMonster.value),
        parseInt($perceptionPointMonster.value),
        parseInt($spiritPointMonster.value),
        parseInt($powerPointMonster.value),
        parseInt($charismaPointMonster.value);
}

/**
 * génere des valeus aléatoires
 * @type {number}
 */
function randAttributsNormal() {

    $bodyPointMonster.value = Math.floor((Math.random() * 14)+1);
    $habilityPointMonster.value = Math.floor((Math.random() * 14)+1);
    $perceptionPointMonster.value = Math.floor((Math.random() * 14)+1);
    $spiritPointMonster.value = Math.floor((Math.random() * 14)+1);
    $powerPointMonster.value = Math.floor((Math.random() * 14)+1);
    $charismaPointMonster.value = Math.floor((Math.random() * 14)+1);

    return parseInt($bodyPointMonster.value),
        parseInt($habilityPointMonster.value),
        parseInt($perceptionPointMonster.value),
        parseInt($spiritPointMonster.value),
        parseInt($powerPointMonster.value),
        parseInt($charismaPointMonster.value);
}

/**
 * génere des valeus aléatoires
 * @type {number}
 */
function randAttributsStrong() {

    $bodyPointMonster.value = Math.floor((Math.random() * 25)+1);
    $habilityPointMonster.value = Math.floor((Math.random() * 25)+1);
    $perceptionPointMonster.value = Math.floor((Math.random() * 25)+1);
    $spiritPointMonster.value = Math.floor((Math.random() * 25)+1);
    $powerPointMonster.value = Math.floor((Math.random() * 25)+1);
    $charismaPointMonster.value = Math.floor((Math.random() * 25)+1);

    return parseInt($bodyPointMonster.value),
        parseInt($habilityPointMonster.value),
        parseInt($perceptionPointMonster.value),
        parseInt($spiritPointMonster.value),
        parseInt($powerPointMonster.value),
        parseInt($charismaPointMonster.value);
}

/**
 * génere des valeus aléatoires
 * @type {number}
 */
function randAttributsMonster() {

    $bodyPointMonster.value = Math.floor((Math.random() * 40)+1);
    $habilityPointMonster.value = Math.floor((Math.random() * 40)+1);
    $perceptionPointMonster.value = Math.floor((Math.random() * 40)+1);
    $spiritPointMonster.value = Math.floor((Math.random() * 40)+1);
    $powerPointMonster.value = Math.floor((Math.random() * 40)+1);
    $charismaPointMonster.value = Math.floor((Math.random() * 40)+1);

    return parseInt($bodyPointMonster.value),
        parseInt($habilityPointMonster.value),
        parseInt($perceptionPointMonster.value),
        parseInt($spiritPointMonster.value),
        parseInt($powerPointMonster.value),
        parseInt($charismaPointMonster.value);
}


////////////////////
//--lancé de dés--//
////////////////////

/**
 * genere un nombre aléatoire
 * @returns {number}
 */
function randDice() {
    let $result = Math.floor((Math.random() * $diceInputs.value)+1);
    return $result;
}

/**
 * selectionne la case ou apparaitra le resultat
 * @param $nb
 * @returns {Element}
 */
function resultPlaceSet ($nb=0) {

        let $resultPlace = document.querySelector('#card-'+ $nb);
        return $resultPlace;

}

function randomColor()
{
    let lastDice1= $rollsInputs.value;
    let n = $couleurs.length;
    let c;

    c = Math.round(Math.random()*n);

    for (let number=0; number < lastDice1 ; number++) {

        resultPlaceSet (number).style.color = $couleurs[c];

    }

}

/**
 * Génere autant de nombre aléatoire que demandé.
 * Puis les place les dans leurs cases résultats.
 */
function numberOfRolls() {

    let lastDice= $rollsInputs.value;

    for (let nombre=0; nombre < lastDice ; nombre++) {

        resultPlaceSet (nombre).value = randDice();
        resultPlaceSet (nombre).innerText = resultPlaceSet (nombre).value;

    }

}

//////////////////
//Form Show-Hide//
//////////////////

function showHero(btn) {
    if (btn.checked) {
    document.getElementById('form-hero').style.display="block";
    document.getElementById('mid-left-is-hero').style.display="block";
    document.getElementById('form-pnj').style.display="none";
    document.getElementById('form-monster').style.display="none";
    document.getElementById('mid-left-is-monster').style.display="none";
    } else {
    document.getElementById('form-hero').style.display="none";
    document.getElementById('mid-left-is-hero').style.display="none";
    }
}

function showPnj(btn) {
    if (btn.checked) {
    document.getElementById('form-pnj').style.display="block";
    document.getElementById('mid-left-is-hero').style.display="block";
    document.getElementById('form-hero').style.display="none";
    document.getElementById('form-monster').style.display="none";
    document.getElementById('mid-left-is-monster').style.display="none";
    } else {
    document.getElementById('form-pnj').style.display="none";
    document.getElementById('mid-left-is-hero').style.display="none";
    }
}

function showMonster(btn) {
    if (btn.checked) {
    document.getElementById('form-monster').style.display="block";
    document.getElementById('mid-left-is-monster').style.display="block";
    document.getElementById('form-hero').style.display="none";
    document.getElementById('form-pnj').style.display="none";
    document.getElementById('mid-left-is-hero').style.display="none";
    } else {
    document.getElementById('form-monster').style.display="none";
    document.getElementById('mid-left-is-monster').style.display="none";
    }
}

//form adapt magic field//
function choosetMagic() {

    if (document.getElementById('form-magic').selectedIndex == 0) {
        document.getElementById('form-void').style.display="none";
        document.getElementById('form-imagination').style.display="none";
        document.getElementById('form-elements').style.display="none";
        document.getElementById('form-timespace').style.display="none";
        document.getElementById('form-life').style.display="none";
        document.getElementById('form-balance').style.display="none";
        document.getElementById('form-knowledge').style.display="none";
        document.getElementById('form-spells').style.display="none";
        document.getElementById('form-mastering').style.display="none";
    } else if (document.getElementById('form-magic').selectedIndex == 1) {
        document.getElementById('form-void').style.display="block";
        document.getElementById('form-imagination').style.display="none";
        document.getElementById('form-elements').style.display="none";
        document.getElementById('form-timespace').style.display="none";
        document.getElementById('form-life').style.display="none";
        document.getElementById('form-balance').style.display="none";
        document.getElementById('form-knowledge').style.display="none";
        document.getElementById('form-spells').style.display="block";
        document.getElementById('form-mastering').style.display="block";
    } else if (document.getElementById('form-magic').selectedIndex == 2) {
        document.getElementById('form-void').style.display="none";
        document.getElementById('form-imagination').style.display="block";
        document.getElementById('form-elements').style.display="none";
        document.getElementById('form-timespace').style.display="none";
        document.getElementById('form-life').style.display="none";
        document.getElementById('form-balance').style.display="none";
        document.getElementById('form-knowledge').style.display="none";
        document.getElementById('form-spells').style.display="block";
        document.getElementById('form-mastering').style.display="block";
    } else if (document.getElementById('form-magic').selectedIndex == 3) {
        document.getElementById('form-void').style.display="none";
        document.getElementById('form-imagination').style.display="none";
        document.getElementById('form-elements').style.display="block";
        document.getElementById('form-timespace').style.display="none";
        document.getElementById('form-life').style.display="none";
        document.getElementById('form-balance').style.display="none";
        document.getElementById('form-knowledge').style.display="none";
        document.getElementById('form-spells').style.display="block";
        document.getElementById('form-mastering').style.display="block";
    } else if (document.getElementById('form-magic').selectedIndex == 4) {
        document.getElementById('form-void').style.display="none";
        document.getElementById('form-imagination').style.display="none";
        document.getElementById('form-elements').style.display="none";
        document.getElementById('form-timespace').style.display="block";
        document.getElementById('form-life').style.display="none";
        document.getElementById('form-balance').style.display="none";
        document.getElementById('form-knowledge').style.display="none";
        document.getElementById('form-spells').style.display="block";
        document.getElementById('form-mastering').style.display="block";
    } else if (document.getElementById('form-magic').selectedIndex == 5) {
        document.getElementById('form-void').style.display="none";
        document.getElementById('form-imagination').style.display="none";
        document.getElementById('form-elements').style.display="none";
        document.getElementById('form-timespace').style.display="none";
        document.getElementById('form-life').style.display="block";
        document.getElementById('form-balance').style.display="none";
        document.getElementById('form-knowledge').style.display="none";
        document.getElementById('form-spells').style.display="block";
        document.getElementById('form-mastering').style.display="block";
    } else if (document.getElementById('form-magic').selectedIndex == 6) {
        document.getElementById('form-void').style.display="none";
        document.getElementById('form-imagination').style.display="none";
        document.getElementById('form-elements').style.display="none";
        document.getElementById('form-timespace').style.display="none";
        document.getElementById('form-life').style.display="none";
        document.getElementById('form-balance').style.display="block";
        document.getElementById('form-knowledge').style.display="none";
        document.getElementById('form-spells').style.display="block";
        document.getElementById('form-mastering').style.display="block";
    } else if (document.getElementById('form-magic').selectedIndex == 7) {
        document.getElementById('form-void').style.display="none";
        document.getElementById('form-imagination').style.display="none";
        document.getElementById('form-elements').style.display="none";
        document.getElementById('form-timespace').style.display="none";
        document.getElementById('form-life').style.display="none";
        document.getElementById('form-balance').style.display="none";
        document.getElementById('form-knowledge').style.display="block";
        document.getElementById('form-spells').style.display="block";
        document.getElementById('form-mastering').style.display="block";
    }
}

//Learn spell//

function showArraySpell(){
    document.getElementById('array-spell').style.display="block";
    document.getElementById('learn-spell').style.display="none";
  };

function hideArraySpell(){
    document.getElementById('array-spell').style.display="none";
    document.getElementById('learn-spell').style.display="block";
};

//Learn skill//

function showArraySkill(){
    document.getElementById('array-skill').style.display="block";
    document.getElementById('learn-skill').style.display="none";
  };

function hideArraySkill(){
    document.getElementById('array-skill').style.display="none";
    document.getElementById('learn-skill').style.display="block";
};

//Learn talent//

function showArrayTalent(){
    document.getElementById('array-talent').style.display="block";
    document.getElementById('learn-talent').style.display="none";
  };

function hideArrayTalent(){
    document.getElementById('array-talent').style.display="none";
    document.getElementById('learn-talent').style.display="block";
};
