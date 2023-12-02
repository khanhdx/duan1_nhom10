<!-- comments/update.php -->

<form method="POST" action="/admin/comments/update?comment_id=<?php echo $comment['id']; ?>">
    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" value="<?php echo $comment['product_id']; ?>" required>

    <label for="user_name">User Name:</label>
    <input type="text" name="user_name" value="<?php echo $comment['user_name']; ?>" required>

    <label for="content">Content:</label>
    <textarea name="content" required><?php echo $comment['content']; ?></textarea>

    <input type="submit" name="btn-submit-comment" value="Submit">
</form>
