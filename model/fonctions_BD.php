	<?php

	//Connexion à la base de donnée (fournie en paramètre) avec gestion d'erreur
	function connexion_BD($DB){
		try{

			$bdd = new PDO("mysql:host=localhost;dbname=$DB;charset=utf8", "root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e)
		{
			die("Erreur : ".$e->getMessage());
		}
		return $bdd;
	}

	// Fonction qui retourn un tableau avec tous les Comics d'une certaine table
	// * Reçoit en paramètre la table contenant les Comics
	function tout_comics($table_comics1, $table_comics2){

		$bdd=connexion_BD('projetLion');

		//Recherche tous les Comics de la table marvel_now et dc_comics
		$reponse = $bdd->query("SELECT cover,titre,id,tome,collection FROM $table_comics1 ORDER BY titre,tome ");

		// place dans un array tous les comics trouvés
		while ($donnees = $reponse->fetch())
		{
			$comics[] = $donnees;
			
		}

		$reponse = $bdd->query("SELECT cover,titre,id,tome,collection FROM $table_comics2 ORDER BY titre,tome ");

		// place dans un array tous les comics trouvés
		while ($donnees = $reponse->fetch())
		{
			$comics[] = $donnees;
			
		}

		$reponse->closeCursor();

		return $comics;

	}

	//Fonction qui rercherche des comics avec un mot clé fournit en paramètre
	function recherche_comics($cle){  

		$cle=htmlspecialchars($cle);

		$bdd=connexion_BD('projetLion');

		//Recherche tous les Comics de la table marvel_now
		$reponse = $bdd->query("SELECT cover,titre,id,tome,collection FROM marvel_now WHERE mots_cles LIKE '%$cle%' ORDER BY titre,tome ");

		// place dans un array tous les comics trouvés
		while ($donnees = $reponse->fetch())
		{
			$comics[] = $donnees;
			
		}
		$reponse = $bdd->query("SELECT cover,titre,id,tome,collection FROM dc_comics WHERE mots_cles LIKE '%$cle%' ORDER BY titre,tome ");

		// place dans un array tous les comics trouvés
		while ($donnees = $reponse->fetch())
		{
			$comics[] = $donnees;
			
		}

		$reponse->closeCursor();

		if(isset($comics)) {return $comics;}

	}

	//Retourne un tableau avec toutes les information sur un certain comics
	//* Reçoit en paramètre l'identifiant du comics donc on veut les informations
	function info_comic($id,$collection){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT id,cover,description,collection,titre,tome FROM $collection WHERE `id`= '$id' ");

		while ($donnees = $reponse->fetch())
		{
			$comic[] = $donnees;
			
		}

		$reponse->closeCursor();

		return $comic;

	}

	//Fonction qui ajoute un nouvel utilisateur dans la table login_users
	function ajouter_user($nom, $prenom, $email, $password, $cle_d_activation, $actif, $newsletter){

		$bdd=connexion_BD('projetLion');

		      //Ajout de l'utilisateur dans la table login_users
		$req = $bdd->prepare('INSERT INTO login_users(nom, prenom, email, password, cle_d_activation, actif, newsletter) VALUES(:nom, :prenom, :email, :password, :cle_d_activation, :actif, :newsletter)');
		$req->execute(array(
			'nom' => $nom,
			'prenom' => $prenom,
			'email' => $email,
			'password' => $password,
			'cle_d_activation' => $cle_d_activation,
			'actif' => $actif,
			'newsletter' => $newsletter
			));

		
	}


	//Fonction qui retourne l'identifiant (clé primaire dans la table login_users) d'un utlisateur
	// * reçoit en paramètre l'adresse e-mail de l'utilisateur
	function get_id_user($email){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT id FROM `login_users` WHERE email = '$email' ");

		while ($donnees = $reponse->fetch())
		{

			$id=$donnees['id'];

		}

		$reponse->closeCursor();
		
		
		return $id;

	}

	//Fonction qui retourne vrai si le login (e-mail) existe déjà dans la table login_users
	// * reçoit en paramètre une adresse mail
	function user_existe($email){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM login_users WHERE email='$email'");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre']>0;

	}

	//Fonction qui initialise une série de variable superglobale qui pourront être utlisées pendant toute la durée de connexion de l'utilisateur
	function session_var($email){

		$bdd=connexion_BD('projetLion');

      //recherche les données de l'utilisateur connecté
		$reponse = $bdd->query("SELECT id,prenom,nom,droits FROM login_users WHERE email='$email'");

        //Initialisation de variables globales utilisables pendant toute la durée de la connexion de l'utilisateur
		while ($donnees = $reponse->fetch())
		{
			
			$_SESSION['id'] = $donnees['id'];
			$_SESSION['nom'] = $donnees['nom'];
			$_SESSION['prenom'] = $donnees['prenom'];
			$_SESSION['admin'] = $donnees['droits'];

		}
		$reponse->closeCursor();

        //autre(s) variable(s) globale(s) qui pourront être utilisée(s)
		$_SESSION['login']=$email;    
	}

	//Fonction qui vérifie si le login + password corresponde à une entrée valide dans la table des utilisateurs
	function verif_MDP_connexion($email,$mot_de_passe){

		$bdd=connexion_BD('projetLion');

	    // Vérification de l'identifiant côté server
		$req = $bdd->prepare('SELECT id FROM login_users WHERE email = :email AND password = :mot_de_passe AND actif = 1');

		$req->execute(array(
			'email' => $email,
			'mot_de_passe' => $mot_de_passe));

		$resultat = $req->fetch();

		return $resultat;
	}

	//fonction qui récupère les comics de l'utilisateur
	Function mes_comics($id_user){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT cover,titre,collection,id,tome FROM marvel_now,collection_users WHERE collection_users.table_comics=marvel_now.collection AND collection_users.id_user=$id_user AND marvel_now.id = collection_users.id_comics ORDER BY titre,tome ");

		while ($donnees = $reponse->fetch())
		{
			$mes_comics[] = $donnees;
		}

		$reponse = $bdd->query("SELECT cover,titre,collection,id,tome FROM dc_comics,collection_users WHERE collection_users.table_comics=dc_comics.collection AND collection_users.id_user=$id_user AND dc_comics.id = collection_users.id_comics ORDER BY titre,tome ");

		while ($donnees = $reponse->fetch())
		{
			$mes_comics[] = $donnees;
		}

		$reponse->closeCursor();
		return $mes_comics;

	}


	//Fonction qui retourne le nombre de comics que possède un utilisateur
	// * Reçoit en paramètre le nom de la table (de collection) de l'utilisateur
	function nombre_comics($id_user){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM collection_users WHERE id_user=$id_user");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre'];
	}

	//fonction qui vérifie si l'utilisateur a un certain Comics dans sa collection retourne vrai dans l'affirmative
	function aComics($id_comics_aVerif,$collection){

		$id_user=$_SESSION['id'];

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM `collection_users` WHERE `id_user`='$id_user' AND `table_comics`='$collection' AND `id_comics`='$id_comics_aVerif' ");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre']>=1;

	}

	//Fonction qui ajoute un comics dans la table de l'utilisateur
	//* Reçoit en paramètre l'id du comics à ajouter 
	Function ajouter_dans_table($id_comics,$table_comics){
		
		$id_user=$_SESSION['id'];
		$bdd=connexion_BD('projetLion');

		$bdd->query(
			"INSERT INTO `collection_users` ( `id_user`, `id_comics`, `table_comics`) VALUES ('$id_user', '$id_comics', '$table_comics');"
			);
	}

	//Fonction qui supprime un comics dans la table de l'utilisateur 
	// * Reçoit en paramètre l'id du comics à supprimer
	Function supprimer_dans_table($id_comics,$collection){

		$bdd=connexion_BD('projetLion');

		$id_user=$_SESSION['id'];

		$bdd->query(
			"DELETE FROM `collection_users` WHERE `id_user` = $id_user AND `id_comics` = $id_comics AND `table_comics`='$collection'  ;"
			);
	}

	//fonctions qui modifient les données de l'utilisateurs
	function modification_user_infos($login,$nom,$prenom){

		$bdd=connexion_BD('projetLion');
		//update des champs nom et prénom
		$bdd->query("UPDATE `login_users` SET `nom` = '$nom' WHERE login_users.email = '$login' " );
		$bdd->query("UPDATE `login_users` SET `prenom` = '$prenom' WHERE login_users.email = '$login' " );

	}
	//Fonction qui recherche toutes les données de l'utilisateur
	// * Reçoit en paramètre le login (e-mail) de l'utilisateur
	function donnees_user($login){
		
		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT id,nom,prenom,newsletter FROM `login_users` WHERE email = '$login'");

		return $reponse;

	}

	//retourne le nombre d'utilisateurs inscrit dans la table (login_users) 
	function nombre_utilisateurs(){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM login_users");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre'];

	}

	//Fonction qui affiche un tableau avec les données des utilisateurs
	function table_users(){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT id,nom,prenom,email,newsletter,actif,droits FROM `login_users`");
		while ($donnees = $reponse->fetch())
		{
			$users[] = $donnees;
			
		}

		$reponse->closeCursor();

		return $users;

	}

//retourne l'ensemble des comics de la table marvel_now
	function table_comics(){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT id,titre,collection,cover,description FROM `marvel_now`");
		while ($donnees = $reponse->fetch())
		{

			$table_comics[] = $donnees;
		}
		$reponse = $bdd->query("SELECT id,titre,collection,cover,description FROM `dc_comics`");
		while ($donnees = $reponse->fetch())
		{

			$table_comics[] = $donnees;
		}


		$reponse->closeCursor();

		return $table_comics;
	}

//fonction qui active un compte utilisateur
//Reçoit en paramètre l'e-mail de l'utilisateur et son code d'activation
	function activerCompte($activation,$email){

		$bdd=connexion_BD('projetLion');

		//update des champs nom et prénom
		$bdd->query("UPDATE `login_users` SET `actif` = 1 WHERE login_users.email = '$email' AND login_users.cle_d_activation = '$activation' " );
	}

//fonction qui retourne vrai si un utilisdteur est noté actif dans la table login_users
// L'E-mail de l'utilisateur est passé en paramètre
	function est_Actif($email){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT actif FROM `login_users` WHERE email = '$email' ");
		
		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['actif'];

	}

//Fonction qui modifie les droits admion d'un utilisateurs
//Reçoit en paramètre l'id de l'utilisateur et la nouvelle valeur de droits dans la table login_users
	function modifier_droits($user,$droits){
		$bdd=connexion_BD('projetLion');
		//update du champ droits
		$bdd->query("UPDATE `login_users` SET `droits` = '$droits' WHERE login_users.id = '$user' " );

	}


//focntion qui permet à un admin d'ajouter ou modifier les champs d'un comics dans la table marvel_now
	function admin_ajouter_comics($titre,$tome,$collection,$cover,$description,$mots_cles){

		$bdd=connexion_BD('projetLion');

		$req = $bdd->prepare("INSERT INTO $collection(titre,tome,collection,cover,description,mots_cles) VALUES(:titre,:tome,:collection,:cover,:description,:mots_cles)");
		$req->execute(array(
			'titre' => $titre,
			'tome' => $tome,
			'collection' => $collection,
			'cover' => $cover,
			'description' => $description,
			'mots_cles' => $mots_cles
			));


	}

//fonction qui permet à un admin de supprimer un comics d'une table
	function admin_supprimer_comics($table,$id){

		$bdd=connexion_BD('projetLion');

		$bdd->query(
			"DELETE FROM $table WHERE id=$id;"
			);

	}
//Fonction qui retourne vrai si l'identifiant utilisateur existe dans la table login_users
	// * reçoit en paramètre un id 
	function id_user_existe($id){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM login_users WHERE id='$id'");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre']>0;

	}

//Fonction qui vérifie l'i d'un comics existe dans une certaine table
	function comics_existe($id,$collection){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM $collection WHERE id='$id'");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre']>0;

	}

//fonction qui vérifie si une collection est valable ou non
	function collection_existe($collection){
		switch($collection){
			case 'marvel_now':	return true;
			break;
			case 'dc_comics' :	return true;
			break;
			default: return false;
		}
	}


//fonction qui retourne un objet de données des news
	function rechercher_news(){
		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT id,laDate,article,auteur FROM `news` ORDER BY laDate DESC");

		while ($donnees = $reponse->fetch())
		{

			$news[] = $donnees;
		}


		$reponse->closeCursor();
	
		return $news;
	}

	function ajouter_news($laDate,$article){
		
		$bdd=connexion_BD('projetLion');

		$req = $bdd->prepare("INSERT INTO news(laDate,article,auteur) VALUES(:laDate,:article,:auteur)");
		$req->execute(array(
			'laDate' => $laDate,
			'article' => $article,
			'auteur' => $_SESSION['prenom']
			));
	}

//Fonction qui retourne vrai si une news ayant l'id fournit en param est bien présent dans la table news
	function existe_news($news_id){
		
		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM news WHERE id='$news_id'; ");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre']>0;

	}

//Fonction qui supprime une news si elle existe retourne vrai si suppression effectuée
	function supprimer_news($news_id){

		if(existe_news($news_id)){

			$bdd=connexion_BD('projetLion');

			$bdd->query(
				"DELETE FROM `news` WHERE `id` = $news_id ;"
				);


			return true;
		}
		else return false;

	}

	//Fonction qui retourne vrai si 2 mots de passe sont identiques et font minimum 8 charactères de long
	function mdp_egale_mdp($mdp1,$mdp2){
		return ($mdp1==$mdp2 && long_mdp($mdp1));

	}

	//fonction qui vérifie la longueur minimum d'un mot de passe
	function long_mdp($mdp){
		return strlen($mdp) >=8;
	}

	//fonction qui modifie le mot de passe d'un utilisateur
	function changement_mdp($mdp){

		$mdp=sha1($mdp);
		$email=$_SESSION['login'];

		$bdd=connexion_BD('projetLion');
		//update des champs nom et prénom
		$bdd->query( "UPDATE `login_users` SET `password` = '$mdp' WHERE `email` = '$email' " );

	}

	//Vérifie qu'il y a bien des news dans la table news retourne faux si non
	function news_are_ok(){

		$bdd=connexion_BD('projetLion');

		$reponse = $bdd->query("SELECT COUNT(*) as nombre FROM news ; ");

		$donnees = $reponse->fetch();
		$reponse->closeCursor();
		
		return $donnees['nombre']>0;
	}