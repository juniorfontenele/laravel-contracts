<?php

declare(strict_types=1);

namespace JuniorFontenele\LaravelContracts\Validation;

interface Validatable
{
    /**
     * Validate the data and return validated attributes.
     *
     * @return array<string, mixed> The validated data
     * @throws \Illuminate\Validation\ValidationException When validation fails
     */
    public function validate(): array;

    /**
     * Get the validation rules.
     *
     * @return array<string, mixed>
     */
    public function rules(): array;

    /**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array;

    /**
     * Get custom attribute names for validation errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array;
}
