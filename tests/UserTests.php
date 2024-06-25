<?php
use PHPUnit\Framework\TestCase;

require_once './controller/account.php'; 

class UserTests extends TestCase
{
    private $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=Imaluu', 'root', 'root');
        $this->pdo->exec("DELETE FROM user");
    }

    public function testRegistrationWithValidData()
    {
        $pseudo = 'testuser';
        $email = 'testuser@tests.com';
        $mdp = 'password';

        $erreur = registerUser($this->pdo, $pseudo, $email, $mdp);

        $this->assertFalse($erreur);
        $this->assertCount(1, $this->pdo->query("SELECT * FROM user")->fetchAll());
    }

    public function testRegistrationWithShortPassword()
    {
        $pseudo = 'testuser';
        $email = 'testuser@test.com';
        $mdp = 'mdp';

        $erreur = registerUser($this->pdo, $pseudo, $email, $mdp);

        $this->assertTrue($erreur);
    }

    public function testLoginWithValidData()
    {
        $pseudo = 'testuser';
        $email = 'testuser@test.com';
        $mdp = 'password';
        registerUser($this->pdo, $pseudo, $email, $mdp);

        $user = loginUser($this->pdo, $pseudo, $mdp);

        $this->assertNotEmpty($user);
        $this->assertEquals($pseudo, $user['pseudo']);
    }

    public function testLoginWithInvalidPassword()
    {
        $pseudo = 'testuser';
        $email = 'testuser@test.com';
        $mdp = 'password';
        registerUser($this->pdo, $pseudo, $email, $mdp);

        $user = loginUser($this->pdo, $pseudo, 'wrongpassword');

        $this->assertEmpty($user);
    }
}

function registerUser($pdo, $pseudo, $email, $mdp)
{
    $erreur = false;

    $taille_pseudo = iconv_strlen($pseudo);
    if($taille_pseudo < 3 || $taille_pseudo > 20) {
        $erreur = true;
    } 

    $verif_caracteres = preg_match('#^[A-Za-z0-9]+$#', $pseudo);
    if($verif_caracteres != true) {
        $erreur = true;
    }

    $verif_pseudo = $pdo->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
    $verif_pseudo->bindParam(':pseudo', $pseudo,PDO::PARAM_STR);
    $verif_pseudo->execute();
    if($verif_pseudo->rowCount() > 0) {
        $erreur = true;
    }

    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = true;
    }

    $verif_mail = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $verif_mail->bindParam(':email', $email,PDO::PARAM_STR);
    $verif_mail->execute();
    if($verif_mail->rowCount() > 0) {
        $erreur = true;
    }

    if(iconv_strlen($mdp) < 4) {
        $erreur = true;
    } 

    if($erreur == false) {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $enregistrement = $pdo->prepare("INSERT INTO user (pseudo, mdp, email, statut) VALUES (:pseudo, :mdp, :email, 1)");
        $enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $enregistrement->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $enregistrement->bindParam(':email', $email, PDO::PARAM_STR);
        $enregistrement->execute();
    }

    return $erreur;
}

function loginUser($pdo, $pseudo, $mdp)
{
    $connexion = $pdo->prepare("SELECT id_user, pseudo, mdp, email, statut FROM user WHERE pseudo = :pseudo");
    $connexion->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $connexion->execute();

    if($connexion->rowCount() > 0) {
        $infos = $connexion->fetch(PDO::FETCH_ASSOC);
        if(password_verify($mdp, $infos['mdp'])) {
            return $infos;
        }
    }

    return null;
}
