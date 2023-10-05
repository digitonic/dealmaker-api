<?php

namespace Digitonic\DealmakerApi\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getUsersInvestments
 *
 * Get Investments
 */
class GetUsersInvestments extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/users/investments';
    }

    /**
     * @param  null|int  $page Page offset to fetch.
     * @param  null|int  $offset Pad a number of results.
     * @param  string  $email The email of the user.
     */
    public function __construct(
        protected ?int $page,
        protected ?int $offset,
        protected string $email,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'offset' => $this->offset, 'email' => $this->email]);
    }
}
