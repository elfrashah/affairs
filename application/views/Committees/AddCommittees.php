<?php $this->load->view('app/layout/parts/top') ?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-header">
           <div class="header-title">
               <span class="h-main">الشئون العلمية</span>  /
               <span class="h-sub">اللجان</span>
           </div>
            
     </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
              <div class="portlet-body form">
                 <form action="<?= base_url() ?>CommitteesController/CommitteesSetItems" method="post" role="form" >
                     <div class="form-body">
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                       <label for="item">اسم اللجنة</label>
                                       <input name="COMM_TITLE" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- row end -->
                                   <div class="row">
                                    <div class="col-md-8">
                                     <div class="form-group">
                                            <label>نوع اللجنة</label>
                                            <div class="radio">
                                                <label>
                                                    <input  name="COMM_TYPE" id="optionsRadios1" value="1" checked="" type="radio">      لجنة ابتعاث
                                                </label>
                                            </div>
                                           
                                            <div class="radio">
                                                <label>
                                                    <input   name="COMM_TYPE" id="optionsRadios1" value="2"  type="radio">      لجنة ترقيات صغرى
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input  name="COMM_TYPE" id="optionsRadios1" value="3"  type="radio">      لجنة ترقيات كبرى
                                                </label>
                                            </div>
                                        </div>
                                         </div>
                                        </div>
                           <!-- row end -->
                           
                            <div class="row">
                               <div class="col-md-8">
                                    <div class="form-group">
                                     <input name="" type="submit" class="btn btn-success" value="حفظ">
                                        <a href="<?=base_url();?>CommitteesController" class="btn btn-default"> رجوع </a>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                     </div>
                 </form>
              </div>
            </div>
         </div>
      </div>  
      
</div>     
<?php $this->load->view('app/layout/parts/footer'); ?>