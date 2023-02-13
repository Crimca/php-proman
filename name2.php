<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Name</title>
    </head>
    <body>
        <form method="post" action="info.php">  
                <p>
                <label for="name">
                    Your name:
                </label>
                <input type="text" name="name" id="name">
                </p>

                <p>
                <label for="city">
                    City:
                </label>
                <input type="text" name="city" id="city">
                </p>

            <p>     
            <label for="language">
                    Select your language:
                </label>
            
            <select name="language" id="language">
          
            <option value="">---Language---</option>
            <option value="finnish">Finnish</option>
            <option value="swedish">Swedish</option>
            <option value="english">English</option>
            </select>
            </p>
    <p>
    <button type="submit">Submit</button>
    </p>
    </form>
    </body>
    </html>