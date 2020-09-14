<div class="row mt-2 pt-2">
    <div class="col-md-3">
        <div class="bg-dark text-white p-3">
            Category

        </div>
        <div class="card border-dark mt-2">
            <div class="card-header">Filter</div>
            <div class="card-body text-dark">
                <p class="card-text">Brand</p>
                <p class="card-text">Price</p>
            </div>
        </div>

    </div>
    <div class="col-md-9 ">
        <div class="row mr-0">
            <?php
            while ($row = mysqli_fetch_array($data['gamelist'])) {
            ?>
                <div class="col-md-4 card border-dark p-0 mb-1">
                    <a href=<?php echo "index.php?url=Game/GameDetail/" . $row['GameID'] ?>>
                        <div class="card-header" ><img class="image" style="width: 100%;" src=<?php echo $row['GameImage'] ?> alt="anythings"></div>
                    </a>

                    <div class="card-body text-dark mx-auto">
                        <a class = "stretched-link" href=<?php echo "index.php?url=Game/GameDetail/" . $row['GameID'] ?>>
                            <p class="card-text"><?php echo $row['GameName'] ?></p>
                        </a>
                        <p class="card-text"><?php echo $row['GamePrice'] ?></p>
                        <button type="button" class="btn btn-secondary">Add to cart</button>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</div>
