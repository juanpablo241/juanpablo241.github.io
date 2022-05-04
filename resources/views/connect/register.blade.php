@extends('connect.master')

@section('name', 'Login')

@section('content')
<div class="form-structor">
   
    

	<div class="signup">
        
		<h2 class="form-title" id="signup">Bienvenido</h2>

        <center>
            <img class="logoN" width="200px" height="150px" src="{{url('images/logonutresa.png')}}" alt="">
        </center>
        
        
	</div>

    
	<div class="login slide-up">

		<div class="center">
			<h2 class="form-title" id="login">Log in</h2>
			<div class="form-holder">
                {!! Form::open(['url'=>'/register'])!!}
                {!! Form::text('name',null, ['class' => 'input', 'placeholder'=>'name',  'required']) !!}
                {!! Form::email('email',null, ['class' => 'input', 'placeholder'=>'Email',  'required']) !!}
                {!! Form::password('password', ['class' => 'input', 'placeholder'=>'Pasword', 'required'])!!}
                {!! Form::text('area',null, ['class' => 'input', 'placeholder'=>'area', 'required' ]) !!}

            </div>
                {!! Form::submit('Registro',['class'=>'submit-btn'])!!}
                {!! Form::close()!!}



                <a href="{{url('/register')}}">Registro</a>
                    @if(Session::has('message'))
                    <div class="container">
                        <div class="mtop16 alert alert-{{Session::get('typealert')}}" style="display: none;">
                        {{Session::get('message')}}
                        @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                        @endif
                        <script>
                            $('.alert').slideDown();
                            serTimeout(function(){$('.alert').slideUp();}, 10000);
                        </script>
                        </div>
                    </div>
                    @endif

		</div>
        
	</div>
</div>

<script>

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');

        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if(element !== "slide-up") {
                    parent.classList.add('slide-up')
                }else{
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });

        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if(element !== "slide-up") {
                    parent.classList.add('slide-up')
                }else{
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });
</script>
@stop

