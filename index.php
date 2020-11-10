<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.monospace {
  font-family: "Lucida Console", Courier, monospace;
}
</style>
</head>
<body>

<center>
<p class="monospace">  Interview Managing Portal</p>
<form method="post" action="view.php">
<button class="button button1">Click here to view</button>
</form>
<form method="post" action="insert.php">

<button class="button button2" a href="insert.php">Click here to Insert</button>
</form>
</body>
</html>
