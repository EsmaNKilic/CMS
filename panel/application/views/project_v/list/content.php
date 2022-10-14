<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">PROJELER
            <a href="<?php echo base_url("project/new_form");?>" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Yeni Proje</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

        <?php if(empty($items)) { ?>
            <div class="alert alert-danger text-center">
                <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("project/new_form");?>">tıklayınız</a></p>
		    </div>
            <?php } else { ?>
                
            <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th>#id</th>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>Medya</th>
                        <th>Durumu</th>
                        <th>New</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable">
                        
                        <?php  foreach ($items as $item) { ?>
                            <tr>
                                <td class="text-center">#<?php echo $item->id;?></td>
                                <td class="text-center"><?php echo $item->title;?></td>
                                <td><?php echo $item->description;?></td>
                                <td>
                                    <img width="150" src="<?php echo base_url("uploads/{$viewFolder}/$item->img_url"); ?>" alt="" class="img-rounded">
                                </td>  
                                <td>
                                    <input 
                                        data-url="<?php echo base_url("project/isActiveSetter/$item->id");?>"
                                        class="isActive"
                                        type="checkbox" 
                                        data-switchery 
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? "checked" : "";?>
                                    />		    
                                </td>
                                <td>
                                    <input 
                                        data-url="<?php echo base_url("project/isNewSetter/$item->id");?>"
                                        class="isNew "
                                        type="checkbox" 
                                        data-switchery 
                                        data-color="#721504"
                                        <?php echo ($item->isNew) ? "checked" : "";?>
                                    />		    
                                </td>
                                <td>
                                    <button data-url="<?php echo base_url("project/delete/$item->id");?>" class="btn btn-sm btn-danger btn-outline remove-btn"><i class="fa fa-trash"></i> Sil</button>
                                    <a href="<?php echo base_url("project/update_form/$item->id");?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <?php } ?>
        </div><!-- .widget -->
	</div><!-- END column -->
</div>
