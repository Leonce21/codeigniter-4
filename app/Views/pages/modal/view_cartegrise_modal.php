<?php if (isset($carte_grise)): ?>
    <div class="modal fade" id="view-cartegrise-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" data-backdrop="static" style="display: none;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <form class="modal-content" action="" method="post" id="add_cartegrise_form">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        View Carte Grise Details
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" class="ci_csrf_data">

                    <div class="row align-content-center">

                        <div class="form-group col-md-6">
                            <label for=""><b>Numero du chasis</b></label>
                            <p><?= $carte_grise['IMCHASSIS'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""><b>Numero d'immatriculation</b></label>
                            <p><?= $carte_grise['IMIMMAT'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""><b>Date de mise en circulation</b></label>
                            <p><?= $carte_grise['IMDATECIRCUL'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""><b>Modèle /type présent sur les documents de la SGS</b></label>
                            <p><?= $carte_grise['IMMODEL'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""><b>Cylindrée</b></label>
                            <p><?= $carte_grise['IMCYL'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Energie">Energie</label>
                            <p><?= $carte_grise['IMENERGIE'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""><b>Puissance de la voiture</b></label>
                            <p><?= $carte_grise['IMPUISSANCE'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Genre</label>
                            <p><?= $carte_grise['genre'] ?></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""><b>Marque</b></label>
                            <p><?= $carte_grise['marque'] ?></p>
                        </div>

                    </div>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary action">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php else: ?>
  <p>Carte Grise not found.</p>
<?php endif; ?>