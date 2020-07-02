<div id="apparition" class = "jumbotron jumbotron-fluid">
    <div class = "container">
        <h1 class = "display-4">chapitre 4</h1>
        <span id="apparition1" >
            <p class = "lead">Les animations :</p>
            <p>Il est possible de mettre facilement en mouvement des éléments</p>
        </span>
        <ul class="list-group list-group-horizontal-sm-md-lg">
            <span id="apparition2">
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche1" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic1"><u><i>1 - animation simple</i></u></span>
                    <button type="button" class="btnVoirCode1 btn btn-outline-info" data-toggle="modal" data-target="#animSimple">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre4/1animSimple.php"' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche2" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic2"><u><i>2 - plusieurs animations à la suite</i></u></span>
                    <button type="button" class="btnVoirCode2 btn btn-outline-info" data-toggle="modal" data-target="#animSuite">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre4/2animMulitple.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche3" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic3"><u><i>3 - arrêter une animation</i></u></span>
                    <button type="button" class="btnVoirCode3 btn btn-outline-info" data-toggle="modal" data-target="#stopAnim">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre4/3stopAnim.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche4" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic4"><u><i>4 - chaîner des animations</i></u></span>
                    <button type="button" class="btnVoirCode4 btn btn-outline-info" data-toggle="modal" data-target="#chainerAnim">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre4/4chainerAnim.php' ?>
                </li>
            </span>
        </ul>

    </div>
</div>
<!-- Modal btnVoirCode1 animation simple -->
<div class="modal" id="animSimple" tabindex="-1" role="dialog" aria-labelledby="animSimple" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Animation Simple</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/1-animSimple/1-animSimple-HTML.png" alt="imageAnim-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/1-animSimple/1-animSimple-CSS.png" alt="imageAnim-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/1-animSimple/1-animSimple-JQ.png" alt="imageAnim-CSS" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode2 animations a la suite -->
<div class="modal" id="animSuite" tabindex="-1" role="dialog" aria-labelledby="animSuite" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Plusieurs animations à la suite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/2-animSuite/2-animSuite-HTML.png" alt="imageAnimSuite-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/2-animSuite/2-animSuite-CSS.png" alt="imageAnimSuite-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/2-animSuite/2-animSuite-JQ.png" alt="imageAnimSuite-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode3 arreter une animation -->
<div class="modal" id="stopAnim" tabindex="-1" role="dialog" aria-labelledby="stopAnim" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Arrêter une animation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/3-stopAnim/3-stopAnim-HTML.png" alt="imageStopAnim-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/3-stopAnim/3-stopAnim-CSS.png" alt="imageStopAnim-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/3-stopAnim/3-stopAnim-JQ.png" alt="imageStopAnim-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode4 chainer les animations -->
<div class="modal" id="chainerAnim" tabindex="-1" role="dialog" aria-labelledby="chainerAnim" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Chaîner les animations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/4-chainerAnim/4-achainerAnim-HTML.png" alt="imageChainAnim-HTML" class="imageCode"/>
                <br/>
                <p><u>CSS :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/4-chainerAnim/4-achainerAnim-CSS.png" alt="imageChainAnim-CSS" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre4/4-chainerAnim/4-achainerAnim-JQ.png" alt="imageChainAnim-JQ" class="imageCode"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



