<?php


$rcexdata = $object->explor_manage();



if(isset($_GET['exdelete'])){
    if($_GET['exdelete']=="delete"){
        $id = $_GET['id'];
       $mes = $object->explordelete($id);
    }
}




?>



<h2 class="my-3 text-center">Manage Your explor NFTs</h2>

<?php  if(isset($mes)) {echo $mes;}  ?>

<div class="container m-auto">
    <table class="table responsive-table">
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    PRICE 
                </td>
                <td>
                    NFTs
                </td>
                <td>
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
            <?php  while($exd = mysqli_fetch_assoc($rcexdata))   {   ?>
            <tr>
                <td># <?php echo $exd['id'] ?></td>
                <td>0.0<?php echo $exd['explor_price'] ?> ETH</td>
                <td>
                    <img src="explor/<?php echo $exd['explor_img'] ?>" style="width:80px;height:80px;" alt="">
                </td>
                <td>
                    <a class="btn btn-warning" href="update_explor.php?update_explor=update&&id=<?php echo $exd['id'] ?>">Update</a>
                    <a class="btn btn-danger" href="?exdelete=delete&&id=<?php echo $exd['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>