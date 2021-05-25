<h1>Edit Product</h1>

<form action="/products/{{$product->id}}" method='POST'>
@method('PUT')
@csrf
  <label for="fname">Name:</label><br>
  <input type="text" name="name" value="{{$product->name}}"><br>
  <label for="lname">Description:</label><br>
  <input type="text" name="description" value="{{$product->description}}" ><br><br>
  <label for="lname">price:</label><br>
  <input type="number" name="price" value="{{$product->price}}" ><br><br>
  <label for="lname">Image URL:</label><br>
  <input type="text" name="image_url" value="{{$product->image_url}}" ><br><br>
  <input type="submit" value="Save">
</form> 