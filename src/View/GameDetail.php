<?php
while ($row = mysqli_fetch_array($data['gamedetail'])) {
?>
    <div class="row mt-2 pt-2">
        <div class="col-md-5">
            <div class="card" style="width: 100%;">
                <img src=<?php echo $row['GameImage'] ?> alt="image">
            </div>

        </div>
        <!-- <div class="col-md-1"></div> -->

        <div class="col-md-7">
            <h1><?php echo $row['GameName'] ?></h1>
            <h2> Price: <?php echo $row['GamePrice'] ?>đ</h2>
            <h3> Quantity: <?php echo $row['GameQuantity'] ?></h3>
            <h4> Producer: <?php echo $row['GameProducer'] ?></h4>
            <h4> Category: <?php echo $row['GameCatagory'] ?></h4>
            
            <div class=" text-center">
                </br>
                <button class="btn btn-success">Add to cart</button>
            </div>

        </div>

    </div>
    <div class="m-3">
        <p>Description: </br><?php echo $row['GameDescription'] ?></p>
    </div>
<?php } ?>