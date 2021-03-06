<?php
	$record = $this->db->get_where('revenue_control',array('revenue_control_id'=>$param2))->row();
?>
<div class="row">
	<div class="col-xs-12">
		
	<div class="panel panel-primary " data-collapsed="0">
       <div class="panel-heading">
           <div class="panel-title">
              <i class="fa fa-pencil"></i>
                 <?php echo get_phrase('edit_special_fund');?>
           </div>
       </div>
        
       	<div class="panel-body"  style="max-width:50; overflow: auto;">
       		   <?php 
					echo form_open(base_url() . 'ifms.php/admin/special_fund/edit/'.$record->specific_fund_code , array('class' => 'form-horizontal form-groups-bordered validate'));
				 	
				?>
			
					<div class="form-group">
						<label for="" class="control-label col-sm-4"><?php echo get_phrase('fund_code');?></label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $record->specific_fund_code;?>" class="form-control" name="specific_fund_code" id="specific_fund_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
						</div>
					</div>
					
					<div class="form-group">
						<label for="" class="control-label col-sm-4"><?php echo get_phrase('description');?></label>
						<div class="col-sm-8">
							<textarea class="form-control" name="description" id="description" placeholder='Enter description here'><?php echo $record->description;?></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="" class="control-label col-sm-4"><?php echo get_phrase('revenue_account_association');?></label>
						<div class="col-sm-8">	
							<select class="form-control" id="revenue_id" name="revenue_id">
								<option value=""><?php echo get_phrase('select');?></option>
								<?php 
									$off_revenue = $this->finance_model->revenue_accounts('off');
									
									foreach($off_revenue as $revenue):
								?>
									<option value="<?php echo $revenue->revenue_id;?>" <?php if($revenue->revenue_id===$record->revenue_id) echo "selected";?>><?php echo $revenue->name;?></option>
								<?php 
									endforeach;
								?>
							</select>
						</div>
					</div> 
					
					<div class="form-group">
						<label for="" class="col-xs-2 control-label"><?php echo get_phrase('start_date');?></label>
						<div class="col-xs-4">
							<input type="text" value="<?php echo $record->start_date;?>" class="form-control datepicker" data-format="yyyy-mm-dd" name="start_date" id="start_date"  readonly="readonly"/>
						</div>
						<label for="" class="col-xs-2 control-label"><?php echo get_phrase('end_date');?></label>
						<div class="col-xs-4">
							<input type="text" value="<?php echo $record->end_date;?>" class="form-control datepicker" data-format="yyyy-mm-dd" name="end_date" id="end_date"  readonly="readonly"/>
						</div>
					</div>
					
					
				<div class="form-group">
					<div class="col-sm-8">
						<button type="submit" class="btn btn-info btn-icon"><i class="fa fa-pencil"></i><?php echo get_phrase('edit');?></button>
					</div>
				</div>
			
			</form>

		</div>
	</div>
</div>
</div>		