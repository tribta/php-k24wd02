<form action="./output.php" method="post">
    Name:<input name="person[username]" type="text"><br />
    Email:<input name="person[email]" type="text"><br />
    Beer:<br />
    <select multiple name="beer[]">
        <option value="tiger">tiger</option>
        <option value="heiniken">heiniken</option>
        <option value="333">333</option>
    </select><br />
    <input type="submit" value="Submit Me!">
</form>