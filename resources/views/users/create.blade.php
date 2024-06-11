<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body style="background-color: powderblue;">
    <div class="container mt-5">
        <form action="{{ route('save.user') }}" method="post" id="userForm">
            @csrf
            <fieldset>
                <h1>Employee Details</h1>
                <br>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" class="form-control form-control-sm" id="city" placeholder="Enter your city" required>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control form-control-sm" id="mobile" placeholder="Enter your phone number" required>
                </div>
               
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </fieldset>
        </form>
    </div>

    <script>
          <script>
        document.getElementById('userForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const city = document.getElementById('city').value.trim();
            const mobile = document.getElementById('mobile').value.trim();

            if (!name || !email || !city || !mobile) {
                alert('Please fill out all fields.');
                return;
            }

            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const mobilePattern = /^[0-9]{10}$/;

            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            if (!mobilePattern.test(mobile)) {
                alert('Please enter a valid mobile number.');
                return;
            }

            const userData = {
                name: name,
                email: email,
                city: city,
                mobile: mobile
            };

            fetch('https://your-api-endpoint.com/users', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(userData),
            })
            .then(response => response.json())
            .then(data => {
                alert('User registered successfully!');
                console.log('Success:', data);
                document.getElementById('userForm').reset();
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred while registering the user.');
            });
        });
    </script>

</body>
</html>
