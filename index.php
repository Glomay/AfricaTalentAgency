<?php include "header.php"?>

    <div class="main-carousel">
        <div class="owl-carousel owl-theme" id="carousel">
            <?php for($i=1; $i<=3; $i++):?>
            <div class="slide" style="background-image: url('img/img<?php echo $i;?>.jpg')">
                <div class="container" id="content">
                    <a href="#" class="fa fa-angle-left" id="left"></a>
                    <a href="#" class="fa fa-angle-right" id="right"></a>
                    <div class="content-text">
                        <h1>Lorem ipsum dolor sit amet</h1>
                        <p>Donec convallis, nibh nec blandit suscipit, ante enim tristique ex, eget elementum tellus tellus sed arcu. Phasellus risus nunc, vestibulum a mi vel, faucibus rhoncus sem.</p>
                    </div>
                    <a href="#" class="btn btn-success more">En savoir plus</a>
                </div>
            </div>
    <?php endfor;?>
        </div>
    </div>

<div class="main-theme">
    <h1>Nos experts par theme</h1>
    <div class="container-fluid">
        <div class="choix-theme">
            <div class="row">
<?php for($i=1; $i<=4; $i++):?>
                <div class="col-sm-3">
                    <a href="#" class="active">
                        <div class="theme">Consectetur adipiscing</div>
                    </a>
                </div>
<?php endfor;?>

            </div>
        </div>

        <div class="expert-photos">
            <div class="row">
<?php for($i=1; $i<=4; $i++):?>
                <div class="col-sm-3">
                    <a href="#" class="frame">
                        <img src="img/exp<?php echo $i;?>.jpg" class="img-responsive">
                        <div class="nom"><h4>Nulla feugiat magna</h4>
                            <p>Nulla feugiat magna mi, et placerat quam rutrum eu. Pellentesque hendrerit interdum massa, et pellentesque arcu commodo vulputate.</p>
                        </div>
                    </a>
                </div>
<?php endfor;?>

            </div>
            <div class="row">
<?php for($i=5; $i<=8; $i++):?>
                <div class="col-sm-3">
                    <a href="#" class="frame">
                        <img src="img/exp<?php echo $i;?>.jpg" class="img-responsive">
                        <div class="nom"><h4>Nulla feugiat magna</h4>
                            <p>Nulla feugiat magna mi, et placerat quam rutrum eu. Pellentesque hendrerit interdum massa, et pellentesque arcu commodo vulputate.</p>
                        </div>
                    </a>
                </div>
<?php endfor;?>
            </div>
        </div>
    </div>
</div>

<div class="theme-pays">
    <div class="container">
        <h1>Nos experts par pays</h1>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" id="carte"> <img src="img/carte_afrique.png" height="500"> </a>
            </div>
            <div class="col-sm-6">
                <p>Phasellus lobortis, nisi nec viverra mattis, felis erat tristique tortor, eu tincidunt mauris sem vitae nibh. Donec at est eget ante mattis sollicitudin ac sed tortor. Sed commodo a purus eget semper. Praesent mattis convallis scelerisque. Proin eleifend gravida nisi vitae tincidunt. Sed sit amet nisl molestie nibh semper eleifend et ut nibh. Duis ligula erat, volutpat eget dictum non, ornare et urna. Curabitur fringilla tincidunt urna, sit amet rutrum augue mollis nec. Sed sed libero consequat, convallis ex in, fermentum leo.</p>
            </div>
        </div>
    </div>
</div>

<div class="actu">
    <div class="container-fluid">
        <h1>Actualite par pays</h1>
        <div class="row">
            <div class="col-sm-2">
                <div class="choix-theme">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="actualite">
                    <a href="#" id="photo"> <img src="img/actu1.jpg" class="img-responsive"> </a>
                    <h4>Interdum et malesuada fames</h4>
                    <h5>10/05/2017</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem massa, pellentesque ut facilisis nec, vulputate vitae tortor. Suspendisse id iaculis neque. Praesent non turpis sed neque sodales egestas. Sed ut dui id sem sodales auctor eu tempor augue.</p>
                    <span class="fa fa-plus"></span>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="actualite">
                    <a href="#" id="photo"> <img src="img/actu2.jpg" class="img-responsive"> </a>
                    <h4>Interdum et malesuada fames</h4>
                    <h5>10/05/2017</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem massa, pellentesque ut facilisis nec, vulputate vitae tortor. Suspendisse id iaculis neque. Praesent non turpis sed neque sodales egestas. Sed ut dui id sem sodales auctor eu tempor augue.</p>
                    <span class="fa fa-plus"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"?>