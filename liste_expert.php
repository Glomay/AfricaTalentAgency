<?php include "header.php"?>

<div class="page-banner" style="background-image: url('img/img4.jpg')">
    <div class="container">
        <div class="content">
            <h1 class="page-title">Lorem ipsum dolor sit amet</h1>
            <div class="small-title">Donec convallis, nibh nec blandit suscipit, ante enim tristique ex, eget elementum tellus tellus sed arcu. Phasellus risus nunc, vestibulum a mi vel, faucibus rhoncus sem.</div>
        </div>
    </div>
</div>

<div class="liste">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <?php for($i=1; $i<=8; $i++):?>
                <div class="expert-descrip">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="#" class="frame">
                                <img src="img/exp<?php echo $i;?>.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <h4>Nom de l'expert</h4>
                            <p>Nulla feugiat magna mi, et placerat quam rutrum eu. Pellentesque hendrerit interdum massa, et pellentesque arcu commodo vulputate. Phasellus pharetra, augue ac tincidunt vestibulum, quam nibh tempus lacus, eu tincidunt orci ligula non eros.</p>
                        </div>
                        <div class="col-sm-4">
                            <h4>Themes abordés</h4>
                            <ul>
                                <li><a href="#">Interdum et malesuada</a></li>
                                <li><a href="#">Interdum et malesuada</a></li>
                                <li><a href="#">Interdum et malesuada</a></li>
                            </ul>
                            <a href="#" class="btn more">En savoir plus</a>
                        </div>

                    </div>
                </div>
                <?php endfor;?>
            </div>
            <div class="col-sm-3" id="side">
                <div class="side_menu">
                    <div class="search-bar">
                        <h3>Rechercher un expert</h3>
                        <form action="">
                            <label for="search" class="hidden"></label>
                            <input type="search" name="search" placeholder="Rechercher un expert..." id="search"/>
                            <button class="fa fa-search" type="submit"></button>
                        </form>
                    </div>
                    <div class="list">
                        <h3>Themes</h3>
                        <ul>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                            <li><a href="#">Interdum et malesuada</a></li>
                        </ul>
                    </div>
                    <div class="list">
                        <h3>Pays</h3>
                        <ul>
                            <li><a href="#">Afrique du Sud</a></li>
                            <li><a href="#">Algerie</a></li>
                            <li><a href="#">Angola</a></li>
                            <li><a href="#">Benin</a></li>
                            <li><a href="#">Botswana</a></li>
                            <li><a href="#">Burkina Faso</a></li>
                            <li><a href="#">Burundi</a></li>
                            <li><a href="#">Cameroun</a></li>
                            <li><a href="#">Gabon</a></li>
                            <li><a href="#">Senegal</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php"?>
