<?php
include '../connexion.php';


if (isset($_POST['id']))
{
    $id=$_POST['id'];
    $sql= "select * from departement WHERE CODE_ETA ='$id'";
    $query=mysqli_query($ma_connexion,$sql) ;

    if(mysqli_num_rows($query) == 0)
    {
        echo '<option>Aucun resultat</ption>';
    }else{
        while($row = mysqli_fetch_assoc($query))
        {
            ?>
            <option value="0" disabled="" selected="true">--selectionnez un departement--</option>
            <option value="<?php echo $row['CODE_DEPT']; ?>"><?php echo $row['NOM_DEPT']; ?></option>
            <?php
        }
    }
}else{

    echo '<option>Error</option>';
}

