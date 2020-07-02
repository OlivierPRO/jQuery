<div id="apparition" class = "jumbotron jumbotron-fluid">
    <div class = "container">
        <h1 class = "display-4">chapitre 3</h1>
        <span id="apparition1" >
            <p class = "lead">Les effets :</p>
            <p>Ils permettent de modifier une forme, de slider, de rendre transparent, le tout à une vitesse donnée.</p>
        </span>
        <ul class="list-group list-group-horizontal-sm-md-lg">   
            <span id="apparition2">
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche1" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic1"><u><i>1 - la durée</i></u></span>
                    <button type="button" class="btnVoirCode1 btn btn-outline-info" data-toggle="modal" data-target="#duration">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre3\1laDuree.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche2" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic2"><u><i>2 - les fonctions callback</i></u></span>
                    <button type="button" class="btnVoirCode2 btn btn-outline-info" data-toggle="modal" data-target="#callback">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre3/2foncCalback.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche3" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic3"><u><i>3 - la fonction toggle</i></u></span>
                    <button type="button" class="btnVoirCode3 btn btn-outline-info" data-toggle="modal" data-target="#toggle">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre3/3foncToggle.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche4" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic4"><u><i>4 - l'opacité</i></u></span>
                    <button type="button" class="btnVoirCode4 btn btn-outline-info" data-toggle="modal" data-target="#opacity">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre3/4opacite.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche5" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic5"><u><i>5 - les effets du slide</i></u></span>
                    <button type="button" class="btnVoirCode5 btn btn-outline-info" data-toggle="modal" data-target="#slide">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre3/5slide.php' ?>
                </li>
            </span>
        </ul>

    </div>
</div>
<!-- Modal btnVoirCode1 la duree -->
<div class="modal" id="duration" tabindex="-1" role="dialog" aria-labelledby="duration" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">La durée</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/1-laDuré/1-dure-HTML.png" alt="imageDuree-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/1-laDuré/1-dure-CSS.png" alt="imageDuree-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/1-laDuré/1-dure-JQ.png" alt="imageDuree-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode2 les fonctions callback -->
<div class="modal" id="callback" tabindex="-1" role="dialog" aria-labelledby="callback" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Les fonctions callback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/2-lesFonctionsCallback/2-callback-HTML.png" alt="imageFonctionsCallback-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/2-lesFonctionsCallback/2-callback-CSS.png" alt="imageFonctionsCallback-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/2-lesFonctionsCallback/2-callback-JQ.png" alt="imageFonctionsCallback-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode3 la fonction toggle -->
<div class="modal" id="toggle" tabindex="-1" role="dialog" aria-labelledby="toggle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">La fonction toggle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/3-laFonctionToggle/3-fonctionToggle-HTML.png" alt="imageFonctionToggle-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/3-laFonctionToggle/3-fonctionToggle-CSS.png" alt="imageFonctionToggle-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/3-laFonctionToggle/3-fonctionToggle-JQ.png" alt="imageFonctionToggle-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode4 l'opacitee -->
<div class="modal" id="opacity" tabindex="-1" role="dialog" aria-labelledby="opacity" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">L'opacité</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/4-opacite/4-opacite-HTML.png" alt="imageOpacite-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/4-opacite/4-opacite-CSS.png" alt="imageOpacite-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/4-opacite/4-opacite-JQ.png" alt="imageOpacite-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode5 les effets du slide -->
<div class="modal" id="slide" tabindex="-1" role="dialog" aria-labelledby="slide" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Les effets du slide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/5-slide/5-slide-HTML.png" alt="imageSlide-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/5-slide/5-slide-CSS.png" alt="imageSlide-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre3/5-slide/5-slide-JQ.png" alt="imageSlide-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
