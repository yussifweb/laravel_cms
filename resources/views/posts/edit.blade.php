@extends('layouts.home')

@section('content')
<div class="content-section">
    <h2>Edit Post(Hello World)</h2>
</div>

<div class="content-section">
    <input type="hidden" name="id" value="id">
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title" placeholder="Add Title" value="title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea id="editor1" class="form-control" name="body"
            placeholder="Add Body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quis fuga maiores autem officiis,
	 temporibus debitis aliquam totam sed tenetur nihil nulla, fugiat praesentium sit assumenda obcaecati voluptates odio ipsam.
	 Blanditiis tempora velit perferendis quae? Nulla aut doloremque voluptate ullam ipsum a fugiat vitae quod sit? Rem consectetur dolorem dolore?</textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <option value="id">Cat Name</option>
        </select>
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection