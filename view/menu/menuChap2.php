<div class = "jumbotron jumbotron-fluid">
    <div class = "container">
        <h1 class = "display-4">chapitre 2</h1>
        <span id="apparition1" >
            <h2 class = "lead">Les événements : </h2>
            <p>Il existe tout un tas d'événements, par exemple lorsqu'un utilisateur clique sur un élément, lorsqu'il passe le pointeur de sa souris sur un élément ou lorsqu'il retire le pointeur de sa souris d'un élément.</p>
        </span>
        <ul class="list-group list-group-horizontal-sm-md-lg">
            <span id="apparition2">
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche1" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span id="moove" title="Clique ici" class="clic1"><u><i>1 - événement click</i></u></span>
                    <button type="button" class="btnVoirCode1 btn btn-outline-info" data-toggle="modal" data-target="#evenementClick">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre2\1eveClic.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche2" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic2"><u><i>2 - événement double-click</i></u></span>
                    <button type="button" class="btnVoirCode2 btn btn-outline-info" data-toggle="modal" data-target="#evenementDoubleClick">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre2\2eveDoubleClic.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche3" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic3"><u><i>3 - événements mouseenter et mouseleave</i></u></span>
                    <button type="button" class="btnVoirCode3 btn btn-outline-info" data-toggle="modal" data-target="#evenementMouseenter">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre2\3eveMousenter.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche4" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic4"><u><i>4 - la méthode hover</i></u></span>
                    <button type="button" class="btnVoirCode4 btn btn-outline-info" data-toggle="modal" data-target="#methodeHover">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre2\4methodeHover.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche5" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic5"><u><i>5 - événements mousedown et mouseup</i></u></span>
                    <button type="button" class="btnVoirCode5 btn btn-outline-info" data-toggle="modal" data-target="#methodeMousedown">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre2\5eveMousedown.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche6" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic6"><u><i>6 - événements keydown et keyup</i></u></span>
                    <button type="button" class="btnVoirCode6 btn btn-outline-info" data-toggle="modal" data-target="#evenementKeydown">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre2\6eveKeydown.php' ?>
                </li>
                <li class="list-group-item"><img src="assets/image/arrow.png" alt="fleche" id="fleche7" width="30px" class="mr-2" title="CA TOURNE !!!!!! :-)"/>
                    <span title="Clique ici" class="clic7"><u><i>7 - événement focus</i></u></span>
                    <button type="button" class="btnVoirCode7 btn btn-outline-info" data-toggle="modal" data-target="#evenementFocus">Voir code</button>
                    <br/>
                    <?php include 'view\chapitre2\7eveFocus.php' ?>
                </li>
            </span>
        </ul>
    </div>
</div>
<!-- Modal btnVoirCode1 evenement click -->
<div class="modal" id="evenementClick" tabindex="-1" role="dialog" aria-labelledby="evenementClick" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">L'événement click</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/1-evenementClick/1-evenementClick-HTML.png" alt="evenementClick-HTML" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/1-evenementClick/1-evenementClick-JQ.png" alt="evenementClick-jQuery" class="imageCode"/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode2 evenement double click -->
<div class="modal" id="evenementDoubleClick" tabindex="-1" role="dialog" aria-labelledby="evenementDoubleClick" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">L'événement double click</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/2-evenementDoubleClick/2-evenementDoubleClick-HTML.png" alt="evenementDoubleClick-HTML" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/2-evenementDoubleClick/2-evenementDoubleClick-JQ.png" alt="evenementDoubleClick-jQuery" class="imageCode"/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode3 les evenements mouseenter mouseleave -->
<div class="modal" id="evenementMouseenter" tabindex="-1" role="dialog" aria-labelledby="evenementMouseenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Les événements mouseenter et mouseleave</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/3-evenementMouseenter/3-evenementMouseenter-HTML.png" alt="evenementMouseenter-HTML" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/3-evenementMouseenter/3-evenementMouseenter-JQ.png" alt="evenementMouseenter-jQuery" class="imageCode"/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode4 la methode hover -->
<div class="modal" id="methodeHover" tabindex="-1" role="dialog" aria-labelledby="methodeHover" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">La méthode hover</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/4-methodeHover/4-methodeHover-HTML.png" alt="methodeHover-HTML" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/4-methodeHover/4-methodeHover-JQ.png" alt="methodeHover-jQuery" class="imageCode"/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode5 evenements mousedown et mouseup -->
<div class="modal" id="methodeMousedown" tabindex="-1" role="dialog" aria-labelledby="methodeMousedown" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Les événements mousedown et mouseup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/5-evenementMouseDown/5-evenementMouseDown-HTML.png" alt="evenementMouseDown-HTML" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/5-evenementMouseDown/5-evenementMouseDown-JQ.png" alt="evenementMouseDown-jQuery" class="imageCode"/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode6 evenements keydown et keyup -->
<div class="modal" id="evenementKeydown" tabindex="-1" role="dialog" aria-labelledby="evenementKeydown" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Les événements keydown et keyup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/6-evenementKeydown/6-evenementKeydown-HTML.png" alt="evenementKeydown-HTML" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/6-evenementKeydown/6-evenementKeydown-JQ.png" alt="evenementKeydown-jQuery" class="imageCode"/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal btnVoirCode7 evenement focus -->
<div class="modal" id="evenementFocus" tabindex="-1" role="dialog" aria-labelledby="evenementFocus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">L'événement focus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br/>
                <p><u>HTML :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/7-evenementFocus/7-evenementFocus-HTML.png" alt="evenementFocus-HTML" class="imageCode"/>
                <br/>
                <p><u>jQuery :</u></p>
                <br/>
                <img src="assets/image/photoChapitre2/7-evenementFocus/7-evenementFocus-JQ.png" alt="evenementFocus-jQuery" class="imageCode"/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
