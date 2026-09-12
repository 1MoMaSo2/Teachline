<?php
namespace App\Core;
class Validator
{
    private array $errors = [];

    public function required(string $field , mixed $value , string $message): void
    {
        if (trim((string) $value) === '') {
            $this->errors[$field] = $message;
        }
    }

    public function email(string $field , string $value , string $message): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = $message;
        }
    }

    public function minLength(string $field , string $value , int $length , string $message): void {
        if (strlen($value) < $length) {
            $this->errors[$field] = $message;
        }
    }

    public function regex(string $field , string $value , string $pattern , string $message): void {
        if (!preg_match($pattern, $value)) {
            $this->errors[$field] = $message;
        }
    }

    public function fails(): bool
    {
        return !empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }
}