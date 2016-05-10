<?php
session_start(); //permet de gérer les sessions utilisateurs.
//session_destroy();//permet de detruire la session
include_once ('class/class_annonce.php');
include_once ('class/classAnnonceManager.php');
include_once ('class/class_MessageContact.php');
include_once('class/class_UsersManager.php');
include ('class/class_user.php');

include_once ('fonction.php');
$oPDO = connectDB();
$oUsersManager = new UserManager($oPDO);
$oAnnonceManager = new AnnonceManager($oPDO);

if (isset($_GET['delete_ann'])) {
    $id = intval($_GET['delete_ann']);
    if ($id > 0) {
        $delete = new AnnonceManager($oPDO);
        $delete->delete($id);
    }
}

$oAnManager = new AnnonceManager($oPDO);

include_once ('database/data.php');
include_once ('include/traitement.php');


//include_once 'include/ajax.php';
logIP();
?>
<!doctype html>
<html>

    <head>
        <?php include_once 'include/entete.php'; ?>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    </head>

    <body>


        <?php
        // affichage de l'objet annonce
        //$oAnnonce=new Annonce;
        //	print_r($oAnnonce);

        include_once 'include/header.php';

        echo '<div id="content">';
        //menu insérer

        $page = '';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        if (!file_exists('views/corps' . ucfirst($page) . '.php')) {
            $page = 'views/corpsHome.php';
        } else {
            $page = 'views/corps' . ucfirst($page) . '.php';
        }

        include_once ($page);


        echo '</div>';
        include_once 'include/footer.php';
        echo '<pre>';
        //print_r($date);
        //print_r($heure);
        //print_r( $_SERVER);
        //print_r($homeajax);

        echo '</pre>';
        ?>
        <script type="text/javascript">
            $("#homeajax").on('click', function () {
<!--Query-->
                $.ajax({
                    async: true,
                    type: 'POST',
                    url: "ajax.php",
                    data: "action=home",
                    error: function (errorData) {

                    },
                    success: function (data) {
                        $('#content').html(data);
                    }

                });
            });
            $("#contactajax").on('click', function () {
<!--Query-->
                $.ajax({
                    async: true,
                    type: 'POST',
                    url: "ajax.php",
                    data: "action=contact",
                    error: function (errorData) {

                    },
                    success: function (data) {
                        $('#content').html(data);
                    }

                });
            });
        </script>

    </body>


</html>
