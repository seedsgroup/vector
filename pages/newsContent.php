<?php include "class/news.php"; $eventData=new News(); $allevents=$eventData->selectall(); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<div id="newsWrapper">
    <center>
        <h1 class="pageTitle">OUR NEWS/EVENTS</h1>
    </center>
    <div class="container-fluid" style="padding-bottom: 3.5em;">
    <table class="table table-bordered table-hover" style="width: 100% !important;" id="myTable">
        <thead>
            <tr>
            <th>Serial No.</th>
            <th>Title</th>
            <th>Type</th>
            <th>Published Date</th>
            <th class="action">View</th>
            </tr>
        </thead>
        <tbody>
            <?php $y=0; $x=0; foreach ($allevents as $key=> $value){ ?>
            <tr>
                <td>
                    <?php echo $key+1; ?>
                </td>
                <td>
                    <?php echo ucfirst($value->title); ?>
                </td>
                <td>
                    <?php echo ucfirst($value->catType); ?>
                </td>
                <td>
                    <?php $newDate=strtotime($value->added_date); echo date("j/n/Y", $newDate); ?>
                </td>
                <td class="action">
                    <a href="#" target="_blank" data-toggle="modal" data-target="#myModal<?php echo $y++; ?>"> <i class="fa fa-eye fa-lg Ceye"></i></td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>
    </div>
</div>
<?php foreach ($allevents as $key=> $value){ ?>
<div class="modal fade" id="myModal<?php echo $x++;?>" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center>
                    <h1 class="modal-title" style="padding: 2rem 0;">Detail Information of <br>
                        <?php echo $value->title; ?>
                    </h1>
                </center>
            </div>
            <div class="modal-body"> <i class="fa fa-calendar fa-lg"></i> Event Date: <span><?php echo $value->event_date; ?></span> <span class="pull-right"><i class="fa fa-map-marker fa-lg"></i> Event Location: <span><?php echo $value->location; ?></span></span>
                <?php if(!empty($value->summary)){?>
                <p>
                    <h2>Event Summary: </h2><br>
                    <?php echo html_entity_decode(stripslashes($value->summary)); ?> </p>
                <?php } ?>
                    <?php if(!empty($value->description)){?>
                    <p>
                        <h2>Event Description: </h2><br>
                        <?php echo html_entity_decode(stripslashes($value->description)); ?> </p>
                    <?php } ?>
            </div>
            <div class="modal-footer">
                <center>
                    <h2>
                        <?php echo $legal; ?>
                    </h2>
                    <center>
            </div>
        </div>
    </div>
</div>
<?php } ?>