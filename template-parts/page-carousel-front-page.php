<!-- https://stackoverflow.com/questions/47628082/flexbox-layout-with-two-equal-height-children-one-containing-nested-flexbox-wit/47628145#47628145 -->
<div id="slideshow" class="carousel slide" data-ride="false" data-pause="hover" data-interval="100000">
    <ol class="carousel-indicators">
        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
        <li data-target="#slideshow" data-slide-to="1"></li>
        <li data-target="#slideshow" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="http://referralfw.com/wp-content/uploads/Carpet-Cleaning-Banner.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://referralfw.com/wp-content/uploads/Tile-Cleaning-Banner.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://referralfw.com/wp-content/uploads/Wood-Cleaning-Banner.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>