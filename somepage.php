<?
$room_id=$_GET['room_id'];
$room_type=$_GET['room_type'];
$room_name=$_GET['room_name'];


?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="room_id">Name <?php echo $room_name;?></h4>
</div>
<div class="modal-body">
    <form id="form1" method="post">
        <b>Details</b>
        <hr></hr>
        Address: <p><?php echo $room_type;?></p>
        Phone_num: <p><?php echo $room_name;?></p>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div