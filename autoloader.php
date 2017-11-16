<?php

namespace Cosplay;

class Autoloader {
	static function register() {
		spl_autoload_register(array(__class__, 'autoload'));
	}

	static function autoload($class) {
		$class = str_replace(__NAMESPACE__, '', $class);
		var_dump($class);
		require 'Controleur/' .$class . '.php';
	}
}

// Fonction autoload (ne peut être déclarée qu'une seule fois) qui prend en paramètre le nom de la classe, explique à PHP comment charger telle ou telle classe. Donc on a un require du dossier Controleur, suivi du fichier qui correspond.

// Fonction register qui prend en paramètre la fonction que l'on souhaite appelé pour enregistrer et pour créer l'autoloader (donc la fonction autoload).

// Fonctions statiques, car il n'y a pas besoin d'instancier cette classe.