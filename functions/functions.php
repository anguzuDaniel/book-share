<?php

/**
 * getAllBooks
 *
 * @param  mixed $conn
 * @param  mixed $column
 * @return array
 */
function getAllBooks($conn, $column = '*')
{
    $sql = "SELECT $column FROM book";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

/**
 * getBookById
 *
 * @param  mixed $conn
 * @param  mixed $id
 * @param  mixed $column
 * @return array
 */
function getBookById($conn, $id, $column = '*')
{
    $sql = "SELECT $column FROM book WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}

function updateBook($conn, $id, $name, $author, $image, $file, $description, $category)
{
    $sql = "UPDATE book SET 
            name = :name, 
            author = :author,  
            image = :image, 
            file = :file, 
            description = :description, 
            category = :category 
            WHERE id = :id ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':file', $file);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':category', $category);

    $stmt->execute(array(
        ':id' => $id,
        ':name' => $name,
        ':author' => $author,
        ':image' => $image,
        ':file' => $file,
        ':description' => $description,
        ':category' => $category
    ));
}

/**
 * getBooksLimit
 *
 * @param  mixed $conn
 * @param  mixed $limit
 * @param  mixed $columns
 * @return void
 */
function getBooksLimit($conn, $limit, $columns = "*")
{
    $sql = "SELECT $columns FROM book ORDER BY id DESC LIMIT $limit ";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

/**
 * getAllCategories
 *
 * @param  mixed $conn
 * @param  mixed $columns
 * @return array
 */
function getAllCategories($conn, $columns = "*")
{
    $sql = "SELECT $columns FROM category ORDER BY name DESC ";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

/**
 * addBook
 *
 * @param  mixed $conn
 * @param  mixed $name
 * @param  mixed $author
 * @param  mixed $image
 * @param  mixed $file
 * @param  mixed $description
 * @param  mixed $category
 * @return void
 */
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


/**
 * formValidation
 * 
 * @param  mixed $name
 * @param  mixed $author
 * @param  mixed $image
 * @param  mixed $files
 * @param  mixed $description
 * @param  mixed $category
 * @return void
 */
function formValidation($name, $author, $image, $pdf_file, $description, $category)
{

    $errors = [];

    if ($name == "") {
        $errors[] = "Book name cannot be left empty";
    }

    if ($author == "") {
        $errors[] = "Author name cannot be left empty";
    }

    if ($pdf_file == "") {
        $errors[] = "Please provide a pdf file";
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
