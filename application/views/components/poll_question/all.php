


<div class="container-fluid">
    <div class="row">
        <?php echo $confirmation; ?>
        <div class="panel panel-default" ng-controller="pollPublishCtrl" ng-cloak>
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>নতুন জরিপ</h1>
                </div>
            </div>

            <div class="panel-body">
               <table class="table table-bordered" >
					<tr>
						<th>ক্রমিক</th>
						<th width="90">তারিখ</th>
						<th>প্রশ্ন</th>
						<th width="140">অবস্থা</th>
						<th width='170'>একশন</th>
					</tr>
					
					<?php //foreach($poll as $key => $value){ ?>
					<tr ng-repeat="row in polls">
						<td>{{row.sl}}</td>
						<td>{{row.date}}</td>
						<td>{{row.question}}</td>
						<td>
						    
						    <span style="color:green;" ng-if="message == row.id">{{message}}</span>
						    <select class="form-control"  ng-init="publishVal.row.sl= row.status" ng-model="publishVal.row.sl"  ng-change="publish(publishVal.row.sl,row.id)">
						        <option value="1">প্রকাশিত</option>
						        <option value="0">অপ্রকাশিত</option>
						    </select>
						</td>
						<td>
							<a href="<?php echo site_url('poll_question/poll_question/view/'.'{{row.id}}'); ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
							<a href="<?php echo site_url('poll_question/poll_question/edit/'.'{{row.id}}'); ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
							<a href="<?php echo site_url('poll_question/poll_question/delete/'.'{{row.id}}'); ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger"><i class="fa fa-close"></i></a>
						</td>
					</tr>
			   </table>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
 