<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
            <?php foreach ($products as $product) {?>
                <div class="col-md-4 h-auto">
                    <div class="card border-0">
                        <img src="<?php echo $product['image']?>" alt="" height="250">
                        <div class="card_body">
                            <h3 class=" py-2"><?php echo $product['name']?></h3>
                            <h6 class="text-muted"><?php echo $product['description_one']?></h6>
                            <p class="btn btn-success me-5">Read More ...</p>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </section>

<?php include "footer.php"?>