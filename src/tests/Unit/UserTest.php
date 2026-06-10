<?php

use App\Models\User;

test('user has fillable attributes', function () {
    $user = new User();
    expect($user->getFillable())->toBe(['name', 'email', 'password']);
});

test('user hides password and remember token', function () {
    $user = new User();
    expect($user->getHidden())->toBe(['password', 'remember_token']);
});

test('user password is cast to hashed', function () {
    $user = new User();
    expect($user->getCasts())->toHaveKey('password');
    expect($user->getCasts()['password'])->toBe('hashed');
});

test('user email_verified_at is cast to datetime'   , function () {
    $user = new User();
    expect($user->getCasts())->toHaveKey('email_verified_at');
    expect($user->getCasts()['email_verified_at'])->toBe('datetime');
});
