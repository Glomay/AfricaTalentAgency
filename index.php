<?php include "header.php"?>

    <div class="main-carousel">
        <div class="owl-carousel owl-theme" id="carousel">
            <?php for($i=1; $i<=3; $i++):?>
            <div class="slide" style="background-image: url('img/img<?php echo $i;?>.jpg')">
                <div class="container"">
                    <div class="content-text">
                        <h3 class="slide-title">Lorem ipsum dolor sit amet</h3>
                        <p>Donec convallis, nibh nec blandit suscipit, ante enim tristique ex, eget elementum tellus tellus sed arcu. Phasellus risus nunc, vestibulum a mi vel, faucibus rhoncus sem.</p>
                    </div>
                    <a href="#" class="btn btn-success more">En savoir plus</a>
                </div>
            </div>
    <?php endfor;?>
        </div>
        <div class="slider-controls">
            <span class="control-left fa fa-angle-left"></span>
            <span class="control-right fa fa-angle-right"></span>
        </div>
    </div>

<div class="main-theme">
    <h2 class="section-title">Nos experts par thèmes</h2>
    <div class="container-fluid">
        <ul class="choix-theme hidden-xs">
            <?php
            $themes = array("theme-1","theme-2","theme-3","theme-4");
            ?>
            <li class="theme">
                <button class="button all active"  data-theme="*">Tout</button>
            </li>
<?php foreach ($themes as $theme):?>
    <li class="theme">
                        <button class="button" data-theme=".<?php echo $theme;?>"><?php echo $theme;?></button>
    </li>
<?php endforeach;?>
        </ul>

        <select class="select-theme visible-xs">
            <option selected value="*">Tout</option>
            <?php foreach ($themes as $theme):?>
                <option value=".<?php echo $theme;?>"><?php echo $theme;?></option>
            <?php endforeach;?>
        </select>


        <div class="experts-isotope">
            <?php for($i = 1; $i <= 8; $i++):?>
                <?php $j = rand(0,3);?>
            <a href="#" class="expert <?php echo $themes[$j];?>">
                <div class="frame">
                    <img src="holder.js/560x400" alt="Holder" class="img-responsive">
                </div>
                <div class="details">
                    <div class="nom">Expert <?php echo $i; ?> <br><?php echo $themes[$j];?></div>
                    <div class="bio">
                        Nulla feugiat magna mi, et placerat quam rutrum eu. Pellentesque hendrerit interdum
                        massa, et pellentesque arcu commodo vulputate.
                    </div>
                </div>
            </a>
            <?php endfor;?>
        </div>
    </div>
</div>

<div class="theme-pays">
    <div class="container">
        <h2 class="section-title">Nos experts par pays</h2>
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
    <div class="container">
        <h2 class="section-title">Actualité par pays</h2>
        <div class="articles">
            <div class="owl-carousel owl-theme">
                <?php for($i =1; $i <= 2; $i++):?>
                    <div class="actualite">
                        <a href="#" id="photo">
                            <div class="picture_frame">
                                <img src="img/actu1.jpg" class="img-responsive">
                            </div>
                            <h4>Interdum et malesuada fames</h4>
                            <span class="pays">Gabon</span>
                            <h5>10/05/2017</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem massa, pellentesque ut
                                facilisis nec, vulputate vitae tortor. Suspendisse id iaculis neque. Praesent non turpis
                                sed neque sodales egestas. Sed ut dui id sem sodales auctor eu tempor augue.</p>
                        </a>
                    </div>

                    <div class="actualite">
                        <a href="#" id="photo">
                            <div class="picture_frame">
                                <img src="img/actu2.jpg" class="img-responsive">
                            </div>

                            <h4>Interdum et malesuada fames</h4>
                            <div class="pays">Cameroun</div>
                            <h5>10/05/2017</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem massa, pellentesque ut
                                facilisis nec, vulputate vitae tortor. Suspendisse id iaculis neque. Praesent non turpis
                                sed neque sodales egestas. Sed ut dui id sem sodales auctor eu tempor augue.</p>
                        </a>
                    </div>
                <?php endfor;?>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"?>