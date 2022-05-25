<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>লগইন একটিভিটি</h1>
                </div>
            </div>

            <div class="panel-body">
            
	        	<div class="row">
	        		<div class="col-xs-12">
					<table class="table table-bordered">
						<tr>
							<th>ক্র. নং</th>
							<th>তারিখ</th>
							<th>সময়</th>
							<th>ইউজার নাম</th>
						</tr>
						<?php
						 foreach($user_info as $key => $row){
						 $classes=explode("_",$row->datetime);
						 
						 ?>
						<tr>
							<td><?php echo $key+1;?></td>
							<td><?php echo $classes[0];?></td>
							<td><?php echo $classes[1];?></td>
							<td><?php echo $row->username;?></td>
						</tr>
						<?php }?>
					</table>
	        		</div>
	        	</div>
	                  
	        </div>

            <div class="panel-footer">&nbsp;</div>
        </div>

    </div>
</div>