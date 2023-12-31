<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OceanPolicy
{
    private $user;
    const MINIMAL_SECURITY_LEVEL = 2;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function view() {

    }

    public function create() {

    }

    public function update() {
        if ($this->user->security >= self::MINIMAL_SECURITY_LEVEL) {
            return true;
        } else {
            return false;
        }
    }

    public function delete() {

    }
}
