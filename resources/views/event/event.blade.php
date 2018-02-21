 <html>
<head> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<form action="{{url('event_save')}}" method="post">
		{{ csrf_field() }}
	Name:<br> 
	<input type="text" name="ename" id="ename" value=""><br>

	Discription:<br>
	<textarea type="text" name="comment" id="comment"></textarea><br>

	Organiser:<br>
	<input type="text" name="oname" id="oname"><br>

	Start Date:<br>
	 <input id="start_date" type="date" name="start_date" id="start_date"><br>

	 End Date:<br>
	  <input id="end_date" type="date" name="end_date" id="end_date"><br>



	<!-- <div> -->
	<!--  <i id="agenda" class="fa fa-plus-square-o" style="font-size:24px"></i><br> -->
	
	<!-- Event Agenda:<br> -->
	<!-- <table>
	  <tr id="row">
	  <td><div><input id="agenda" type="text" name="agenda"><br></div></td>
	  <td><div><input id="start_time" type="time" name="start_time"><br></div></td>
	  <td><div><input id="end_time" type="time" name="end_time"><br></div></td>
	  <td><div><button style="font-size:16px">remove <i id="eventremove" class="fa fa-close"></i></button></div></td>
	  </tr>
	</table>
	</div> -->
	<!-- <input type="file" name="pic" accept="image/*"> -->


	<br><input type="submit">

	 
	<table>
	 @foreach($events as $event)
	 	<tr>
	 	<td>{{$event->eventName}}</td>
	 	<td>{{$event->discription}}</td>
	 	<td>{{$event->organiser}}</td>
	 	<td>{{$event->startDate}}</td>
	 	<td>{{$event->endDate}}</td>
	 	<td>
	 	<li><a class="btn btn-small btn-primary" href="{{'event_edit/'}}{{$event->id}}" title="edit"><i class="fa fa-pencil"></i></a></li>
	 	</tr>
	 @endforeach
	</table>



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

   //  	$('#agenda').click(function(){
    		
   //  		var app1 = '<tr><td><div><input id="agenda'+count+'" type="text" name="agenda'+count+'"><br></div></td><td><div><input id="start_time'+count+'" type="time" name="start_time'+count+'"><br></div></td><td><div><input id="end_time'+count+'" type="time" name="end_time'+count+'"><br></div></td> <td><div><button style="font-size:16px">remove <i id="eventremove'+remove +'"'+'class="fa fa-close"></i></button></div></td></tr>';
   //  		remove=remove+1;
   //  		count=count+1;
    		
	 	// $("table").append(app1);
   //  	});
	});

</script>
</form>
</body>
</html>

   

