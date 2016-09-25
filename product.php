<?php include_once "template/head.php"; ?>

<?php
    include_once("template/header.php");
?>

<main id="product" class="sub-page">
    <div class="overlay"></div>
    <div id="write-rating-form">
      <span class="close">x</span>
      <div class="write-box">
        <h1>Submit your Review</h1>
        <h2>
          <img src="img/product/galaxys6-out.jpg" alt="Samsung Galaxy S6"/>
          <span>Samsung Galaxy S6 Octa-Core Quad HD (2560x1440) 5.2 Inch 3GB RAM 64 GB Storage</span>
        </h2>

        <form action="#" method="get">
          <div class="user">
            <h2>User Information</h2>
            <div class="nick">
              <label for="nick">Choose a Nickname</label>
              <input type="text" name="nick" id="nick"/>
            </div>
            <div class="country">
              <label for="location">Enter your Country</label>
              <input type="text" name="location" id="location"/>
            </div>
          </div>
          <div class="user-rating">
            <h2>Your Rating</h2>
            <div class="user-stars">
              <ul>
                <li class="star" title="1"></li>
                <li class="star" title="2"></li>
                <li class="star" title="3"></li>
                <li class="star" title="4"></li>
                <li class="star" title="5"></li>
              </ul>
            </div>
            <div class="recommend">
              <p>Would you recommend this product to a friend?</p>
              <input id="yes" type="radio" value="yes" name="gender" checked/><label for="yes">Yes</label>
              <input id="no" type="radio" value="no" name="gender"/><label for="no">No</label>
            </div>
          </div>
          <div class="user-review">
            <h2>Your Review</h2>
            <label for="review">Review</label>
            <textarea name="review" id="review"></textarea>
          </div>
          <div class="submit-review">
            <input type="submit"/>
          </div>
        </form>
      </div>
    </div>

    <div class="container">

        <section class="item-page">
            <div class="gallery">
                <div class="img-view">
                    <div class="img">
                        <a href="#">
                            <img src="img/product/galaxys6-gal-1.jpg" alt="Image View"/>
                        </a>
                    </div>
                    <div class="img">
                        <a href="#">
                            <img src="img/product/galaxys6-gal-2.jpg" alt="Image View"/>
                        </a>
                    </div>
                    <div class="img">
                        <a href="#">
                            <img src="img/product/galaxys6-gal-3.jpg" alt="Image View"/>
                        </a>
                    </div>
                    <div class="img">
                        <a href="#">
                            <img src="img/product/galaxys6-gal-4.jpg" alt="Image View"/>
                        </a>
                    </div>
                </div>
                <div class="img-list">
                    <ul class="thumbs">
                        <li class="thumb current">
                            <span>
                                <img src="img/product/galaxys6-gal-1.jpg" alt="Image 1"/>
                            </span>
                        </li>
                        <li class="thumb">
                            <span>
                                <img src="img/product/galaxys6-gal-2.jpg" alt="Image 2"/>
                            </span>
                        </li>
                        <li class="thumb">
                            <span>
                                <img src="img/product/galaxys6-gal-3.jpg" alt="Image 3"/>
                            </span>
                        </li>
                        <li class="thumb">
                            <span>
                                <img src="img/product/galaxys6-gal-4.jpg" alt="Image 4"/>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="meta-info">
                <div class="info">
                    <h1>Samsung Galaxy S6 Octa-Core Quad HD (2560x1440) 5.2 Inch 3GB RAM 64 GB Storage</h1>
                    <div class="star-rating">
                        <span class="stars overall">
                            <span></span>
                        </span>
                        <i class="rate">4.8</i>
                        <span class="feedback-num">(Product was reviewed by <i>280</i> buyers)</span>
                    </div>
                </div>
                <div class="price">
                    <dl>
                        <dt>Price:</dt>
                        <dd>US $599.99</dd>
                    </dl>
                </div>
                <div class="total">
                    <dl>
                        <dt>Availability:</dt>
                        <dd>In Stock</dd>
                    </dl>
                    <dl>
                        <dt>Shipping:</dt>
                        <dd class="heavy">
                            Free Shipping
                        </dd>
                    </dl>
                    <dl>
                        <dt>Delivery Time:</dt>
                        <dd>5 Days</dd>
                    </dl>
                    <div class="quantity">
                        <dl>
                            <dt><label for="quantity">Quantity:</label></dt>
                            <dd><input type="number" value="1" name="quantity" id="quantity"/></dd>
                        </dl>
                    </div>
                    <dl>
                        <dt>Total Price:</dt>
                        <dd class="heavy total-price">US $599.99</dd>
                    </dl>
                    <div class="buy">
                        <a href="#">Buy Now</a>
                        <a href="#">Add to cart</a>
                    </div>
                </div>
                <div class="mfg">
                    <dl>
                        <dt>Price Updated On:</dt>
                        <dd>12 / 07 / 2015</dd>
                    </dl>
                    <dl>
                        <dt>Short Description:</dt>
                        <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, eius.</dd>
                    </dl>
                    <dl>
                        <dt>Brand:</dt>
                        <dd><a href="#">Samsung Corporation</a> | Category: Mobile Phones</dd>
                    </dl>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="details">
                <div class="tabs">
                    <div class="header">
                        <ul id="detail-tabs">
                            <li id="overview-tab" class="active"><a href="#">Overview</a></li>
                            <li id="specs-tab" class=""><a href="#">Specifications</a></li>
                            <li id="ratings-tab" class=""><a href="#">Ratings and Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tab">
                        <div class="detail-data overview active">
                            <h3>Features</h3>
                            <img class="left" src="img/product/galaxys6-detail-1.jpg" alt=""/>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur,
                                consequuntur deleniti dolorum fugiat fugit libero molestias sapiente soluta ullam?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eum maxime nobis
                                quia sequi sint voluptates? Deserunt doloremque est itaque nobis omnis placeat vero!
                                Accusamus.
                            </p>
                            <div class="clearfix"></div>
                            <h3>Design</h3>
                            <img class="left" src="img/product/galaxys6-detail-2.jpg" alt=""/>
                            <p>
                                Lorem ipsum dolor sit amet, est eveniet exercitationem fugit
                                harum incidunt inventore ipsa iure, laboriosam libero maiores maxime nesciunt pariatur
                                possimus provident quia similique sunt temporibus ut veniam veritatis? Earum eum libero
                                nemo possimus quibusdam ratione rem sapiente!
                            </p>
                            <p>
                                Ad aliquam aspernatur autem beatae commodi
                                cum cumque dolores ex exercitationem facere fuga fugit ipsa labore maxime neque nostrum
                                nulla officiis pariatur perferendis libero nostrum officia reprehenderit
                                suscipit? Aut cumque dicta doloribus eius excepturi, harum hic impedit labore magnam
                                mollitia natus odio perferendis.
                            </p>
                        </div>
                        <div class="detail-data specs">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Part</th>
                                        <th>Info</th>
                                    </tr>
                                    <tr>
                                        <td>Screen</td>
                                        <td>5.0 inch</td>
                                    </tr>
                                    <tr>
                                        <td>Processor</td>
                                        <td>Exynos 5470</td>
                                    </tr>
                                    <tr>
                                        <td>Network</td>
                                        <td>LTE Cat 5</td>
                                    </tr>
                                    <tr>
                                        <td>OS</td>
                                        <td>Android</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="detail-data review">
                            <div class="write-rating">
                                <div class="rating-container">
                                    <div class="rating">
                                        <h1>Overall Ratings</h1>
                                        <span class="stars overall big">
                                            <span></span>
                                        </span>
                                        <h1>4.8</h1>
                                        <p>(Based on 10 Ratings)</p>
                                        <p>96% of reviewers would recommend this product to a friend</p>
                                    </div>
                                    <div class="write">
                                        <button>Write a Review</button>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <ul>
                                    <li>
                                        <div class="review-content">
                                            <p class="user">User <span>from England</span></p>
                                            <p class="date">Posted on: 2 Aug 2015</p>
                                            <div class="star-rating">
                                                <span class="stars">
                                                    <span></span>
                                                </span>
                                                <i class="rate">4.0</i>
                                            </div>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam
                                                asperiores aut culpa cumque cupiditate dicta distinctio dolore est et,
                                                illum inventore ipsam mollitia nemo odit porro quod sed voluptatibus!
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
                                                doloribus earum id impedit, iusto omnis optio voluptates? Obcaecati quae, repudiandae?
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="review-content">
                                            <p class="user">User <span>from England</span></p>
                                            <p class="date">Posted on: 2 Aug 2015</p>
                                            <div class="star-rating">
                                                <span class="stars">
                                                    <span></span>
                                                </span>
                                                <i class="rate">4.0</i>
                                            </div>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam
                                                asperiores aut culpa cumque cupiditate dicta distinctio dolore est et,
                                                illum inventore ipsam mollitia nemo odit porro quod sed voluptatibus!
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Adipisci aperiam cupiditate eaque itaque laboriosam nemo, praesentium
                                                reiciendis temporibus tenetur ullam. Cupiditate obcaecati quo rem unde.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="review-content">
                                            <p class="user">User <span>from England</span></p>
                                            <p class="date">Posted on: 2 Aug 2015</p>
                                            <div class="star-rating">
                                                <span class="stars">
                                                    <span></span>
                                                </span>
                                                <i class="rate">4.0</i>
                                            </div>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam
                                                asperiores aut culpa cumque cupiditate dicta distinctio dolore est et,
                                                illum inventore ipsam mollitia nemo odit porro quod sed voluptatibus!
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi
                                                autem dolore eaque enim in repellendus vel velit!
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<div class="clearfix space-below"></div>

<?php
    include_once("template/footer.php");
?>


</body>
</html>