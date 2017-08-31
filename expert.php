<?php include "header.php"?>

<div class="banniere-page" style="background-color: #a5a5a5">
    <div class="container">
        <div class="content">
            <h1 class="nom-expert">Nom de l'expert</h1>
            <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor in odio vel gravida. Proin quis est est. Suspendisse vel semper ex. Curabitur imperdiet rhoncus dolor ac eleifend. Nunc pretium luctus nisl id volutpat.</div>
        </div>
    </div>
</div>

<div class="corps-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="detail-expert">
                    <li class="titre-section libelle">Langues parlées</li>
                    <li>Français, anglais</li>
                    <li class="titre-section libelle">Pays de résidence</li>
                    <li>Gabon</li>
                </ul>

                <h4 class="titre-section">Thèmes abordés</h4>
                <ul class="liste-themes">
                    <li>Thème 1</li>
                    <li>Thème 2</li>
                    <li>Thème 3</li>
                    <li>Thème 4</li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="section">
                    <h3 class="titre-section">À propos de Nom Prénom</h3>
                    <div class="bio-expert">Vivamus felis sem, ultricies id sem at, euismod interdum justo. Phasellus pharetra fermentum congue. Mauris imperdiet eget ligula nec viverra. Vivamus non vulputate massa. Fusce at mi non tortor faucibus cursus. Maecenas sit amet elementum orci, ultrices commodo lacus. Nam tincidunt facilisis nibh, ut dignissim ante cursus sit amet. Vestibulum sit amet ipsum ac felis imperdiet dictum.</div>

                    <a href="#" class="bouton-contact">Contacter</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="section" id="mediatheque">
                    <div class="lecteur-video">
                        <a href="https://www.youtube.com/watch?v=lLAor7JdMu0">
                            <img src="https://i.ytimg.com/vi/lLAor7JdMu0/maxresdefault.jpg" alt="img">
                            <div class="filtre"></div>
                        </a>
                    </div>
                    <div class="gallerie-photos">
                        <div class="cadre-photo">
                            <a href="http://africa-businesspages.com/wp-content/uploads/2016/04/25.jpg">
                                <img src="http://africa-businesspages.com/wp-content/uploads/2016/04/25.jpg">
                                <div class="filtre"></div>
                            </a>
                        </div>
                        <div class="cadre-photo">
                            <a href="https://www.movemeback.com/community/images/DSC0072.jpg">
                                <img src="https://www.movemeback.com/community/images/DSC0072.jpg">
                                <div class="filtre"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-suggestions">
        <div class="container">
            <h3 class="titre-section">Voir aussi</h3>
            <ul class="liste-suggestions">
<?php for ($i = 0; $i < 4; $i++): ?>
    <li>
        <a href="#">
            <div class="cadre-photo">
                <img src="http://image1.masterfile.com/getImage/619-00964899em-African-businessman.jpg">
            </div>
            <div class="nom-expert">Nom de l'expert</div>
        </a>
    </li>
<?php endfor;?>

            </ul>
        </div>
    </div>
</div>
<?php include "footer.php"?>