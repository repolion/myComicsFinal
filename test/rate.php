<?php eval($plxShow->callHook('rating_bar', array('8', $plxMotor->plxRecord_arts->f('numero') ))); ?> - 10 étoiles (default), ID égal à 8
<?php eval($plxShow->callHook('rating_bar', array('8xxa', $plxMotor->plxRecord_arts->f('numero'),'5' ))); ?> - 5 étoiles, ID égal à 8xxa
<?php eval($plxShow->callHook('rating_bar', array('9a', $plxMotor->plxRecord_arts->f('numero'),'5','static' ))); ?> - 5 étoiles, ID égale à 9a, static (arrêt des votes)