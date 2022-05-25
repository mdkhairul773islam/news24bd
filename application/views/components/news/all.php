<style>
    @media print{
        aside{display: none !important;}
        nav{display: none;}
        .panel{border: 1px solid transparent;left: 0px;position: absolute;top: 0px;width: 100%;}
        .none{display: none;}
        .panel-heading{display: none;}
        .panel-footer{display: none;}
        .panel .hide{display: block !important;}
        .title{font-size: 25px;}
        table tr th,table tr td{font-size: 12px;}
    }
    .table > tbody > tr > td{vertical-align: middle;}
    table tr td img{width: 100%; max-width: 100px; max-height: 80px;}
</style>

<div class="container-fluid" ng-controller="allNewsCtrl">
    <div class="row">
        <div id="loading">
            <img src="<?php echo site_url("private/images/loading-bar.gif"); ?>" alt="Image Not found"/>
        </div>
                
        <div class="panel panel-default loader-hide" id="data">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">সব খবর</h1>
                </div>
            </div>

            <div class="panel-body" ng-cloak>
                
                <h4 class="text-center hide" style="margin-top: 0px;">সব খবর</h4>

                <div class="row none" style="margin-bottom:15px;">
                    <div class="col-sm-4" style="margin-bottom:15px;">
                        <input type="text" ng-model="search" placeholder="খোঁজুন.........." class="form-control">
                    </div>

                    <div class="col-sm-offset-4 col-sm-4">
                        <div style="display: flex;" class="pull-right">
                            <label style="line-height: 34px; padding-right: 5px;">প্রতি পূষ্টা &nbsp;</label>
                            <select ng-model="perPage" class="form-control" style="width:75px;">
                                <option value="">All</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                         </div>
                    </div>
                </div>

                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>তারিখ</th>
                        <th>শিরোনাম</th>
                        <th>ছবি</th>
                        <th>বিভাগ</th>
                        <th>উপ বিভাগ</th>
                        <th>ট্যাগ</th>
                        <th class="text-center">একশন</th>
                    </tr>

                    <tr dir-paginate="all in newspaper|filter:search|itemsPerPage:perPage">
                        <td>{{all.sl}}</td>
                        <td>{{all.date}}</td>
                        <td>{{all.title}}</td>
                        <td>
                            <img ng-src="<?php echo site_url(); ?>{{ all.photo }}" alt="Image not found!">
                        </td>
                        <td>{{all.topic}}</td>
                        <td>{{all.sub_topic}}</td>
                        <td>{{all.tags}}</td>
                        <td  class="none text-center">
                            <a
                                class="btn btn-primary"
                                title="Edit" href="<?php echo site_url('news/news/edit/{{all.id}}');?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            
                            <a 
                                class="btn btn-danger" onclick="return confirm('This Data will delete permanently');"
                                href="?delete_token={{ all.id }} & img_url={{ all.photo }}">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                </table>

                <dir-pagination-controls max-size="perPage" direction-links="true" boundary-links="true" class="none"></dir-pagination-controls>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>


