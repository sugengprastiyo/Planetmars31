<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Nomor 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<div class="row">
            <div class="col">
                <h2>Create Account-Register</h2>
                <form method="GET" action="nomor3tampil.php">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Your Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Unero" name="name" id="name" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input type="email" placeholder="Email" name="email" id="emailMain" class="form-control" required>
                        <input type="email" placeholder="Other Email" name="re_email" id="emailAlter" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Your Phone</span>
                        </div>
                        <input type="number" placeholder="Country Code (+62)"  class="form-control" id="countrycode" pattern="+[0-9]{2}">
                        <input type="number" placeholder="City Code (65125)" class="form-control" id="citycode" pattern="[0-9]{4}">
                        <input type="tel" placeholder="Phone Number" name="phoneNumber" class="form-control"  id="phone" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Mobile Phone</span>
                        </div>
                        <input type="tel" class="form-control" id="mobile" placeholder="0822-3618-0971" name="mobilePhone" pattern="[0-9]{12}" required>
                    </div> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Your Portal Address</span>
                        </div>
                        <textarea class="form-control" id="address" name="portalAddress"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="country">Country</label>
                        </div>
                        <select class="custom-select" id="country" name="country">
                            <option selected>Choose...</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Papua">Papua Nugini</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                        </div>
                        <input type="password" placeholder="Password" id="password1" class="form-control" required>
                        <input type="password" placeholder="Re-Type Password" id="password2" class="form-control" required>
                    </div>
                    <br>
                    <input type="checkbox">Save My Email and Password<br>
                    Already Registered? Login Here<br><br>
                    <button type="submit" class="btn btn-info" value="Kirim">Continue</button>
                    <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
                </form>                
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>

