<h1>Create Product</h1>
<form action="/products" method='POST'>
@csrf
  <label for="fname">Name:</label><br>
  <input type="text" name="name"><br>
  <label for="lname">Description:</label><br>
  <input type="text" name="description" ><br><br>
  <label for="lname">price:</label><br>
  <input type="number" name="price" ><br><br>
  <label for="lname">Image URL:</label><br>
  <input type="text" name="image_url" ><br><br>
  <input type="submit" value="Save">
</form> 