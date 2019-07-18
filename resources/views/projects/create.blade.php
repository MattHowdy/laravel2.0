<!DOCTYPE html>

<html>
    <head>

        <title>
            project
        </title>
    </head>

    <body>
        <form method="POST" action="/projects">
            @csrf
            
            <div><input type="text" placeholder="Project title" name="title"></div>
            <div><textarea name="description" placeholder="Description here" id="" cols="30" rows="10"></textarea></div>
            <div><button type="submit">Submit</button></div>
        </form>
    </body>
</html>