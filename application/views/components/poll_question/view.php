


<div class="container-fluid">
    <div class="row">
        <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>রিপোর্ট</h1> 
                </div>
            </div>

            <div class="panel-body">
               <table class="table table-bordered" >
					<tr>
						<th>ক্রমিক</th>
						<th width="90">তারিখ</th>
						<th>প্রশ্ন</th>
						<th width="90">হ্যাঁ </th>
						<th width="90">না</th>
						<th width="90">মন্তব্য নেই</th>
						<th>অবস্থা</th>
						
					</tr>
					
					<?php foreach($poll as $key => $value){ ?>
					<tr >
						<td><?php echo $key+1;?></td>
						<td><?php echo $value->date;?></td>
						<td><?php echo $value->question;?></td>
						<td><?php echo $value->yes;?></td>
						<td><?php echo $value->no;?></td>
						<td><?php echo $value->no_comment;?></td>
						<td><?php if($value->status == 1 ){echo "প্রকাশিত";}else{echo "অপ্রকাশিত";}?></td>
					</tr>
					<?php }?>
			   </table>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
 