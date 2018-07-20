<?php
require "connexion.php";

class name
{
    private $mail;
    private $name;

    public function __construct($mail, $name)
    {
        $this->mail = strip_tags($mail);
        $this->name = strip_tags($name);
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function newname()
    {
        $sql = $GLOBALS['bdd']->prepare("UPDATE membre SET prenom=:prenom WHERE email=:email");
        $sql->bindParam(":email", $this->mail, PDO::PARAM_STR);
        $sql->bindParam(":prenom", $this->name, PDO::PARAM_STR);
        $sql->execute();
        $sql->closeCursor();
    }
}

if (isset($_POST['prenom']) && $_POST['prenom'] != null)
{
    $name = new name($_SESSION['mail'], $_POST['prenom']);
    $name->newname();
}

class surname
{
    private $mail;
    private $surname;

    public function __construct($mail, $surname)
    {
        $this->mail = strip_tags($mail);
        $this->surname = strip_tags($surname);
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->surname;
    }

    public function setName($surname)
    {
        $this->surname = $surname;
    }

    public function newsurname()
    {
        $sql = $GLOBALS['bdd']->prepare("UPDATE membre SET nom=:nom WHERE email=:email");
        $sql->bindParam(":email", $this->mail, PDO::PARAM_STR);
        $sql->bindParam(":nom", $this->surname, PDO::PARAM_STR);
        $sql->execute();
        $sql->closeCursor();
    }
}

if (isset($_POST['nom']) && $_POST['nom'] != null)
{
    $surname = new surname($_SESSION['mail'], $_POST['nom']);
    $surname->newsurname();
}

class naissance
{
    private $mail;
    private $naissance;

    public function __construct($mail, $naissance)
    {
        $this->mail = strip_tags($mail);
        $this->naissance = strip_tags($naissance);
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->naissance;
    }

    public function setName($naissance)
    {
        $this->naissance = $naissance;
    }

    public function newnaissance()
    {
        $sql = $GLOBALS['bdd']->prepare("UPDATE membre SET date_naissance=:naissance WHERE email=:email");
        $sql->bindParam(":email", $this->mail, PDO::PARAM_STR);
        $sql->bindParam(":naissance", $this->naissance, PDO::PARAM_INT);
        $sql->execute();
        $sql->closeCursor();
        $query = $GLOBALS['bdd']-> prepare("SELECT DATEDIFF(DATE(NOW()),membre.date_naissance) AS 'age' FROM membre 
                      WHERE email=:mail");
        $query->bindParam(":mail", $this->mail, PDO::PARAM_STR);
        $query->execute();
        $age = $query->fetchAll();
        $majeur = floor(intval($age[0]['age']) / 365);
        $query->closeCursor();
        if ($majeur < 18) {
            echo "mineur";
            header('Location: ./../index.php');
///////////////echo "Vous êtes mineur";///////////////////////////////Mettre une alert à la place///////////////////////
        }
    }
}

if (isset($_POST['naissance']) && $_POST['naissance'] != null)
{
    $naissance = new naissance($_SESSION['mail'], $_POST['naissance']);
    $naissance->newnaissance();
}

class sexe
{
    private $mail;
    private $sexe;

    public function __construct($mail, $sexe)
    {
        $this->mail = strip_tags($mail);
        $this->sexe = strip_tags($sexe);
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->sexe;
    }

    public function setName($sexe)
    {
        $this->sexe = $sexe;
    }

    public function newsexe()
    {
        $sql = $GLOBALS['bdd']->prepare("UPDATE membre SET sexe=:sexe WHERE email=:email");
        $sql->bindParam(":email", $this->mail, PDO::PARAM_STR);
        $sql->bindParam(":sexe", $this->sexe, PDO::PARAM_STR);
        $sql->execute();
        $sql->closeCursor();
    }
}

if (isset($_POST['sexe']) && $_POST['sexe'] != null) {
    $sexe = new sexe($_SESSION['mail'], $_POST['sexe']);
    $sexe->newsexe();
}

class ville
{
    private $mail;
    private $ville;

    public function __construct($mail, $ville)
    {
        $this->mail = strip_tags($mail);
        $this->ville = strip_tags($ville);
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->ville;
    }

    public function setName($ville)
    {
        $this->ville = $ville;
    }

    public function newville()
    {
        $sql = $GLOBALS['bdd']->prepare("UPDATE membre SET ville=:ville WHERE email=:email");
        $sql->bindParam(":email", $this->mail, PDO::PARAM_STR);
        $sql->bindParam(":ville", $this->ville, PDO::PARAM_STR);
        $sql->execute();
        $sql->closeCursor();
    }
}

if (isset($_POST['ville']) && $_POST['ville'] != null) {
    $ville = new ville($_SESSION['mail'], $_POST['ville']);
    $ville->newville();
}

class mail
{
    private $mail;
    private $email;

    public function __construct($mail, $email)
    {
        $this->mail = strip_tags($mail);
        $this->email = strip_tags($email);
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->email;
    }

    public function setName($email)
    {
        $this->email = $email;
    }

    public function newmail()
    {
        $sql = $GLOBALS['bdd']->prepare("UPDATE membre SET email=:mail WHERE email=:email");
        $sql->bindParam(":mail", $this->email, PDO::PARAM_STR);
        $sql->bindParam(":email", $this->mail, PDO::PARAM_STR);
        $sql->execute();
        $sql->closeCursor();
//        session_unset();
//        session_destroy();
//        header('Location: ./../index.php');
    }
}

if (isset($_POST['email']) && $_POST['email'] != null) {
    $email = new mail($_SESSION['mail'], $_POST['email']);
    $email->newmail();
}