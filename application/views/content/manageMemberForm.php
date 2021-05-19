<form action="addMember.php" method="post" enctype="multipart/form-data">
<section class="m-5">
<h2>Add New Members</h2>
<label>ID Number</label>
<input type="text" name="id" class="form-control" placeholder="Enter your firstname">
<small class="form-text text-muted">Please enter ID number</small>
<br>
<div class="form-group">
<label>Firstname</label>
<input type="text" name="firstname" class="form-control" placeholder="Enter your firstname">
<small class="form-text text-muted">Please enter  firstname eg.. John, Pedro, etc</small>
<br>
<label>Middlename</label>
<input type="text" name="middlename" class="form-control" placeholder="Enter your firstname">
<small class="form-text text-muted">Please enter middlename </small>
<br>
<label>Surname</label>
<input type="text" name="surname" class="form-control" placeholder="Enter your surname">
<small class="form-text text-muted">Please enter  surname eg.. Smith, Villahermosa</small>
<br>
<label>Gender</label><br>
<select class=”custom-select” name="gender">
<option value=”M” selected>Male</option>
<option value=”F”>Female</option>
</select>
<br>
<small class="form-text text-muted">Select Gender</small>
<br>
<label>Birthdate</label>
<input type="text" name="birthdate" class="form-control" placeholder="MM/DD/YYYY">
<small class="form-text text-muted">Please enter date of birth</small>
<br>
<label>Civil Status</label><br>
<select class=”custom-select” name="civil_status">
<option value=”S” selected>Single</option>
<option value=”M”>Married</option>
<option value=”W”>Widow/er</option>
<option value=”D”>Divorse</option>
</select>
<br>
<small class="form-text text-muted">Select Civil Status</small><br>

<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter Email">
<small class="form-text text-muted">Please enter a valid email address</small>
<br>
<label>Photo</label>
<input type="file" name="uploadfile" class="form-control" value="">
<small class="form-text text-muted">Pick a photo. Must be not more thant 2 MB</small>
<br>
<button type="submit" name="upload" class="form-control btn btn-outline-primary ">Add</button>
</div>
</section>
</form>