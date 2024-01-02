<?php
declare(strict_types=1);
namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApiPolicy
{

    private $user;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function hasRequiredSecurityLevel(int $securityLevel) {
        if ($this->user->security >= $securityLevel) {
            return true;
        } else {
            return false;
        }
    }

    public function view() {
        $securityLevel = intval(config('auth.security_level.api.view'));
        return $this->hasRequiredSecurityLevel($securityLevel);
    }

    public function update() {
        $securityLevel = intval(config('auth.security_level.api.update'));
        return $this->hasRequiredSecurityLevel($securityLevel);
    }

    public function create() {
        $securityLevel = intval(config('auth.security_level.api.create'));
        return $this->hasRequiredSecurityLevel($securityLevel);
    }

    public function delete() {
        $securityLevel = intval(config('auth.security_level.api.delete'));
        return $this->hasRequiredSecurityLevel($securityLevel);
    }
}
