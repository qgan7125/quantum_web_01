<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<!-- header backgroud -->
<div class='headerbg text-center'> 
    <h1>Quantum Information and Materials Group</h1>
</div>
<div id="carouselExampleIndicators1" class="carousel slide py-4" data-ride="carousel" style="background-color: grey">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"> <img class="d-block mx-auto" src="images/Carousel_Placeholder.png" alt="First slide">
                <div class="carousel-caption">
                    <h5>First slide Heading</h5>
                    <p>First slide Caption</p>
                </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto" src="images/Carousel_Placeholder.png" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Second slide Heading</h5>
                    <p>Second slide Caption</p>
                </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto" src="images/Carousel_Placeholder.png" alt="Third slide">
                <div class="carousel-caption">
                    <h5>Third slide Heading</h5>
                    <p>Third slide Caption</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
<?php require('components/footer.inc.php'); ?>
