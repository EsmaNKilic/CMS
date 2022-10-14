<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Portfolio Listesi
            <a href="<?php echo base_url("portfolios/new_form");?>" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

        <?php if(empty($items)) { ?>
            <div class="alert alert-info text-center">
                <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("portfolios/new_form");?>">tıklayınız</a></p>
		    </div>
            <?php } else { ?>
                
            <table class="table table-hover table-striped table-bordered content-container text-center">
                    <thead>
                        <th><i class="fa fa-reorder"></i></th>
                        <th>#id</th>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>Kategori</th>
                        <th>Müşteri</th>
                        <th>Bitiş Tarihi</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="<?php echo base_url("portfolios/rankSetter");?>">
                        <?php  foreach ($items as $item) { ?>

                            <tr id="ord-<?php echo $item->id; ?>">
                            <td><i class="fa fa-reorder"></i></td>
                            <td>#<?php echo $item->id;?></td>
                            <td><?php echo $item->title;?></td>
                            <td><?php echo $item->description;?></td>
                            <td><?php echo get_category_title($item->category_id);?></td>
                            <td><?php echo $item->client;?></td>
                            <td><?php echo get_readable_date($item->finishedAt);?></td>
                            <td>
                                    <input 
                                    data-url="<?php echo base_url("portfolios/isActiveSetter/$item->id");?>"
                                    class="isActive"
                                    type="checkbox" 
                                    data-switchery 
                                    data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : "";?>
                                    />		    
                            </td>
                            <td>
                                <button data-url="<?php echo base_url("portfolios/delete/$item->id");?>" class="btn btn-sm btn-danger btn-outline remove-btn"><i class="fa fa-trash"></i> Sil</button>
                                <a href="<?php echo base_url("portfolios/update_form/$item->id");?>" class="btn btn-sm btn-success btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                <a href="<?php echo base_url("portfolios/image_form/$item->id");?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-image"></i> Resimler</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <?php } ?>
        </div><!-- .widget -->
	</div><!-- END column -->
</div>