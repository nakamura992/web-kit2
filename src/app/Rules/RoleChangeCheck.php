<?php

namespace App\Rules;

use App\Enums\UserRole;
use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RoleChangeCheck implements ValidationRule
{
    public function __construct(
        public int $id
    ) {
        $this->id = $id;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = User::findOrFail($this->id);
        $users = User::all();
        if (
            $user->role->value == UserRole::SERVICE_OWNER->value &&
            $value != UserRole::SERVICE_OWNER->value &&
            $users->where('role', UserRole::SERVICE_OWNER->value)->count() <= 1
        ) {
            $fail("ひとつ以上の" . UserRole::SERVICE_OWNER->label() . "が必要です。");
        }
    }
}
