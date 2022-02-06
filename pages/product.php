<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product['id']; ?></h3>
                            <h2><?php echo $product['title']; ?></h2>
                            <h2><?php echo $product['price']; ?></h2>
                            <hr/>
                            <a href="action.php?pages=show-product" class="btn btn-outline-success">Read more</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
