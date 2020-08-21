@extends('layouts.home')

@section('content')

<div class="content-section">
    <h2>Create Post</h2>
</div>

<div class="content-section">

    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <option value="1">News</option>
        </select>
    </div>
    <div class="form-group">
        <label>Upload Image</label><br>
        <input type="file" name="userfile" size="20">
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection