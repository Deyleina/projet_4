<?php

/**
 * Classe Connexion
 *
 * Singleton permettant de se connecter à la base de donnée, utilisée par toutes 
 * les classes qui ont besoin d'un accès à la base de donnée.  
 * Il y a de renseigner à l'interieur:
 * <ul>
 *     <li>le type de base de donnée (mysql, sqllite, ...)</li>
 *     <li>le nom de la base de donnée</li>
 *     <li>le login et le mot de passe utilisateur du serveur SQL</li>
 * </ul>
 *
 * Cette classe ne permet que l'instanciation d'un objet PDO pour se connecter à la base de donnée.
 * Vous pouvez utiliser cette classe comme ceci:
 * <pre>
 *  $db = connexion::getInstance();
 *  $con = $db->getDbh();
 * </pre>
 *
 * @link http://fr3.php.net/manual/fr/book.pdo.php classe PDO
 *
 * @author Benjamin Besse
 * @version 0.4
 * @package Connexion
 * @copyright Benjamin Besse
 * @todo
 * <ul>
 *     <li>0.1: création de la classe Connexion</li>
 *     <li>0.2: passage de la classe en design patern singleton</li>
 *     <li>0.3: ajout de l'encodage par défaut en UTF-8 à la lecture</li>
 *     <li>0.4: ajout d'un try cath pour la gestion d'erreur au niveau de la connexion à la base de donnée</li>
 * </ul>
 */

class connexion
{
    /**
     * Instance de la classe connexion
     * @access private
     * @var connexion
     * @see getInstance
     */
    private static $instance;

    /**
     * Type de la base de donnée.
     * @access private
     * @var string
     * @see __construct
     */
    private $type = "mysql";

    /**
     * Adresse du serveur hôte.
     * @access private
     * @var string
     * @see __construct
     */
    private $host = "db715555109.db.1and1.com";

    /**
     * Nom de la base de donnée.
     * @access private
     * @var string
     * @see __construct
     */
    private $dbname = "db715555109";

    /**
     * Nom d'utilisateur pour la connexion à la base de données
     * @access private
     * @var string
     * @see __construct
     */
    private $username = "dbo715555109";

    /**
     * Mot de passe pour la connexion à la base de donnée
     * @access private
     * @var string
     * @see __construct
     */
    private $password = '6%$65aYt&GTy';

    private $bdd;

    /**
     * Lance la connexion à la base de donnée en le mettant
     * dans un objet PDO qui est stocké dans la variable $dbh
     * @access private
     */
    private function __construct()
    {
        try{
            $this->bdd = new PDO(
                $this->type.':host='.$this->host.'; dbname='.$this->dbname, 
                $this->username, 
                $this->password,
                array(PDO::ATTR_PERSISTENT => true)
            );

            $req = "SET NAMES UTF8";
            $result = $this->bdd->prepare($req);
            $result->execute();
        }
        catch(PDOException $e){
            echo 'Informations : [', $e->getCode(), '] ', $e->getMessage();
            die();
        }
    }

    /**
     * Regarde si un objet connexion a déjà été instancier,
     * si c'est le cas alors il retourne l'objet déjà existant
     * sinon il en créer un autre.
     * @return $instance
     */
    public static function getInstance()
    {
        if (!self::$instance instanceof self)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * Permet de récuprer l'objet PDO permettant de manipuler la base de donnée
     * @return $dbh
     */
    public function getDbh()
    {
        return $this->bdd;
    }
}