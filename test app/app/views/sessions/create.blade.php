 

 <h1>LOgin</h1>

 {{Form::open(array('route'=>'session.store')) }}

 <ul>
 	<li>
 		{{Form::label ('username','Username:')}}
 		{{Form::text('username')}}
 	</ul>


 	<li>

 		  {{Form::label('email','Email:')}}
 		  {{Form::text('email')}}

 		</li>

 		<li>
          
           {{Form::label('password', 'password')}}
           {{Form::password('password')}}

         </li>

         <li>

              {{Form::submit()}}


         </li>

     </ul>

     {{Form::close()}}