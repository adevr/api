<?php


namespace Domains\Discussions\Policies;


use Domains\Accounts\Models\User;
use Domains\Discussions\Models\Answer;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnswerPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Answer $question): bool
    {
        return $question->author->is($user);
    }
}