
<div class="modal fade" id="demande-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" data-backdrop="static" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" action="<?= base_url('add-demande') ?>" method="post" id="add_demande_form">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Large modal
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" class="ci_csrf_data">

                <div class="form-group">
                    <label for=""><b>Noms</b></label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom du propriétaire" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Prenoms</b></label>
                    <input type="text" class="form-control" name="prenom" placeholder="prenoms du propriétaire" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Sex</b></label>
                    <select class="custom-select" name="types">
                        <option selected="">Choose...</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="autres">autres</option>
                    </select>   
                </div>

                <div class="form-group">
                    <label for=""><b>NIU / Numéro d’identifiant unique </b></label>
                    <input type="text" class="form-control" name="NIU" placeholder="Numéro d’identifiant unique" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Reference</b></label>
                    <input type="text" class="form-control" name="Reference" placeholder="Reference unique de la demande" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Montant timbre</b></label>
                    <input type="text" class="form-control" name="Montant_timbre" placeholder="Montant du titre" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Montant fisc</b></label>
                    <input type="text" class="form-control" name="Montant_fisc" placeholder="Montant timbre sur dimenssion" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Date de naissance</b></label>
                    <input type="date" class="form-control" name="Dte_naissance" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Lieu de naissance</b></label>
                    <input type="text" class="form-control" name="Lieu_naissance" placeholder="Lieu de naissance du propriétaire" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
                </div>

                <div class="form-group">
                    <label for=""><b>Telephone</b></label>
                    <input type="number" class="form-control" name="Phone" placeholder="Numéro de téléphone du propriétaire" required>
                    <span class="text-danger error-text cartegrise_name_error"></span>
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
