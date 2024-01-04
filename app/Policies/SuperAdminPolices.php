<?php
declare(strict_types=1);
namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SuperAdminPolices
{
    private $user;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function checkSuperAdmin() {
        if ($this->user->super_admin) {
            return true;
        } else {
            return false;
        }
    }
}
