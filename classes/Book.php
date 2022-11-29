<?php
class Book
{
    public $Id;
    public $name;
    public $author;
    public $image;
    public $pdf_file;
    public $description;


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
     * @return array
     */
    public function addBook($conn, $name, $author, $image, $file, $description, $category)
    {
        $sql = "INSERT INTO `book` (`id`, `name`, `author`, `image`, `file`, `description`, `category`) 
    VALUES (NULL, :name, :author, :image,  :file, :description, :category)  ";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':file', $file);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category', $category);

        return  $stmt->execute();
    }

    /**
     * getAllBooks
     *
     * @param  mixed $conn
     * @param  mixed $column
     * @return array
     */
    public function getAllBooks($conn, $column = '*')
    {
        $sql = "SELECT $column FROM book";

        $stmt = $conn->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function getBookById($conn, $id, $column = '*')
    {
        $sql = "SELECT $column FROM book WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }
    }

    public function deleteBookById($conn, $id)
    {
        $sql = "DELETE FROM book WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }

    public function updateBook($conn, $id, $name, $author, $image, $file, $description, $category)
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
    public function getBooksLimit($conn, $limit, $columns = "*")
    {
        $sql = "SELECT $columns FROM book ORDER BY id DESC LIMIT $limit ";

        $stmt = $conn->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
