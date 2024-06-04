<?= $this->extend("layout/pages-layout.php") ?>
<?= $this->section('content') ?>

<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Mes Demande</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Mes Demande
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card card-box">
                <div class="card-header">
                    <div class="clearfix">
                        <div class="pull-left">
                            liste des demandes
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <!-- Simple Datatable start -->
                    <table class="table hover data-table-export nowrap">
                        <thead>
                            <tr class="text-center">
                                <!-- <th class="table-plus datatable-nosort">ID</th> -->
                                <th>Nom & prenoms</th>
                                <th>Type</th>
                                <!-- <th>Operation</th>
                                <th>Identifiant</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                       
                            
                        
                                        
                        </tbody>
                    </table>	
					<!-- Simple Datatable End -->
                </div>
                
            </div>
        </div>
    </div>

    <?php include('pages/modal/demande-modal.php') ?> 
</div>


<?=$this->endSection()?>