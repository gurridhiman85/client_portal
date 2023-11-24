<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the roles and permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Administrator', [
            //Support
            'support:read',
            'support:create',
            'support:comment',
            'support:close',
            //Billing
            'billing:view',
            'billing:edit',
            //Team
            'team:view',
            'team:edit',
            'team:manage_members',
            'team:delete',
            //Projects
            'project:view',
            'project:create',
            'project:comment',
            'project:delete',
            //Campaigns

            //Integrations
            'create',
            'read',
            'update',
            'billing',
            'delete',
        ])->description('Administrator users can perform any action.');

        Jetstream::role('member', 'Member', [
            'read',
            'create',
            'update',
        ])->description('Member users have the ability to read, create, and update. No access to team billing.');

        Jetstream::role('guest', 'Guest', [
            'read'
        ])->description('Guest users can only view. They can not open tickets or communicate with the team.');
    }
}
