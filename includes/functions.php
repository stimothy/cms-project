<?php include "db.php"; ?>

<?php

function getCategoryTitles($limit = -1) {
    $titles;
    $categories = getCategories($limit);

    for ($i = 0; $i < sizeof($categories); $i++) {
        $titles[$i] = $categories[$i]["catTitle"];
    }
    
    return $titles;
}

function getCategories($limit) {
    $categories;
    $categoryData = getCategoryData($limit);

    for ($i = 0; $i < sizeof($categoryData); $i++) {
        $categories[$i]["catId"] = $categoryData[$i]["cat_id"];
        $categories[$i]["catTitle"] = $categoryData[$i]["cat_title"];
    }

    return $categories;
}

function getPostSummaries($tag = "") {
    $postSummaries;
    $posts = getPosts($tag);

    for ($i = 0; $i < sizeof($posts); $i++) {
        $postSummaries[$i]["postTitle"] = $posts[$i]["postTitle"];
        $postSummaries[$i]["postAuthor"] = $posts[$i]["postAuthor"];
        $postSummaries[$i]["postDate"] = $posts[$i]["postDate"];
        $postSummaries[$i]["postImage"] = $posts[$i]["postImage"];
        $postSummaries[$i]["postContent"] = $posts[$i]["postContent"];
    }
    
    return $postSummaries;
}

function getPosts($tag) {
    $posts;
    $postData = getPostData($tag);

    for ($i = 0; $i < sizeof($postData); $i++) {
        $posts[$i]["postId"] = $postData[$i]["post_id"];
        $posts[$i]["postCategoryId"] = $postData[$i]["post_category_id"];
        $posts[$i]["postTitle"] = $postData[$i]["post_title"];
        $posts[$i]["postAuthor"] = $postData[$i]["post_author"];
        $posts[$i]["postDate"] = $postData[$i]["post_date"];
        $posts[$i]["postImage"] = $postData[$i]["post_image"];
        $posts[$i]["postContent"] = $postData[$i]["post_content"];
        $posts[$i]["postTags"] = $postData[$i]["post_tags"];
        $posts[$i]["postCommentCount"] = $postData[$i]["post_comment_count"];
        $posts[$i]["postStatus"] = $postData[$i]["post_status"];
    }

    return $posts;
}

function getCategoryData($limit) {
    $query;
    if ($limit > -1) {
        $query = "SELECT * FROM categories";
    }
    else {
        $query = "SELECT * FROM categories LIMIT $limit";
    }
    return getData($query);
}

function getPostData($tag) {
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$tag%'";
    return getData($query);
}

function getData($query) {
    global $connection;
    $data;

    $result = mysqli_query($connection, $query);

    for ($i = 0; $row = mysqli_fetch_assoc($result); $i++) {
        $data[$i] = $row;
    }

    return $data;
}

?>