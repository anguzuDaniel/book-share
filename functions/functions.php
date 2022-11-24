<?php

function getAllBooks($conn, $column = '*')
{
    $sql = "SELECT $column FROM book";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

function getBooksLimit($conn, $limit, $columns = "*")
{
    $sql = "SELECT $columns FROM book ORDER BY id DESC LIMIT $limit ";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

function getAllCategories($conn, $columns = "*")
{
    $sql = "SELECT $columns FROM category ORDER BY name DESC ";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

function addBook($conn, $name, $author, $image, $file, $description, $category)
{
    $sql = "INSERT INTO book(name, author, image, file, description, category) 
            VALUES (:name, :author, :image,  :file, :description, :category)  ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':file', $file);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':category', $category);

    $stmt->execute(array(':name' => $name, ':author' => $author, ':image' => $image, ':file' => $file, ':description' => $description, ':category' => $category));
}


function formValidation($name, $author, $image, $files, $description, $category)
{

    $errors = [];

    if ($name == "") {
        $errors[] = "Book name cannot be left empty";
    }

    if ($author == "") {
        $errors[] = "Author name cannot be left empty";
    }

    if ($files == "") {
        $errors[] = "File cannot be left empty";
    }

    if ($image == "") {
        $errors[] = "Please provide an Book cover";
    }

    if ($description == "") {
        $errors[] = "Book description cannot be left empty";
    }

    if ($category == "") {
        $errors[] = "Category cannot br left empty";
    }

    return $errors;
}
