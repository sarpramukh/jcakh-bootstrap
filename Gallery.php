
<?php require './header.html'; ?>

<!-- Gallary -->
<div class="container">
    <section id="gallary">
        <div class="page-header" >
            <h3>Gallary</h3>
        </div>
        <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                <li data-target="#screenshot-carousel" data-slide-to="3"></li>
            </ol>
          
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/1.jpg" class="img-responsive center-block"/>
                </div>
                <div class="item">
                    <img src="images/2.jpg" class="img-responsive center-block"/>
                </div>
                <div class="item">
                    <img src="images/3.jpg" class="img-responsive center-block"/>
                </div>
                <div class="item">
                    <img src="images/4.jpg" class="img-responsive center-block"/>
                </div>
            </div> <!-- End Carousel Inner-->
            
            <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- End Carousel -->
    </section>
</div>

<?php require './footer.html'; ?>