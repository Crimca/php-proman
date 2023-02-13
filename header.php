<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sähköposti</title>
    
    <style>
body {background-color: #DBCDC6;}
p    {color: #4E3E9D;
font-family: calibri;
text-align: center;
font-size: 150%;}

.button {
  background-color: #1A162F;
  border: none;
  color: #DD99BB;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {font-size: 12px;}

</style>

    </head>
    <body>
        <form method="post">
            <div>
                <label for="email">
                   <p> Sähköposti:
                </label>
                <input type="text" name="email" id="email">
</p>
            </div>
            <div>
               <p> <button type="submit" class="button button1">Submit</button>
</p>
            </div>
        </form>