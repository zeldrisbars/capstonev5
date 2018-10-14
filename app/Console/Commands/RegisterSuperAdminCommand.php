<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\Command;


class RegisterSuperAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:super-admin'; //Command will be called as php artisan register:super-admin;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register super admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    private $user;
    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $details = $this->getDetails();
        $admin = $this->user->createSuperAdmin($details);
        $this->display($admin);
    }
    /**
     * Ask for admin details.
     *
     * @return array
     */
    private function getDetails() : array
    {
        $details['id'] = $this->ask('ID (Enter it #1)');
        $details['lastname'] = $this->ask('Last Name');
        $details['firstname'] = $this->ask('First Name');
        $details['middlename'] = $this->ask('Middle Name');
        $details['username'] = $this->ask('Username');
        $details['email'] = $this->ask('Email');
        $details['password'] = $this->secret('Password');
        $details['confirm_password'] = $this->secret('Confirm password');
        $details['role'] = $this->ask('Role');
        while (! $this->isValidPassword($details['password'], $details['confirm_password'])) {
            if (! $this->isRequiredLength($details['password'])) {
                $this->error('Password must be more that six characters');
            }
            if (! $this->isMatch($details['password'], $details['confirm_password'])) {
                $this->error('Password and Confirm password do not match');
            }
            $details['password'] = $this->secret('Password');
            $details['confirm_password'] = $this->secret('Confirm password');
        }
        return $details;
    }
    /**
     * Display created admin.
     *
     * @param array $admin
     * @return void
     */
    private function display(User $admin) : void
    {
        $headers = ['Name', 'Email', 'Super admin'];
        $fields = [
            'email' => $admin->email,
            'admin' => $admin->isSuperAdmin()
        ];
        $this->info('Super admin created');
        $this->table($headers, [$fields]);
    }
    /**
     * Check if password is vailid
     *
     * @param string $password
     * @param string $confirmPassword
     * @return boolean
     */
    private function isValidPassword(string $password, string $confirmPassword) : bool
    {
        return $this->isRequiredLength($password) &&
        $this->isMatch($password, $confirmPassword);
    }
    /**
     * Check if password and confirm password matches.
     *
     * @param string $password
     * @param string $confirmPassword
     * @return bool
     */
    private function isMatch(string $password, string $confirmPassword) : bool
    {
        return $password === $confirmPassword;
    }
    /**
     * Checks if password is longer than six characters.
     *
     * @param string $password
     * @return bool
     */
    private function isRequiredLength(string $password) : bool
    {
        return strlen($password) > 5;
    }
}
