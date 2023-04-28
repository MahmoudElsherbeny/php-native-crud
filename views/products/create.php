<?php 
    session_start();
?>

<!--  content  -->
<main class="py-5">
    <section class=" text-center container">
        <div class="page_header">
            <div>
                <h1>Add Product</h1>
            </div>
        </div>
    </section>

    <div class="py-5">
        <div class="container">
            <form id="product_form" action="/add-product/store" method="post">
                <div class="form-group mb-3">
                    <label class="px-1 mb-1">SKU:</label>
                    <input id="sku" type="text" name="sku" class="form-control" placeholder="Product sku code" />
                    <?php if(isset($_SESSION['sku_error'])) { ?>
                        <div class="invalid-msg"> <?php echo $_SESSION['sku_error']; ?> </div>
                    <?php
                            unset($_SESSION['sku_error']);
                        }
                    ?>
                </div>
                <div class="form-group mb-3">
                    <label class="px-1 mb-1">Name:</label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Product name" />
                    <?php if(isset($_SESSION['name_error'])) { ?>
                        <div class="invalid-msg"> <?php echo $_SESSION['name_error']; ?> </div>
                    <?php
                            unset($_SESSION['name_error']);
                        }
                    ?>
                </div>
                <div class="form-group mb-3">
                    <label class="px-1 mb-1">Price ($):</label>
                    <input id="price" type="text" name="price" class="form-control" placeholder="Product price"  />
                    <?php if(isset($_SESSION['price_error'])) { ?>
                        <div class="invalid-msg"> <?php echo $_SESSION['price_error']; ?> </div>
                    <?php
                            unset($_SESSION['price_error']);
                        }
                    ?>
                </div>
                <div class="form-group mb-3">
                    <label  class="px-1 mb-1">Choose Type:</label>
                    <select id="productType" name="type" class="form-control">
                        <option value="">-- choose --</option>
                        <option id="DVD" value="dvd">DVD</option>
                        <option id="Book" value="book">Book</option>
                        <option id="Furniture" value="furniture">Furniture</option>
                    </select>
                    <?php if(isset($_SESSION['type_error'])) { ?>
                        <div class="invalid-msg"> <?php echo $_SESSION['type_error']; ?> </div>
                    <?php
                            unset($_SESSION['type_error']);
                        }
                    ?>
                </div>

                <div id="dvdAttribute" class="form-group mb-3 attributes-input">
                    <label  class="px-1 mb-1">Size (MB):</label>
                    <input id="size" type="text" name="size" class="form-control" placeholder="Product size"  />
                    <?php if(isset($_SESSION['size_error'])) { ?>
                        <div class="invalid-msg"><?php echo $_SESSION['size_error']; ?></div>
                    <?php
                            unset($_SESSION['size_error']);
                        } else { 
                    ?>
                        <span class="attribute_description">* please provide product size in megabyte when type is dvd *</span>
                    <?php } ?>
                </div>

                <div id="bookAttribute" class="form-group mb-3 attributes-input">
                    <label  class="px-1 mb-1">Weight (KG):</label>
                    <input id="weight" type="text" name="weight" class="form-control" placeholder="Product weight"  />
                    <?php if(isset($_SESSION['weight_error'])) { ?>
                        <div class="invalid-msg"><?php echo $_SESSION['weight_error']; ?></div>
                    <?php
                            unset($_SESSION['weight_error']);
                        } else { 
                    ?>
                        <span class="attribute_description">* please provide product weight in kilogram when type is book *</span>
                    <?php } ?>
                </div>

                <div id="furnitureAttribute" class="mb-3 attributes-input">
                    <div class="form-group mb-3">
                        <label  class="px-1 mb-1">Height (CM):</label>
                        <input id="height" type="text" name="height" class="form-control" placeholder="Product height"  />
                        <?php if(isset($_SESSION['height_error'])) { ?>
                            <div class="invalid-msg"><?php echo $_SESSION['height_error']; ?></div>
                        <?php
                                unset($_SESSION['height_error']);
                            }
                        ?>
                    </div>
                    <div class="form-group mb-3">
                        <label  class="px-1 mb-1">Width (CM):</label>
                        <input id="width" type="text" name="width" class="form-control" placeholder="Product width"  />
                        <?php if(isset($_SESSION['width_error'])) { ?>
                            <div class="invalid-msg"><?php echo $_SESSION['width_error']; ?></div>
                        <?php
                                unset($_SESSION['width_error']);
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label  class="px-1 mb-1">Length (CM):</label>
                        <input id="length" type="text" name="length" class="form-control" placeholder="Product length"  />
                        <?php if(isset($_SESSION['length_error'])) { ?>
                            <div class="invalid-msg"><?php echo $_SESSION['length_error']; ?></div>
                        <?php
                                unset($_SESSION['length_error']);
                            }
                        ?>
                    </div>

                    <span class="attribute_description">* please provide product dimension in format H x W x L when type is furniture *</span>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Save"  />
                    <a href="/" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
    session_destroy();
?>