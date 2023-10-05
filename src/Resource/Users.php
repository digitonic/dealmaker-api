<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Users\GetUsersInvestments;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Users extends Resource
{
    /**
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     * @param  string  $email The email of the user.
     */
    public function getUsersInvestments(?int $page, ?int $offset, string $email): Response
    {
        return $this->connector->send(new GetUsersInvestments($page, $offset, $email));
    }
}
