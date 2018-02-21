<html>
<head> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<form action="{{url('event_save')}}" method="post">
		{{ csrf_field() }}

	Name:<br> 
	<input type="text" name="ename" id="ename" value="{{$data->eventName}}"><br>

	Discription:<br>
	<textarea type="text" name="comment" id="comment" value="{{$data->discription}}"></textarea><br>

	Organiser:<br>
	<input type="text" name="oname" id="oname" value="{{$data->organiser}}"><br>

	Start Date:<br>
	 <input id="start_date" type="date" name="start_date" id="start_date" value="{{$data->startDate}}"><br>

	 End Date:<br>
	  <input id="end_date" type="date" name="end_date" id="end_date" value="{{$data->endDate}}"><br>


	<br><input type="submit">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		var remove = 1; 
		var count=1;
		
    //$("input").change(function(){
        // alert("The text has been changed.");
        


    	$('#start_date').change(function(){
    		if($('#end_date').val()!=''){
    		if($('#start_date').val()>$('#end_date').val()){
    			$('#start_date').val('');
    			$('#end_date').val('');
    		alert('invalid date');
			}}
		});
    	$('#end_date').change(function(){
    		if($('#start_date').val()!=''){
    		if($('#start_date').val()>$('#end_date').val()){
    			$('#start_date').val('');
    			$('#end_date').val('');
    		alert('invalid date');
			}}
    	});

  
    
	});

</script>
</form>
</body>
</html>