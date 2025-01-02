<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Product page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" container my-5">
  <h1 class="text-center bg-dark text-light rounded-2  py-3 ">Create Product page</h1>
  <form action="{{ route('product.store_data') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>

    <label for="skill" class="form-label">Skills</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="C++" id="skill1" name="skill[]">
      <label class="form-check-label" for="skill1">C++</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="PHP" id="skill2" name="skill[]">
      <label class="form-check-label" for="skill2">PHP</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Python" id="skill3" name="skill[]">
      <label class="form-check-label" for="skill3">Python</label>
    </div>

    <div class="mb-3">
      <label for="images" class="form-label">Upload Multiple Images</label>
      <input class="form-control" name="images[]" type="file" id="images" multiple>
    </div>

    <label for="gender" class="form-label">Gender</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
      <label class="form-check-label" for="genderMale">Male</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
      <label class="form-check-label" for="genderFemale">Female</label>
    </div>

    <div class="mb-3">
      <label for="country" class="form-label">Country</label>
      <select class="form-select" name="country" id="country" required>
        <option selected>Select Your Country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Bangladesh">Bangladesh</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary w-100 my-4">Submit</button>
  </form>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>