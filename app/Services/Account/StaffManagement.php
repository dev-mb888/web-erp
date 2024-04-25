<?php

namespace App\Services\Account;

use App\Enums\UserRole;
use App\Exceptions\ServiceException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StaffManagement
{
    public function registerStaff(string $name, string $username, string $email, string $password): void
    {
        User::query()
            ->create([
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
    }

    /**
     * @throws \Throwable
     */
    public function updateBankAccount(User $user, string $holder, string $bankName, string $bankAccountNumber): void
    {
        throw_if($user->role != UserRole::staff, new ServiceException('Only staff can update bank account'));

        $user->banks()->updateOrCreate([
            'holder' => $holder,
            'bank_name' => $bankName,
            'bank_account_number' => $bankAccountNumber
        ]);
    }
}
