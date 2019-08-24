<?php

namespace Dillingham\OptionalPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

trait OptionallyAuthorizesRequests
{
    use AuthorizesRequests;

    public function authorize($ability, $arguments)
    {
        [$ability, $arguments] = $this->parseAbilityAndArguments($ability, $arguments);

        $policy = Gate::getPolicyFor($arguments);

        if ($policy && method_exists($policy, $ability)) {
            return Gate::authorize($ability, $arguments);
        }

        return true;
    }
}
