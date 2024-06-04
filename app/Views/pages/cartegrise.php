<?= $this->extend("layout/pages-layout.php") ?>
<?= $this->section('content') ?>

<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Carte Grise</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Carte grise
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
    
        <div class="col-lg-4 col-md-12 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px">
               
                <div class="text-center">
                    <div class="h5 mb-1">nouvelle Carte grise</div>
                    <div
                        class="font-14 weight-500 max-width-200 mx-auto pb-20"
                        data-color="#a6a6a7"
                    >
                        You can enjoy all our features by upgrading to pro.
                    </div>
                    <a href="<?php echo base_url('new-cartegrise'); ?>" class="btn btn-primary btn-lg">Commencer</a>
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-12 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px">
                
                <div class="text-center">
                    <div class="h5 mb-1">Duplicata Carte grise</div>
                    <div
                        class="font-14 weight-500 max-width-200 mx-auto pb-20"
                        data-color="#a6a6a7"
                    >
                        You can enjoy all our features by upgrading to pro.
                    </div>
                    <a href="#" class="btn btn-primary btn-lg">Commencer</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px">
                
                <div class="text-center">
                    <div class="h5 mb-1">une Mutation</div>
                    <div
                        class="font-14 weight-500 max-width-200 mx-auto pb-20"
                        data-color="#a6a6a7"
                    >
                        You can enjoy all our features by upgrading to pro.
                    </div>
                    <a href="#" class="btn btn-primary btn-lg">Commencer</a>
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-12 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px">
                
                <div class="text-center">
                    <div class="h5 mb-1">Renouveler Carte grise</div>
                    <div
                        class="font-14 weight-500 max-width-200 mx-auto pb-20"
                        data-color="#a6a6a7"
                    >
                        You can enjoy all our features by upgrading to pro.
                    </div>
                    <a href="#" class="btn btn-primary btn-lg">Commencer</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection()?>