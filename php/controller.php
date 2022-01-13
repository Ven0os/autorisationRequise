<?php
    if(isset($_POST["age"]))
    {
        if($_POST["age"] >= 18)
        {
            $age = $_POST["age"];
            echo '<script>alert("Vous êtes autorisé à accéder au contenu privé, vous avez '.$age.' ans."); window.location.href="/../suite.html"</script>';
        }
        else
        {
            $age = $_POST["age"];
            echo '<script>alert("Vous n\'êtes pas autorisé à accéder au contenu privé, vous n\'avez que '.$age.' ans."); window.location.href="/../index.html"</script>';
        }
    }
?>