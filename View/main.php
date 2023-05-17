<main">
            <div class="container border border-success-subtle">
                <div class="row">
                    <?php foreach($products as $product){ ?> 
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card position-relative my-5">
                            <div class="position-absolute right"><?php echo $product->category->icon ?></div>
                            <?php if($product->new){ ?> 
                            <div class="position-absolute left"><i class="fa-solid fa-certificate"></i></div>
                            <?php ;} ?>
                            <div class="img-box">
                            <img src="<?php echo $product->image ?>" class="" alt="<?php echo $product->name ?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo "{$product->price}&euro;" ?></li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><?php echo "{$product->type}";?></div>
                                    <div>
                                    <?php if($product->getDetails()){
                                     echo $product->getDetails(); }?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>