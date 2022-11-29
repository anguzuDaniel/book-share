<?php
class Category
{
    public $id;
    public $name;

    /**
     * getAllCategories
     *
     * @param  mixed $conn
     * @param  mixed $columns
     * @return array
     */
    public function getAllCategories($conn, $columns = "*")
    {
        $sql = "SELECT $columns FROM category ORDER BY name DESC ";

        $stmt = $conn->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    /**
     * getAllCategories
     * ucreates a new category in the database
     * @param  mixed $conn
     * @param  mixed $columns
     * @return array
     */
    public function createNewCategory($conn, $catName)
    {
        $sql = "INSERT INTO category(name) VALUE (:catName)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':catName', $catName);

        return $stmt->execute();
    }

    /**
     * getAllCategories
     * updates a book category in the database
     * @param  mixed $conn
     * @param  mixed $columns
     * @return array
     */
    public function editCategoryName($conn, $id, $catName)
    {
        $sql = "UPDATE category set `name` = :catName WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':catName', $catName);

        return $stmt->execute();
    }
}
