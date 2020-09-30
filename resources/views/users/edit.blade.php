 <div class="row">
    <div class="col s12">
    	<h1>UPDATE Users Information</h1>


    	<form action="/userss/{{ $user->id}}" method='POST'>
        @method('PUT')
    		@csrf
      		<div class="row">
      			  <div class="input-field col s6">
          				<input placeholder="Name" id="name" type="text" class="validate" name = 'name'>
         				 <label for="name">Name</label>
       			 </div>

       		</div>


   
     		<div class="row">
      			  <div class="input-field col s6">
         				 <input placeholder="UsersID" id="usersid" type="text" class="validate" name ='usersid'>
         				 <label for="usersid">UsersID</label>
       			 </div>
       		</div>


</div>
</div>
</form>
</div>
</div>
</div>