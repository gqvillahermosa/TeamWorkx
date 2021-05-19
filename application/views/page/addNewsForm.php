<div class="container">
<center><h1>Add News</h1></center>
<hr>
<form method="post" action="addNews">
<section class="m-5">
<label>Title</label>
<input type="text" name="title" class="form-control" placeholder="Title">
<small class="form-text text-muted">Please enter News Title</small>

<br>
<label>Body</label>
<textarea name="body" class="form-control"></textarea>
<small class="form-text text-muted">News Body</small>
<br>

<label>Link</label>
<input type="text" name="link" class="form-control" placeholder="Link">
<small class="form-text text-muted">Please enter Link</small>
<br>

<label>Published</label>
<input type="date" name="published" class="form-control" placeholder="Published">
<small class="form-text text-muted">Please enter Date </small>
<br>

<label>Chapter</label>
<input type="text" name="chapter" class="form-control" placeholder="Chapter">
<small class="form-text text-muted">Please enter Chapter</small>
<br>

<label>Author</label>
<input type="text" name="author" class="form-control" placeholder="Author">
<small class="form-text text-muted">Please enter Author</small>
<br>

<label>Remarks</label>
<input type="text" name="remarks" class="form-control" placeholder="Remarks">
<small class="form-text text-muted">Please enter Remarks</small>
<br>
<button type="submit" name="addNews" class="form-control btn btn-success btn-block">Add News</button>
</div>
</section>
</form>
</div>