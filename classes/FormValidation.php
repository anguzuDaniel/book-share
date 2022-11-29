<?php

class FormValidation
{
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
    public static function bookFormValidation($name, $author, $image, $pdf_file, $description, $category)
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

    public static function userFormValidation($user_email, $username, $user_password, $confirm_password)
    {

        $errors = [];

        if ($user_email == "") {
            $errors[] = "Book name cannot be left empty";
        }

        if ($username == "") {
            $errors[] = "Author name cannot be left empty";
        }

        if ($user_password == "") {
            $errors[] = "Please provide a pdf file";
        }

        if ($confirm_password == "") {
            $errors[] = "Please provide an Book cover";
        }

        return $errors;
    }

    public static function userLoginFormValidation($email, $password)
    {

        $errors = [];

        if ($email == "") {
            $errors[] = "Book name cannot be left empty";
        }

        if ($password == "") {
            $errors[] = "Please provide a pdf file";
        }

        return $errors;
    }
}
