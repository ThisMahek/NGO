<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include_once("includes/common-head.php"); ?>    
    </head>
    <body id="body">
        <?php include_once("includes/sidebar.php"); ?> 
        <?php include_once("includes/header.php"); ?>
        <div class="page-wrapper">
            <div class="page-content-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">Dashboard</a></li>
                                        <li class="breadcrumb-item active"><?php echo $pageName; ?> </li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><?php echo $pageName; ?> </h4>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table" id="datatable_1">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Application No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Status</th>
                                            <th>Approved/Reject</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                            foreach($organisation as $row){
                                                
                                        ?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$row->application_no?></td>
                                            <td><?=$row->organisation_name?></td>
                                            <td><?=$row->org_email?></td>
                                            <td><?=base64_decode($row->password)?></td>
                                           <?php
                                           if($row->application_no!="" && $row->it_pan!="" && $row->website_url!=""  && $row->person_name !="" && $row->designation!=""  && $row->contact_person!=""  && $row->cp_designation!=""  && $row->cp_email_id!=""  && $row->cp_descriptions !="" && $row->registration_as !="" && $row->registration_no!=""  && $row->address_proof!=""  && $row->state!="" && $row->document!="" && $row->organisation_logo!="" && $row->pan_registration_document!="" && $row->registration_date!="" && $row->city!="" && $row->district!="" && $row->pin!="" )
                                           {
                                           ?>
                                            <td>Complete</td>
                                            <?php }else{?>
                                                <td>Incomplete</td>
                                                <?php }?>
                                            <!-- <td class="text-center">
                                                <div class="form-check form-switch form-switch-success">
                                                  <a href="<?php echo base_url();?>AdminBackend/change_ngo_status/<?=$row->id?>">  <input class="form-check-input" type="checkbox"  name="status"<?=($row->status==1)?"checked":""?> id="customSwitchSuccess"  onclick="return confirm('Are you sure want to change status')"></a>
                                                </div>
                                            </td> -->
                                            <td>
                                           <?php if($row->status==0){?>
                                           <a href="<?=base_url('AdminBackend/change_ngo_status/'.$row->id.'/1')?>"><button
                                             class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" onclick="return confirm('Are you sure you want to approve this ?');">Reject</button>
                                          </a>
                                          <?php }else { ?>
                                          <a href="<?=base_url('AdminBackend/change_ngo_status/'.$row->id.'/0')?>"><button
                                             class="btn waves-effect waves-light btn-success btn-xs btn-icon btn-custom" onclick="return confirm('Are you sure you want to reject this ?');">Approved</button>
                                          </a>
                                          <?php }?>
                                            <td>
                                                <!-- <a href="<?php echo base_url();?>admin/editTabs" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a> -->
                                                <a onclick="return confirm('Are you sure want to delete this ngo!')" href="<?php echo base_url();?>AdminBackend/delete_ngo/<?=$row->id?>"  class="btn btn-danger" title="Delete" ><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php }?>                                                                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>

