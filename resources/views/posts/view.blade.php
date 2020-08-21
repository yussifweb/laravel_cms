<article class="content-section">
    <h2 class="article-title"><?php echo $post['title']; ?></h2>
    <div class=""><img class="img-fluid" src="img.jpg"></div>
    <div class="media-body">
        <div class="article-metadata">
            <small class="text-muted">20/08/20 in <strong>Music/Mixes</strong></small>
        </div>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nostrum possimus maxime maiores
            facere magni
            cum ex aspernatur molestias iure eligendi omnis illo cumque voluptate iusto,
            ad corporis minus, mollitia fugiat, nisi rem animi? Eaque optio maiores tempore
            deserunt corporis? Voluptates, adipisci vitae! Corporis nobis minima libero sapiente enim error.</p>
    </div>
</article>

<hr>

<div>
    <a class="btn btn-info btn-sm mt-1 mb-1" href="#">Update</a>
    <button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"
        data-target="#deleteModal">Delete</button>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Post?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the post?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div>
        </div>
    </div>
</div>
<hr>
<h3 class="content-section">Comments</h3>
<div class="content-section">
    <div>
        <p class="comment">Good Job [by <strong>Innocent</strong>]</p>
    </div>
    <p>No Comments To Display</p>
</div>

<hr>
<h3 class="content-section">Add Comment</h3>
<div class="content-section">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
    </div>
</div>
<input type="hidden" name="slug" value="name">
<button class="btn btn-primary" type="submit">Submit</button>
</form>
