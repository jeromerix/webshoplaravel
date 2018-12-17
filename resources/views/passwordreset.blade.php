@extends('layout')

@section('title','Passwordreset')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="wrapper">
        <div class ="header"><h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p></div>
        <form action="" method="post">
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-info" href="http://127.0.0.1:8000/">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
