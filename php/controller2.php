<?php
    if(isset($_POST["dateNaissance"]))
    {
        $dateDuJour = date('Y-m-d');
        $dateNaissance = $_POST["dateNaissance"];
        $diff = $dateDuJour - $dateNaissance;

        if($diff >= 18)
        {
            $age = $diff;
            echo '<script>alert("Vous êtes autorisé à accéder au contenu privé, vous avez '.$age.' ans."); window.location.href="/../index.html"</script>';
        }
        else
        {
            $age = $diff;
            echo '<script>alert("Vous n\'êtes pas autorisé à accéder au contenu privé, vous n\'avez que '.$age.' ans."); window.location.href="/../index.html"</script>';
        }
    }

?>