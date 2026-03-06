<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Personal Profile </title>
    <style>
        body {
            background-color: pink;
            font-family: 'Segoe UI' Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            padding: 40px;
        }
        .container {
            background: violet;
            padding: 30px;
            border-radius: 20px;
            width: 500px;
            box-shadow: 20px 20px 60px #bebebe, -20px -20px 60px #ffffff;
            border: 1px solid rgba(255,255,255,0.5);
        }
        h2 { color: #444; text-shadow: 1px 1px 0px #fff; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; color: #555; font-weight: bold; }
        
    
        input[type="text"], input[type="number"], input[type="email"], textarea {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #e0e0e0;
            box-shadow: inset 6px 6px 12px #bebebe, inset -6px -6px 12px #ffffff;
            box-sizing: border-box;
            outline: none;
        }
        
        
        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(145deg, #cacaca, #f0f0f0);
            box-shadow: 6px 6px 12px #bebebe, -6px -6px 12px #ffffff;
            cursor: pointer;
            font-weight: bold;
            color: #444;
            transition: 0.2s;
        }
        button:active {
            box-shadow: inset 4px 4px 10px #bebebe, inset -4px -4px 10px #ffffff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Create Your Profile</h2>
    <form action="IT9 ProfileProcessingPage.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="full_name" required>
        </div>
        
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" required>
        </div>

        <div class="form-group">
            <label>Course / Program</label>
            <input type="text" name="course" required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
        </div>

        <div class="form-group">
            <label>Hobbies (Checkboxes min-5)</label>
            <input type="checkbox" name="hobbies[]" value="Sleeping"> Sleeping
            <input type="checkbox" name="hobbies[]" value="Movies"> Movies
            <input type="checkbox" name="hobbies[]" value="Sport">Sport
            <input type="checkbox" name="hobbies[]" value="Music"> Music
            <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
            <input type="checkbox" name="hobbies[]" value="Dancing"> Dancing
        </div>

        <div class="form-group">
            <label>Short Biography</label>
            <textarea name="bio" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label>Profile Image</label>
            <input type="file" name="profile_pic" accept="image/*" required>
        </div>

        <button type="submit">CLICK TO WEBSITE</button>
    </form>
</div>

</body>
</html>