<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
</head>
<body>
    <form action="/projects" method="POST" class="container" style="padding-top: 40px">
        @csrf

        <h1 class="heading is-1">Create a project</h1>

        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" name="title" class="input" placeholder="Title">
            </div>
        </div>
        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create project</button>
            </div>
        </div>
    </form>
</body>
</html>
