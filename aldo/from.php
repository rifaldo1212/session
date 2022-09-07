<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
    <div>
           id <input type="password" name="id" id="">
        </div>
        <div>
            Username : <input type="text" name="username" id="">
        </div>
        <div>
           Password <input type="password" name="password" id="">
        </div>
        <div>
            <label>role</label>
            <select name="role" id="">
                <option value="1">admin</option>
                <option value="2">user</option>
            </select>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>