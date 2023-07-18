<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
    </head>
    <body>
        <header>
            <!-- header content goes here-->
            <h1> Welcome to My Website</h1>
        </header>
        <nav>
            <!-- Navigation Content Goes here-->
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profile">profile</a></li>
                <li><a href="/experience">Experience</a></li>
            </ul>
        </nav>
        <main>
            <!-- Main contents goes here-->
            <?= $this->renderSection('content')?>
        </main>
        <footer>
            <!-- Footer Content goes here--> 
            <p> © 2023 My website. All rights reserved.</p>
        </footer>
    </body>
</html>

