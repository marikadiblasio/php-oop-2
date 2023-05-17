<main">
            <div class="container border border-success-subtle">
                <div class="row">
                    <?php foreach($products as $product){ ?> 
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card position-relative">
                            <div class="position-absolute"><?php echo $product->category->icon ?></div>
                            <div class="img-box">
                            <img src="<?php echo $product->image ?>" class="" alt="<?php echo $product->name ?>">

                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name ?></h5>
                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo "{$product->price}&euro;" ?></li>
                                <li class="list-group-item"><?php echo "{$product->type}" ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>