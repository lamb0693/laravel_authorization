<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Item;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // user Id 와 Item 의 user Id가 같으면 true return
    public function update(User $user, Item $item){
        return $user->id === $item->id;
    }

    public function edit(User $user, Item $item){
        return $user->id === $item->id;
    }

    // 모두 true return
    public function view(User $user, Item $item){
        return true;
    }

}
