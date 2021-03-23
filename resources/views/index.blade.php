<html>
	<head>
		<title>ATG app</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<style>
			.note
			{
    			text-align: center;
    			height: 80px;
    			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    			color: #fff;
    			font-weight: bold;
    			line-height: 80px;
			}
			.form-content
			{
    			padding: 5%;
    			border: 1px solid #ced4da;
    			margin-bottom: 2%;
			}
			.form-control{
    			border-radius:1.5rem;
			}
			.btnSubmit
			{
			    border:none;
 			   border-radius:1.5rem;
 			   padding: 1%;
			    width: 20%;
			    cursor: pointer;
			    background: #0062cc;
			    color: #fff;
			}
		</style>
        
	</head>
<body>
	<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Register</p>
                </div>
                <div>
					@if(Session::has('success'))
					<div class="alert alert-success">
					{{ Session::get('success')}}
					</div>
				@endif
				</div>
                
				<form action="{{route('store')}}" method="post">
					@csrf
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value=""/>
                                
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email *" value=""/>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="pincode" class="form-control" placeholder="Pincode *" value=""/>
                            </div>
                            
                        </div>
                    </div>
                    <button class="btn btn-success" style="width: 80px;">Submit</button>
                </div>
            </form>
            </div>
        </div>
</body>
</html>
