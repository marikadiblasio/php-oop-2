<main">
            <div class="container border border-success-subtle">
                <div class="row">
                    <?php foreach($products as $product){ ?> 
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card position-relative">
                            <div class="position-absolute"><?php echo $cat->icon ?></div>
                            <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name ?></h5>
                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo "{$product->price}&euro;" ?></li>
                                <li class="list-group-item"><?php echo "{$product->type}" ?></li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>