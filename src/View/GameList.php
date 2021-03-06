<div class="row mt-2 pt-2">
    <div class="col-md-3">
        <div class="bg-dark text-white p-3">
            Category

        </div>
        <div class="card border-dark mt-2">
            <div class="card-header">Filter</div>
            <div class="card-body text-dark">
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
                        <div class="card-header"><img class="image" style="width: 100%;" src=<?php echo $row['GameImage'] ?> alt="anythings"></div>
                    </a>

                    <div class="card-body text-dark mx-auto">
                        <a href=<?php echo "index.php?url=Game/GameDetail/" . $row['GameID'] ?>>
                            <p class="card-text"><?php echo $row['GameName'] ?></p>
                        </a>
                        <p class="card-text"><?php echo number_format($row['GamePrice'], 0, ',', '.'); ?> đ</p>
                        <div class="text-center">
                            <a href=<?php echo "index.php?url=Cart/AddToCart/" . $row['GameID'] ?>>
                                <button type="button" class="btn btn-success">Add to cart</button>
                            </a>

                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</div>