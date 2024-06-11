<body style="background-color: aquamarine">
    
    <form action="{{ route('update.user') }}" method="post">
        @csrf <!-- CSRF protection -->
    </body>
    <div style="text-align:center">
        <div class="form-group">
            <br>
            <input type="hidden" name="id" value="{{ $user->id }}">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Enter Your Name">
        </div>
        <br>
        @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show p-2 small lh-sm" role="alert" style="position: fixed; left: 10px; top: 25px; z-index: 9999;">
        {{ session('message') }}
    </div>
    @endif

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Enter your Email">
            <input type="hidden" name="email" value="{{ $user->email }}"> <!-- Hidden input to submit email -->
        </div>
        <div class="form-group">
            <br>
            <label>City : &nbsp;&nbsp;<input type="city" name='city' class="form-control" value="{{ $user->city }}" placeholder="Enter your City"></label>

        <div class="form-group">
            <br>
            <label>mobile:</label>
            <input type="text" name="mobile" class="form-control" value="{{ $user->mobile }}" placeholder="Enter Your Phone no.">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
