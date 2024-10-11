<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Front</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
</head>


<body>
    <h1>Laravel API frontend</h1>
    <div>
        <form action="/api/login">
            <label for="email">Input email:</label>
            <input type="text" name="email" id="email"> <br>
            <label for="email">Input password:</label>
            <input type="text" name="password" id="password" type="hidden">
            <input type="submit" value="Login"> <br>
            <label for="email">Your token:</label>
            <div id="user-token"></div>

        </form>
    </div>
    <div class="container">
        <h2>Get user</h2>
        <form action="/api/user" method="get" id="get-user-form">
            <label for="token">Token</label>
            <input type="text" name="token" id="token">
            <input type="submit" value="Get">
            <div id="user-data"></div>
        </form>
    </div>

    <div class="container">
        <h2>Create post</h2>
        <form action="/api/posts" method="post" id="create-post-form">
            <label for="token">Token</label>
            <input type="text" name="token" id="token">

            <label for="title">Title</label>
            <input type="text" name="title" id="title">

            <label for="body">Body</label>
            <textarea name="body" id="body"></textarea>

            <input type="submit" value="Create">
        </form>
        <div id="post-data"></div>
    </div>
    <div class="container">
        <h2>Posts</h2>
        <div id="user-posts"></div>
    </div>

</body>

</html>