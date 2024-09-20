<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        // Jeder Benutzer darf die Jobs sehen
        return true;
    }

    public function create(User $user)
    {
        // Nur Admins und Benutzer mit der Rolle 'company' dürfen Jobs erstellen
        return $user->role === 'admin' || $user->role === 'company';
    }

    public function update(User $user, Job $job)
    {
        // Der Benutzer darf den Job aktualisieren, wenn er der Besitzer ist oder ein Admin oder 'company' ist
        return $user->id === $job->user_id || $user->role === 'admin' || $user->role === 'company';
        return true;
    }

    public function delete(User $user, Job $job)
    {
        // Der Benutzer darf den Job löschen, wenn er der Besitzer ist oder ein Admin oder 'company' ist
        return $user->id === $job->user_id || $user->role === 'admin' || $user->role === 'company';
    }
}
