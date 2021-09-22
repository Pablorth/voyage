/**Listeners **/

/**
 * prend en compte le changement de bodyPoint.
 */
$bodyPoint.addEventListener('change', function() {
    verificationInputs();
    upDateLifePoint();
    upDateDamageBonus();
    upDateInjuryLevel();
});

/**
 * prend en compte le changement de habilityPoint.
 */
$habilityPoint.addEventListener('change', function() {
    verificationInputs();
    upDateReacSpeed();
    upDateDamageBonus();
});

/**
 * prend en compte le changement de perceptionPoint.
 */
$perceptionPoint.addEventListener('change', function() {
    verificationInputs();
    upDateReacSpeed();
});

/**
 * prend en compte le changement de spiritPoint.
 */
$spiritPoint.addEventListener('change', function() {
    verificationInputs();
    upDatePerkPoint();
    upDateInjuryLevel();
    upDateSocialBonus();
});

/**
 * prend en compte le changement de powerPoint.
 */
$powerPoint.addEventListener('change', function() {
    verificationInputs();
    upDateManaPoint();
});

/**
 * prend en compte le changement de charismaPoint.
 */
$charismaPoint.addEventListener('change', function() {
    verificationInputs();
    upDateSocialBonus();
});

/**
 * prend en compte le clique sur le boutopn aléatoire.
 */
$randButton.addEventListener('click', function () {
    randAttributs();
    upDateLifePoint();
    upDateManaPoint();
    upDateReacSpeed();
    upDateDamageBonus();
    upDateSocialBonus();
    upDateInjuryLevel();
    upDatePerkPoint();
})

/**
 * prend en compte le clique sur le boutopn aléatoire.
 */
$randButtonWeak.addEventListener('click', function () {
    randAttributsWeak();
    upDateLifePointMonster();
    upDateManaPointMonster();
    upDateReacSpeedMonster();
    upDateDamageBonusMonster();
    upDateSocialBonusMonster();
    upDateInjuryLevelMonster();
    upDatePerkPointMonster();
})

/**
 * prend en compte le clique sur le boutopn aléatoire.
 */
$randButtonNormal.addEventListener('click', function () {
    randAttributsNormal();
    upDateLifePointMonster();
    upDateManaPointMonster();
    upDateReacSpeedMonster();
    upDateDamageBonusMonster();
    upDateSocialBonusMonster();
    upDateInjuryLevelMonster();
    upDatePerkPointMonster();
})

/**
 * prend en compte le clique sur le boutopn aléatoire.
 */
$randButtonStrong.addEventListener('click', function () {
    randAttributsStrong();
    upDateLifePointMonster();
    upDateManaPointMonster();
    upDateReacSpeedMonster();
    upDateDamageBonusMonster();
    upDateSocialBonusMonster();
    upDateInjuryLevelMonster();
    upDatePerkPointMonster();
})

/**
 * prend en compte le clique sur le boutopn aléatoire.
 */
$randButtonMonster.addEventListener('click', function () {
    randAttributsMonster();
    upDateLifePointMonster();
    upDateManaPointMonster();
    upDateReacSpeedMonster();
    upDateDamageBonusMonster();
    upDateSocialBonusMonster();
    upDateInjuryLevelMonster();
    upDatePerkPointMonster();
})

/**
 * prend en compte le changement de bodyPoint.
 */
$bodyPointMonster.addEventListener('change', function() {
    verificationInputsMonster();
    upDateLifePointMonster();
    upDateDamageBonusMonster();
    upDateInjuryLevelMonster();
});

/**
 * prend en compte le changement de habilityPoint.
 */
$habilityPointMonster.addEventListener('change', function() {
    verificationInputsMonster();
    upDateReacSpeedMonster();
    upDateDamageBonusMonster();
});

/**
 * prend en compte le changement de perceptionPoint.
 */
$perceptionPointMonster.addEventListener('change', function() {
    verificationInputsMonster();
    upDateReacSpeedMonster();
});

/**
 * prend en compte le changement de spiritPoint.
 */
$spiritPointMonster.addEventListener('change', function() {
    verificationInputsMonster();
    upDatePerkPointMonster();
    upDateInjuryLevelMonster();
    upDateSocialBonusMonster();
});

/**
 * prend en compte le changement de powerPoint.
 */
$powerPointMonster.addEventListener('change', function() {
    verificationInputsMonster();
    upDateManaPointMonster();
});

/**
 * prend en compte le changement de charismaPoint.
 */
$charismaPointMonster.addEventListener('change', function() {
    verificationInputsMonster();
    upDateSocialBonusMonster();
});

/**
 * prend en compte le clique sur le boutopn aléatoire.
 */
$randButtonMonster.addEventListener('click', function () {
    randAttributsMonster();
    upDateLifePointMonster();
    upDateManaPointMonster();
    upDateReacSpeedMonster();
    upDateDamageBonusMonster();
    upDateSocialBonusMonster();
    upDateInjuryLevelMonster();
    upDatePerkPointMonster();
})
/**
 * lance les des
 */
$rollButton.addEventListener('click', function () {
    numberOfRolls();
    randomColor();
});

//////////////////
//Form hide-show//
//////////////////



