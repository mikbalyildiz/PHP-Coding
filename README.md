# PHP-Coding
All PHP related small projects, you can use it freely.

--------------------------------------
detail.php                 date: 30.05.2023

This code is used to remove <img> tags from a WordPress content. <img> tags are typically used to display images within an HTML page. However, there may be cases where we only want to use the content as plain text without any images. This code takes a specific content and removes all the <img> tags within it. As a result, we obtain the content without any <img> tags.

The code uses the get_post_field() function to retrieve the content of a specific post. Then, it uses the preg_replace() function to find and replace all the <img> tags within the content with an empty string. Consequently, we get a modified content that doesn't contain any <img> tags. The echo function is used to print the modified content on the screen.

With this code, you can use a WordPress content in a text-based format and exclude any images present in it.
